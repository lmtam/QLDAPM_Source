<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;


use DB;

class CommentModels extends DbTable{
    public $primaryKey = 'user_name';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
//     parent::__construct($options);
        $this->table = 'comments';
        $this->timestamps = FALSE;
        $this->params = \Request::all();
    }
    public function getComment($MaDuLieu){
        $select = DB::table('comments')
                ->select ('comments.comment_content','users.fullname', 'comments.created_day')
                ->where('MaDuLieu',$MaDuLieu)
                ->leftjoin('users','users.user_id','=','comments.user_id')->get();
        return $select;
    }
    public function SaveData($content, $MaDuLieu, $userid) {
        $flight = new CommentModels();
        
        $flight->MaDuLieu = $MaDuLieu;
        $flight->comment_content = $content;
        $flight->created_day = date('Y-m-d H:i:s');
        $flight->user_id = $userid;
        $flight->save();
        
    }
}
