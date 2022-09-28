<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticate(Request $accounts){
        $login = new Login();
        return $login->authenticate($accounts);
    }
}
