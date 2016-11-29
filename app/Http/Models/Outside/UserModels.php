<?php namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;
use App\Http\Requests\Outside\UserRequests;
use Illuminate\Auth\Authenticatable;
use DB;
use Illuminate\Support\Facades\Session;

class UserModels extends DbTable{
    public $primaryKey = 'user_name';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'users';
        $this->timestamps = false;
        $this->params = \Request::all();

    }
    public static function getAllUser(){
        return self::get();
    }

    public function getUserByUserName($userName){
        return UserModels::where('user_name',$userName)->first();
    }
    public function login($data){
//        return true;
        $userbyid = $this->getUserByUserName($data['username']);

        if($userbyid == null){
            Session::put('IsLogin',0);
            Session::save();
            return false;
        }
        else{
            if($userbyid->user_password == $data['password']){

                Session::put('user_id',$userbyid->user_id);
                Session::put('fullname',$userbyid->fullname);
                Session::put('IsLogin',1);
                Session::save();

                return true;
            }
            else{
                Session::put('IsLogin',0);
                Session::save();
                return false;
            }
        }
    }
    public function signup($data){
        if(strcmp($data['password'],$data['confirmpassword'])== 0 )
        {
            $alluser = self::getAllUser();

            foreach ($alluser as $item) {
                if(strcmp($item->user_name,$data['username'])== 0 ){
                    return false;
                }
            }

            $object = new UserModels();

            $object->user_name      = $data['username'];
            $object->user_password  = $data['password'];
            $object->fullname       = $data['fullname'];
            $object->created_day    = date('Y-m-d');
            $object->isadmin        = 0;
            if ($object->save()) {
                Session::put('message',null);
                Session::save();
                return true;
            } else {
                Session::put('message','Đã xãy ra lỗi');
                Session::save();
                return false;
            }

        }
        else{
            Session::put('message','Tài khoản đã tồn tại');
            Session::save();
            return false;
        }
    }
}
