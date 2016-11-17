<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Routing\MyController;
use View;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use App\Http\Models\Outside\PlaceModel;

class TestControllers extends MyController{
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);


        $this->data['controllerName'] = 'places';

        $this->_model = new PlaceModel();
        $this->_model1 = new \App\Http\Models\Outside\CommentModels();
    }
    
    public function getDetail(){
        $this->data['dulieu'] = $this->_model->getDetail(163);
        $this->data['comment'] = $this->_model1->getComment(163);
        return view("{$this->data['moduleName']}/users.test",$this->buildDataView($this->data));
    }
    public function postComment(){
        $data1 = \Request::all();
        $this->data['dulieu'] = $this->_model->getDetail($data1['postcmt']);
        $this->data['dulieu1'] = $this->_model->getDetail($data1['madulieu']);
        return $data1['postcmt'];
    }
}