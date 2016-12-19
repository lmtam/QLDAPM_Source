<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;


use DB;
use Illuminate\Support\Facades\Session;
class RatingModels extends DbTable{
    public $primaryKey = 'rating_id';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'rating';

        $this->params = \Request::all();
        $this->timestamps = false;
    }

    // status : like, ok , dislike
    public function add($data){
        DB::table('rating')
            ->where("MaDuLieu",$data['MaDuLieu'])
            ->where('user_id',Session::get('user_id'))
            ->delete();

        $model = new RatingModels();

        $model->MaDuLieu        = $data['MaDuLieu'];
        $model->rating_status   = $data['status'];
        $model->created_day      = date('Y-m-d H:i:s');
        $model->user_id         = Session::get('user_id');
        if($model->save()){
            return true;
        }
        else{
            return false;
        }


    }
    public function change($data){
        DB::table('rating')
            ->where("MaDuLieu",$data['MaDuLieu'])
            ->where('user_id',Session::get('user_id'))
            ->delete();
        return true;
    }
    public function getRating($MaDuLieu){
        $select =DB::table('rating')
                    ->where('MaDuLieu',$MaDuLieu)
                    ->where('user_id',Session::get('user_id'))->first();
//        if($select == null){
//            $select->rating_status = 'null';
//        }
//        echo '<pre>';
//        print_r($select);
//        die();
        if($select != null){
            return $select->rating_status;
        }
        else{
            return $select;
        }

    }
    public static function countRatingById($MaDuLieu,$status){
        $select = DB::table('rating')
                    ->where('MaDuLieu',$MaDuLieu)
                    ->where('rating_status',$status)->count();

         return $select;

    }
    public function totalRating($MaDuLieu){
        $countLike = $this->countRatingById($MaDuLieu,"like");
        $countOk = $this->countRatingById($MaDuLieu,"ok");
        $countDislike = $this->countRatingById($MaDuLieu,"dislike");

        return $countLike + $countOk  + $countDislike ;
    }
    public function RatingPoint($MaDuLieu){
        $countLike = $this->countRatingById($MaDuLieu,"like");
        $countOk = $this->countRatingById($MaDuLieu,"ok");
        $countDislike = $this->countRatingById($MaDuLieu,"dislike");
        if(($countLike + $countOk  + $countDislike )== 0){
            return 0;
        }
        else{
            $point = ($countLike * 10 + $countOk * 5 + $countDislike *0)/($countLike + $countOk  + $countDislike );
            return $point;
        }
    }
}
