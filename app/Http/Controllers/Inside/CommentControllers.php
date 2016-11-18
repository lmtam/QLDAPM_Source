<?php

namespace App\Http\Controllers\Inside;


use App\Http\Requests\Request;
use App\MyCore\Inside\Routing\MyController;
use View;
use App\Http\Models\Inside\CommentModels;




class CommentControllers extends MyController{

    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);


        $this->data['controllerName'] = 'comments';
        $this->_model = new CommentModels();
    }
    public function getShowAll(){
        $this->data['title']    = 'Comment';
        $select                 = $this->_model->getAllList();

        $this->data['paginate'] = $select->paginate(15);

        return view("{$this->data['moduleName']}/{$this->data['controllerName']}.show-all",$this->buildDataView($this->data));
    }

    public function getDelete($comment_id){
        if($this->_model->getDelete($comment_id)){
            return redirect("/{$this->data['moduleName']}/{$this->data['controllerName']}/show-all");
        }
    }


}