<?php

namespace App\Http\Controllers\Outside;


use App\MyCore\Outside\Routing\MyController;
use View;

class RatingControllers extends MyController{
    private $_model = null;
    private $_params = array();
    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Đánh giá';
        $this->data['controllerName'] = 'rating';


    }


}