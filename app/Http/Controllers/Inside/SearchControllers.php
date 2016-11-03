<?php

namespace App\Http\Controllers\Inside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Routing\MyController;
use View;


class SearchControllers extends MyController{

    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);


        $this->data['controllerName'] = 'search';


    }

}