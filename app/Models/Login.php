<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    function authenticate($accounts){
        $data = DB::table('accounts')
        ->where('email', $accounts->email)
        ->where('password', $accounts->password)
        ->get();
        if(sizeof($result) != 0){
            return "sssss";
        }}
    
}
