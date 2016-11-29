<?php
namespace App\Http\Models\Inside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;


use DB;

class CommentModels extends DbTable{
    public $primaryKey = 'comment_id';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'comments';

        $this->params;
        $this->timestamps = false;
    }
    public function getAllList(){
        $select = DB::table('comments')
                    ->select('comments.*','users.fullname','tendiadiem.TenDiaDiem')
                    ->leftjoin('users','users.user_id','=','comments.user_id')
                    ->leftjoin('dulieu','dulieu.MaDuLieu','=','comments.MaDuLieu')
                    ->leftjoin('tendiadiem','tendiadiem.MaTenDiaDiem','=','dulieu.MaTenDiaDiem');
        return $select;
    }
    public function getDelete($comment_id){
        return DB::table('comments')->where('comment_id',$comment_id)->delete();
    }

}
