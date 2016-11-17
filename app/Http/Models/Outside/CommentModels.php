<?php
namespace App\Http\Models\Outside;

use App\Http\Requests\Request;
use App\MyCore\Outside\Models\DbTable;


use DB;

class CommentModels extends DbTable{
    public $primaryKey = 'user_name';

    public function __construct(array $options = array())
    {
        parent::__construct($options);
//        $this->table = '';điền tên table vào đây

        $this->params;
        $this->timestamps = false;
    }


}
