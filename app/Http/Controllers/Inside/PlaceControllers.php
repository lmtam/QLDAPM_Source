<?php

namespace App\Http\Controllers\Inside;


use App\Http\Models\Inside\PlaceModels;
use App\Http\Requests\Request;
use App\MyCore\Inside\Routing\MyController;
use View;
use App\Http\Requests\Inside\PlaceRequests;




class PlaceControllers extends MyController{

    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Place';
        $this->data['controllerName'] = 'places';
        $this->_model = new PlaceModels();

    }
    public function getShowAll(){
        $this->data['title'] = 'All Place';
        $select = $this->_model->getShowAll();
        $this->data['paginate'] = $select->paginate(15);

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.show-all",$this->buildDataView($this->data));
    }
    public function getAdd(){

        $this->data['duong']= $this->_model->getAllDuong();

        $this->data['phuong']   = $this->_model->getAllPhuong();
        $this->data['quanhuyen']= $this->_model->getAllQuanHuyen();
        $this->data['tinhthanh']= $this->_model->getAllTinhThanh();
        $this->data['dichvu']   = $this->_model->getAllDichVu();
//        $latlong  = $this->_model->get_lat_long("227 nguyễn văn cừ");
//        echo '<pre>';
//        print_r($latlong);
//        die();

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.add",$this->buildDataView($this->data));
    }
    public function postAdd(PlaceRequests $requests){
        $post = $requests->all();

        if($this->_model->add($post) != null){
            return redirect("{$this->data['moduleName']}/{$this->data['controllerName']}/show-all");
        }
        else{
            return redirect("/{$this->data['moduleName']}/{$this->data['controllerName']}/add");
        }

    }
    public function getEdit($MaDuLieu){

        $this->data['dulieu'] = $this->_model->getDuLieuById($MaDuLieu);

        $this->data['duong']= $this->_model->getAllDuong();

        $this->data['phuong']= $this->_model->getAllPhuong();
        $this->data['quanhuyen']= $this->_model->getAllQuanHuyen();
        $this->data['tinhthanh']= $this->_model->getAllTinhThanh();
        $this->data['dichvu']   = $this->_model->getAllDichVu();
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.edit",$this->buildDataView($this->data));
    }
    public function postEdit(PlaceRequests $requests){
        $post = $requests->all();
        if($this->_model->edit($post) != null){
            return redirect("/{$this->data['moduleName']}/{$this->data['controllerName']}/show-all");
        }
        else{
            return redirect("/{$this->data['moduleName']}/{$this->data['controllerName']}/add");
        }
    }
    public function getDelete($MaDuLieu){
        if($this->_model->getDelete($MaDuLieu)){
            return redirect("/{$this->data['moduleName']}/{$this->data['controllerName']}/show-all");
        }
    }

}