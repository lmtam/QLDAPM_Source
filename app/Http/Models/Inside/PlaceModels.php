<?php
namespace App\Http\Models\Inside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;

use DB;
use App\Http\Models\Inside\DiaDiemModels;
use phpDocumentor\Reflection\Types\Object_;

class PlaceModels extends DbTable{
    public $primaryKey = 'MaDuLieu';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
//        $this->table = '';điền tên table vào đây
        $this->table = 'dulieu';
        $this->params;
        $this->timestamps = false;
    }



    public function getShowAll(){
        $select = DB::table('dulieu')
                ->select ('dulieu.MaDuLieu','dulieu.SoNha','tendiadiem.TenDiaDiem','duong.TenDuong','phuong.TenPhuong','quanhuyen.TenQuanHuyen','tinhthanh.TenTinhThanh')
                ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem')
                ->leftjoin('duong','duong.MaDuong','=','dulieu.MaDuong')
                ->leftjoin('phuong','phuong.MaPhuong','=','dulieu.MaPhuong')
                ->leftjoin('quanhuyen','quanhuyen.MaQuanHuyen','=','dulieu.MaQuanHuyen')
                ->leftjoin('tinhthanh','tinhthanh.MaTinhThanh','=','dulieu.MaTinhThanh');
        return $select;

    }

    public function add($data){

        $diadiemmodel   = new DiaDiemModels();
        $MaTenDiaDiem   = $diadiemmodel->add($data['TenDiaDiem']);
        $img = explode('/', $data['image_name']);
        $data['image_name'] = $img[count($img) - 1];

        $tenduong = $this->getDuongById($data['MaDuong']);

        $latlong        = $this->get_lat_long($data['SoNha'].' '.$tenduong->TenDuong);

        $placemodel = new PlaceModels();
        $placemodel->MaDichVu       = $data['MaDichVu'];
        $placemodel->MaTenDiaDiem   = $MaTenDiaDiem;
        $placemodel->SoNha          = $data['SoNha'];
        $placemodel->MaDuong        = $data['MaDuong'];
        $placemodel->MaPhuong       = $data['MaPhuong'];
        $placemodel->MaQuanHuyen    = $data['MaQuanHuyen'];
        $placemodel->MaTinhThanh    = $data['MaTinhThanh'];
        $placemodel->KinhDo         = $latlong['lng'];
        $placemodel->ViDo           = $latlong['lat'];
        $placemodel->ChuThich       = $data['ChuThich'];
        $placemodel->image_name     = $data['image_name'];
        if($placemodel->save()){
            return $placemodel->MaDuLieu;
        }
        else{
            return null;
        }
    }

    public function edit($data){
        $diadiemmodel   = new DiaDiemModels();
        $diadiemmodel->edit($data['MaTenDiaDiem'],$data['TenDiaDiem']);
        //chuyen doi ten file name image;
        $img = explode('/', $data['image_name']);
        $data['image_name'] = $img[count($img) - 1];

        $tenduong = $this->getDuongById($data['MaDuong']);

        $latlong        = $this->get_lat_long($data['SoNha'].' '.$tenduong->TenDuong);

        $placemodel = self::find($data['MaDuLieu']);
        $placemodel->MaDichVu       = $data['MaDichVu'];
        $placemodel->MaTenDiaDiem   = $data['MaTenDiaDiem'];
        $placemodel->SoNha          = $data['SoNha'];
        $placemodel->MaDuong        = $data['MaDuong'];
        $placemodel->MaPhuong       = $data['MaPhuong'];
        $placemodel->MaQuanHuyen    = $data['MaQuanHuyen'];
        $placemodel->MaTinhThanh    = $data['MaTinhThanh'];
        $placemodel->KinhDo         = $latlong['lng'];
        $placemodel->ViDo           = $latlong['lat'];
        $placemodel->ChuThich       = $data['ChuThich'];
        $placemodel->image_name     = $data['image_name'];
        if($placemodel->save()){
            return $placemodel->MaDuLieu;
        }
        else{
            return null;
        }
    }
    public function getDelete($id){
        return DB::table('dulieu')->where('MaDuLieu','=',$id)->delete();
    }

    public function getAllDuong(){
        return DB::table('duong')->get();
    }
    public function getAllPhuong(){
        return DB::table('phuong')->get();
    }
    public function getAllQuanHuyen(){
        return DB::table('quanhuyen')->get();
    }
    public function getAllTinhThanh(){
        return DB::table('tinhthanh')->get();
    }
    public function getAllDichVu(){
        return DB::table('dichvu')->get();
    }

    public function getDuLieuById($id){
        $select = DB::table('dulieu')->select('dulieu.*','tendiadiem.TenDiaDiem')
                    ->where('dulieu.MaDuLieu',$id)
                    ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem')->first();

        return $select;
    }
    public function getDuongById($id){
        $select = DB::table('duong')
            ->where('MaDuong',$id)->first();
        return $select;
    }

    public function get_lat_long($address) {
        $array = array();
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');

        // We convert the JSON to an array
        $geo = json_decode($geo, true);

        // If everything is cool
        if ($geo['status'] = 'OK') {
            $latitude = $geo['results'][0]['geometry']['location']['lat'];
            $longitude = $geo['results'][0]['geometry']['location']['lng'];
            $array = array('lat'=> $latitude ,'lng'=>$longitude);
        }

        return $array;
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
            $obj->diadiem = $data_tendiadiem;
            $obj->duong = $data_tenduong;
            $obj->phuong = $data_tenphuong;
            $obj->quanhuyen = $data_tenquanhuyen;
            $obj->tinhthanh = $data_tentinhthanh;
            $obj->dichvu = $data_tendichvu;

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
//        echo '<pre>';
//        print_r($result);
//        die();
    }
    // kiem tra du lieu co trong mang array hay chua
    public function IsNotExit($str,array $array){
        foreach ($array as $item){
            if($item == $str)
                return false;
        }
        return true;
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

}