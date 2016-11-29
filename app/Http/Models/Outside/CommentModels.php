<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;


use DB;
use Illuminate\Support\Facades\Session;
class CommentModels extends DbTable{
    public $primaryKey = 'comment_id';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'comments';

        $this->params = \Request::all();
        $this->timestamps = false;
    }
    public static function getCommentByMaDuLieu($MaDuLieu){
        $select = DB::table('comments')
            ->select ('comments.comment_content','users.fullname', 'comments.created_day')
            ->where('MaDuLieu',$MaDuLieu)
            ->leftjoin('users','users.user_id','=','comments.user_id')
            ->orderBy('created_day', 'desc')
            ->get();
        return $select;
    }
    public function SaveComment($data) {
        $flight = new CommentModels();

        $flight->MaDuLieu = $data['MaDuLieu'];
        $flight->comment_content = $data['postcmt'];
        $flight->created_day = date('Y-m-d H:i:s');
        $flight->user_id = Session::get('user_id');
        if($flight->save()){
            return true;
        }
        else{
            return false;
        }

    }

}
