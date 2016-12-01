<?php

namespace App\Http\Controllers\Outside;

use App\Http\Models\Outside\CommentModels;
use App\Http\Models\Outside\PlaceModels;
use App\Http\Models\Outside\RatingModels;
use App\Http\Models\Outside\SaveModels;
use App\MyCore\Outside\Routing\MyController;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Security\Core\Util\SecureRandom;
use View;
use Hash;
use Illuminate\Support\Facades\Session;

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
        if(Session::get('IsLogin') == null){
            Session::put('IsLogin',0);
            Session::save();
        }

        $this->data['title'] = 'My Finder';
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.search",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.test",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/layout.header",$this->buildDataView($this->data));
    }
    public function getSearchResult(){
        $data = Input::only('tukhoa');

//        $abc = $this->_model->search('Ca phe thuy ta');

        $this->data['tukhoa']   = $data['tukhoa'];
        $this->data['title']    = "Kết quả tìm kiếm";
        $result                 = $this->_model->search($data['tukhoa']);

        $this->data['result']   = $result;
//        $this->data['rating']   =
//        $i=0;
//        $map = [0 => ['TenDiaDiem' => '','DiaChi' =>'','lat' => '','lng' => '']];
//
//        foreach ($result as $item){
//            $map[$i]['TenDiaDiem']    = $item->diadiem->TenDiaDiem;
//            $map[$i]['DiaChi']        = $item->dulieu->SoNha . ' ' .$item->duong->TenDuong . ' ' . $item->quanhuyen->TenQuanHuyen;
//            $map[$i]['lat']           = $item->dulieu->ViDo;
//            $map[$i]['lng']           = $item->dulieu->KinhDo;
//            $i++;
//        }
//        $this->data['mapPlace'] = $map;
//

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.searchresult",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.test",$this->buildDataView($this->data));
    }
    public function getSearchService($tendichvu){
        $this->data['tukhoa']   = $tendichvu;
        $this->data['title']    = "Kết quả tìm kiếm";
        $this->data['result']   = $this->_model->searchDichVu($tendichvu);
//        echo '<pre>';
//        print_r($this->data['result'] );
//        die();

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.searchresult",$this->buildDataView($this->data));
    }
//    public function getDetail($MaDuLieu){
//
//    }
    public function getDetail($MaDuLieu){


        $this->data['title']  = "Detail Place";
        $this->data['dulieu'] = $this->_model->getDetail($MaDuLieu);

        $rating_model   = new RatingModels();

        if(Session::get('IsLogin') == 1){
            $rating = $rating_model->getRating($MaDuLieu);
            if($rating != null){
                $this->data['rating_status'] = $rating;
                $this->data['IsRating'] = 1;
            }
            else{
                $this->data['rating_status'] = null;
                $this->data['IsRating'] = 0;
            }
        }
        else{
            $this->data['rating_status'] = null;
            $this->data['IsRating'] = 0;
        }


        $this->data['comment'] = CommentModels::getCommentByMaDuLieu($MaDuLieu);
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.placedetail",$this->buildDataView($this->data));
//        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.test",$this->buildDataView($this->data));
    }

    public function postComment(){
        $data = \Request::all();
        $this->data['comment'] = $this->_model->getDetail($data['postcmt']);
        $this->data['dulieu'] = $this->_model->getDetail($data['MaDuLieu']);

        $model_cmt = new CommentModels();
        $model_cmt->SaveComment($data);
    }

    public function getMapPlace(){
        $data = Input::only('tukhoa');

        $result                 = $this->_model->search($data['tukhoa']);

        $this->data['result']   = $result;
        $i=0;
        $map = [0 => ['TenDiaDiem' => '','DiaChi' =>'','lat' => '','lng' => '']];

        foreach ($result as $item){
            $map[$i]['TenDiaDiem']    = $item->diadiem->TenDiaDiem;
            $map[$i]['DiaChi']        = $item->dulieu->SoNha . ' ' .$item->duong->TenDuong . ' ' . $item->quanhuyen->TenQuanHuyen;
            $map[$i]['lat']           = $item->dulieu->ViDo;
            $map[$i]['lng']           = $item->dulieu->KinhDo;
            $i++;
        }
        return $map;

    }
    public function postRating(){
        $data = \Request::all();
        $ratingModel = new RatingModels();
        if($ratingModel->add($data)){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function postDeleteRating(){
        $data = \Request::all();
        $ratingModel = new RatingModels();
        $ratingModel->change($data);
        return 1;
    }
    public function postSave(){
        $data = \Request::all();
        $saveModel = new SaveModels();
        return $saveModel->add($data['MaDuLieu']);
    }
    public function postDeleteSave(){
        $data = \Request::all();
        $saveModel = new saveModels();
        $saveModel->remove($data);
        return 1;
    }
    public function getSave(){
        $this->data['title'] = 'Saved';
        $this->data['result'] = SaveModels::getSave();
//        echo '<pre>';
//        print_r($this->data['result']);
//        die();
        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.save",$this->buildDataView($this->data));

    }
}