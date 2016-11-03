<?php

namespace App\Http\Controllers\Inside;

use App\Http\Models\Inside\UserModels;
use App\Http\Requests\Request;
use App\MyCore\Inside\Routing\MyController;
use View;
use App\Http\Requests\Inside\UserRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use App\Http\Models\Inside\User;

class UserControllers extends MyController{
    use AuthenticatesAndRegistersUsers ;
    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);


        $this->data['controllerName'] = 'users';

        $this->_model = new UserModels();
    }
    public function getIndex(){
        $this->data['title'] = 'Trang chủ';
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.index",$this->buildDataView($this->data));

    }


    public function getLogin(){
        $this->data['title'] = 'Đăng nhập hệ thống';

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.login", $this->buildDataView($this->data));
//        return view("/inside/users/");
    }

    public function postLogin(UserRequests $requests){
        $post = $requests->all();

        if($this->_model->login($post)){
            return redirect(("{$this->data['moduleName']}/places/show-all"));
        }else{
            return redirect(("{$this->data['moduleName']}/{$this->data['controllerName']}/login"));
        }
    }
    public function getSignup(){
        $this->data['title'] = 'Đăng kí tài khoản';
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.signup",$this->buildDataView($this->data));
    }

    public function postSignup(UserRequests $requests){
        $post = $requests->all();

        if($this->_model->signup($post)){
            return redirect(("{$this->data['moduleName']}/{$this->data['controllerName']}/login"));
        }
        else{
            return redirect(("{$this->data['moduleName']}/{$this->data['controllerName']}/signup"));
        }
    }
}