<?php namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;
use App\Http\Requests\Outside\UserRequests;
use Illuminate\Auth\Authenticatable;
use DB;

class UserModels extends DbTable{
    public $primaryKey = 'user_name';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->table = 'users';

        $this->params = \Request::all();

    }

    public function getUserByUserName($userName){
        return UserModels::where('user_name',$userName);
    }
    public function login($data){
        return true;
//        $userbyid = $this->getUserByUserName($data['username']);
//
//        if($userbyid == null){
//            return false;
//        }
//        else{
//            if($userbyid->user_password == $data['password']){
//
//                return true;
//            }
//            else{
//                return false;
//            }
//        }
    }
    public function signup($data){
        if(strcmp($data['password'],$data['confirmpassword'])== 0 )
        {
            $alluser = self::getAllUser();
//            echo "<pre>";
//            print_r($alluser);
//            die();
            foreach ($alluser as $item) {
                if(strcmp($item->user_name,$data['username'])== 0 ){
                    return false;
                }
            }

            $object = new UserModels();

            $object->user_name = $data['username'];
            $object->user_password = $data['password'];
            $object->created_day = date('Y-m-d');
            $object->isadmin = 1;
            if ($object->save()) {
                return true;
            } else {
                return false;
            }

        }
        else{
            return false;
        }
    }


}
