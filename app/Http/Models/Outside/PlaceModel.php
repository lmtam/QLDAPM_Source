<?php
namespace App\Http\Models\Outside;
use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;
use DB;

class PlaceModel extends DbTable{
    public $primaryKey = 'MaDuLieu';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'dulieu';
        $this->timestamp = false;
        $this->params = \Request::all();

    }
    
    public function getDetail($MaDuLieu){
        $select = DB::table('dulieu')
                ->select ('dulieu.MaDuLieu','dulieu.SoNha','tendiadiem.TenDiaDiem','dichvu.TenDichVu','duong.TenDuong','phuong.TenPhuong','quanhuyen.TenQuanHuyen','tinhthanh.TenTinhThanh', 'dichvu.TenDichVu', 'dulieu.KinhDo', 'dulieu.ViDo')
                ->where('MaDuLieu',$MaDuLieu)
                ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem')
                ->leftjoin('duong','duong.MaDuong','=','dulieu.MaDuong')
                ->leftjoin('phuong','phuong.MaPhuong','=','dulieu.MaPhuong')
                ->leftjoin('quanhuyen','quanhuyen.MaQuanHuyen','=','dulieu.MaQuanHuyen')
                ->leftjoin('tinhthanh','tinhthanh.MaTinhThanh','=','dulieu.MaTinhThanh')
                ->leftjoin('dichvu','dichvu.MaDichVu','=','dulieu.MaDichVu')->first();        
//        echo '<pre>';
//        print_r($select);
//        die();
        return $select;
        
//        echo '<pre>';
//        print_r($dulieu);
//        echo "<br>";
//        print_r($tendiadiem);
//        echo "<br>";
//        print_r($duong);
//        die();        
    }
    public function postComment($DuLieu){
        
    }
}
