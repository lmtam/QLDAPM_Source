<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Outside;

use App\Http\Models\Outside\UserModels;
use App\MyCore\Outside\Routing\MyController;
use View;
use App\Http\Requests\Outside\UserRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use App\Http\Models\Inside\Users;

