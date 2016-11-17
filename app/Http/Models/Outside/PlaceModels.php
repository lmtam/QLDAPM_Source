<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;

use DB;

class PlaceModels extends DbTable{
    public $primaryKey = 'MaDuLieu';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'dulieu';

        $this->params = \Request::all();

    }


    public function getDetail($MaDuLieu){
        $select = DB::table('dulieu')
            ->select ('dulieu.MaDuLieu','dulieu.SoNha','tendiadiem.TenDiaDiem','dichvu.TenDichVu','duong.TenDuong','phuong.TenPhuong','quanhuyen.TenQuanHuyen','tinhthanh.TenTinhThanh')
            ->where('MaDuLieu',$MaDuLieu)
            ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem')
            ->leftjoin('duong','duong.MaDuong','=','dulieu.MaDuong')
            ->leftjoin('phuong','phuong.MaPhuong','=','dulieu.MaPhuong')
            ->leftjoin('quanhuyen','quanhuyen.MaQuanHuyen','=','dulieu.MaQuanHuyen')
            ->leftjoin('tinhthanh','tinhthanh.MaTinhThanh','=','dulieu.MaTinhThanh')
            ->leftjoin('dichvu','dichvu.MaDichVu','=','dulieu.MaDichVu')->first();
        return $select;


    }

    public function search($tukhoa){

        $data_diadiem = DB::table('tukhoadiadiem')->get();
        $data_dichvu = DB::table('tukhoadichvu')->get();
        $data_dulieu = DB::table('dulieu')->get();

        $result_diadiem =  Array();
        $result_dichvu = Array();
        $result_dulieu = Array();

        $demkq = 0; // dem so luong ket qua
        foreach ($data_diadiem as $item){
            if(strpos(strtolower($tukhoa),strtolower($item->TuKhoaTenDiaDiem)) !== false){
                array_push($result_diadiem,$item->MaTenDiaDiem);
                $demkq++;
            }
        }
        foreach ($data_dichvu as $item){
            if(strpos(strtolower($tukhoa),strtolower($item->TuKhoaDichVu)) !== false){
                array_push($result_dichvu,$item->MaDichVu);
                $demkq++;
            }
        }

        foreach ($data_dulieu as $item){
            foreach ($result_diadiem as $itemdiadiem){
                if($item->MaTenDiaDiem == $itemdiadiem)
                    if($this->IsNotExit($item->MaDuLieu,$result_dulieu))
                        array_push($result_dulieu,$item->MaDuLieu);
            }
            foreach ($result_dichvu as $itemdichvu){
                if($item->MaDichVu == $itemdichvu)
                    if($this->IsNotExit($item->MaDuLieu,$result_dichvu))
                        array_push($result_dulieu,$item->MaDuLieu);
            }
        }

        $data_return = DB::table('dulieu')->whereIn('MaDuLieu',$result_dulieu)->get();
        $list_Madiadiem = Array();
        $list_Maduong = Array();
        $list_Maphuong = Array();
        $list_Maquanhuyen = Array();
        $list_Matinhthanh = Array();
        // lay tung cot trong du lieu thanh array
        foreach ($data_return as $item){
            array_push($list_Madiadiem,$item->MaTenDiaDiem);
        }
        foreach ($data_return as $item){
            array_push($list_Maduong,$item->MaDuong);
        }
        foreach ($data_return as $item){
            array_push($list_Maphuong,$item->MaPhuong);
        }
        foreach ($data_return as $item){
            array_push($list_Maquanhuyen,$item->MaQuanHuyen);
        }
        foreach ($data_return as $item){
            array_push($list_Matinhthanh,$item->MaTinhThanh);
        }
        $result = array();
        $i=0;
        foreach ($data_return as $item){

            $data_tendiadiem = $this->getTenDiaDiembyID($item->MaTenDiaDiem);

            $data_tenduong = $this->getDuongById($item->MaDuong);
            $data_tenphuong = $this->getPhuongbyID($item->MaPhuong);
            $data_tenquanhuyen = $this->getQuanHuyenbyID($item->MaQuanHuyen);
            $data_tentinhthanh = $this->getTinhThanhbyID($item->MaTinhThanh);
            $data_tendichvu = $this->getTenDichVubyID($item->MaDichVu);
            $obj  = new SearchArray();
            $obj->diadiem   = $data_tendiadiem;
            $obj->duong     = $data_tenduong;
            $obj->phuong    = $data_tenphuong;
            $obj->quanhuyen = $data_tenquanhuyen;
            $obj->tinhthanh = $data_tentinhthanh;
            $obj->dichvu    = $data_tendichvu;
            $obj->dulieu    = $item;

            array_push($result,$obj);
//            array_push($result)
//
//            echo ("<h3><font color=\"blue\">");
//            echo ($data_tendiadiem->TenDiaDiem).": </h3></font>";
//            echo ($data_tendichvu->TenDichVu)." - ";
//            echo ($item->SoNha).",";
//            echo ($data_tenduong->TenDuong).",";
//            echo ($data_tenphuong->TenPhuong).",";
//            echo ($data_tenquanhuyen->TenQuanHuyen).",";
//            echo ($data_tentinhthanh->TenTinhThanh)."<br>";
        }
        return $result;
    }
    // kiem tra du lieu co trong mang array hay chua
    public function IsNotExit($str,array $array){
        foreach ($array as $item){
            if($item == $str)
                return false;
        }
        return true;
    }
    public function getDuongById($id){
        $select = DB::table('duong')
            ->where('MaDuong',$id)->first();
        return $select;
    }
    public function getTenDiaDiembyID($id){
        $select = DB::table('tendiadiem')
            ->where('MaTenDiaDiem',$id)->first();
        return $select;
    }
    public function getPhuongbyID($id){
        $select = DB::table('phuong')
            ->where('MaPhuong',$id)->first();
        return $select;
    }
    public function getQuanHuyenbyID($id){
        $select = DB::table('quanhuyen')
            ->where('MaQuanHuyen',$id)->first();
        return $select;
    }
    public function getTinhThanhbyID($id){
        $select = DB::table('tinhthanh')
            ->where('MaTinhThanh',$id)->first();
        return $select;
    }
    public function getTenDichVubyID($id){
        $select = DB::table('dichvu')
            ->where('MaDichVu',$id)->first();
        return $select;
    }

}
class SearchArray{
    public $diadiem;
    public $dichvu;
    public $duong;
    public $phuong;
    public $quanhuyen;
    public $tinhthanh;
    public $dulieu;

}
