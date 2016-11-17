<?php

namespace App\Http\Controllers\Outside;

use App\Http\Models\Outside\PlaceModels;
use App\MyCore\Outside\Routing\MyController;
use Illuminate\Support\Facades\Input;
use View;

use Hash;


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
    public function getIndex(){
        $this->data['title'] = 'My Finder';
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.search",$this->buildDataView($this->data));
    }
    public function getSearchResult(){
        $data = Input::only('tukhoa');

//        $abc = $this->_model->search('Ca phe thuy ta');
        $this->data['tukhoa']   = $data['tukhoa'];
        $this->data['title']    = "Kết quả tìm kiếm";
        $this->data['result']   = $this->_model->search($data['tukhoa']);
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.searchresult",$this->buildDataView($this->data));

    }

//    public function getDetail($MaDuLieu){
//
//    }
    public function getDetail($MaDuLieu){
        $this->data['dulieu'] = $this->_model->getDetail($MaDuLieu);
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.placedetail",$this->buildDataView($this->data));

    }


}