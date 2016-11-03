<?php
namespace App\Http\Models\Inside;

use App\Http\Requests\Request;
use App\MyCore\Inside\Models\DbTable;


use DB;

class DiaDiemModels extends DbTable
{
    public $primaryKey = 'MaTenDiaDiem';

    public function __construct(array $options = array())
    {
        parent::__construct($options);

        $this->table = 'tendiadiem';
        $this->params;
        $this->timestamps = false;
    }

    public function add($tendiadiem)
    {
        $model = new DiaDiemModels();

        $model->TenDiaDiem = $tendiadiem;
        if ($model->save()) {
            return $model->MaTenDiaDiem;
        } else {
            return null;

        }

    }
    public function edit($MaTenDiaDiem, $TenDiaDiem ){
        $model = self::find($MaTenDiaDiem);
        $model->TenDiaDiem = $TenDiaDiem;
        $model->save();
    }
}