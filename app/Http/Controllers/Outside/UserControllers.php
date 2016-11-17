<?php

namespace App\Http\Controllers\Outside;

use App\Http\Models\Outside\UserModels;
use App\MyCore\Outside\Routing\MyController;
use View;
use App\Http\Requests\Outside\UserRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use App\Http\Models\Inside\Users;

class UserControllers extends MyController{
    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'User';
        $this->data['controllerName'] = 'users';

        $this->_model = new UserModels();
    }


    public function getIndex(){
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.index",$this->buildDataView($this->data));
    }


    public function getLogin(){
//        return redirect('/test');
        return view("outside.search",$this->buildDataView($this->data));
    }
    public function postLogin(UserRequests $requests){
        $post = $requests->all();

        if($this->_model->login($post)){
            return redirect("{$this->data['moduleName']}/{$this->data['controllerName']}/index");
        }else{

        }
    }
}