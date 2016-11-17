<?php
namespace App\Http\Models\Inside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;


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
