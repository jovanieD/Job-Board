<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function create_account(Request $accounts){
        $register = new Register();
        return $register->create_account($accounts);
    }
}
