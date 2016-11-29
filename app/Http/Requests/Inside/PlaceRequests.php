<?php namespace App\Http\Requests\Inside;

use App\Http\Requests\Request;

class PlaceRequests extends Request
{

    public function __construct()
    {
    }
    public function authorize() {
        return true;
    }
    public function rules() {
        $data = array();
        $data["TenDiaDiem"] = 'required';
        $data["SoNha"] = 'required';
        $data["image_name"] = 'required';
        return $data;
    }

    public function messages () {
        $data = array();
        $data["TenDiaDiem.required"] = 'Vui lòng nhập tên địa điểm';
        $data["SoNha.required"] = 'Vui lòng nhập số nhà';
        $data["image_name.required"] = 'Vui lòng chọn ảnh đại diện';
        return $data;
    }
}