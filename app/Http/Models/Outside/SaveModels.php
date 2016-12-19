<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;


use DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\EventListener\SaveSessionListener;

class SaveModels extends DbTable{
    public $primaryKey = 'save_id';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'saves';

        $this->params = \Request::all();
        $this->timestamps = false;
    }
    public function getSaveByUserId($user_id){
        $select = DB::table('saves')->where('user_id',$user_id)->get();
        return $select;
    }
    public function add($MaDuLieu){
        $select = DB::table('saves')
            ->where('MaDuLieu',$MaDuLieu)
            ->where('user_id',Session::get('user_id'))->first();
        if($select != null){
            return 0;
        }
        $model = new SaveModels();

        $model->MaDuLieu        = $MaDuLieu;
        $model->created_day      = date('Y-m-d H:i:s');
        $model->user_id         = Session::get('user_id');
        if($model->save()){
            return 1;
        }
        else{
            return -1;
        }
    }
    public function remove($MaDuLieu){
        DB::table('saves')
            ->where("MaDuLieu",$MaDuLieu)
            ->where('user_id',Session::get('user_id'))
            ->delete();
        return true;
    }
    public static function getSave(){
        $result = Array();
        $select = DB::table('saves')
                    ->where('user_id',Session::get('user_id'))
                    ->get();

        foreach ($select as $item) {
            $temp = DB::table('dulieu')
                ->select ('dulieu.MaDuLieu','dulieu.SoNha','dulieu.KinhDo','dulieu.ViDo','dulieu.image_name','tendiadiem.TenDiaDiem','dichvu.TenDichVu','duong.TenDuong','phuong.TenPhuong','quanhuyen.TenQuanHuyen','tinhthanh.TenTinhThanh')
                ->where('MaDuLieu',$item->MaDuLieu)
                ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem')
                ->leftjoin('duong','duong.MaDuong','=','dulieu.MaDuong')
                ->leftjoin('phuong','phuong.MaPhuong','=','dulieu.MaPhuong')
                ->leftjoin('quanhuyen','quanhuyen.MaQuanHuyen','=','dulieu.MaQuanHuyen')
                ->leftjoin('tinhthanh','tinhthanh.MaTinhThanh','=','dulieu.MaTinhThanh')
                ->leftjoin('dichvu','dichvu.MaDichVu','=','dulieu.MaDichVu')->first();
            array_push($result,$temp);
        }
        return $result;
    }
}