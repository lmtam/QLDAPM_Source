<?php

namespace App\Http\Controllers\Outside;

use App\Http\Models\Outside\UserModels;
use App\MyCore\Outside\Routing\MyController;
use View;
use App\Http\Requests\Outside\UserRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;

use Illuminate\Support\Facades\URL;

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


    public function getLogin($url_back){

        $this->data['url_back'] = ($url_back);
//        return redirect('/test');
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.login",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/places.test",$this->buildDataView($this->data));
    }
    public function postLogin(UserRequests $requests){
        $post = $requests->all();
        $url_back = base64_decode($post['url_back']);
        if($this->_model->login($post)){
//            return redirect(URL::previous());
//            return Redirect::back();
                return redirect($url_back);

        }else{

        }
    }

    public function getSignup(){
//        return redirect('/test');
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.signup",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/places.test",$this->buildDataView($this->data));
    }
    public function postSignup(UserRequests $requests){
        $post = $requests->all();

        if($this->_model->signup($post)){

//            return callback();
        }else{

        }
    }

}