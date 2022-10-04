<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    function create_account($accounts){
        DB::table('user')->insert([
            'firstname' => $accounts->firstname,
            'lastname' => $accounts->lastname,
            'email' => $accounts->email,
            'password' => $accounts->password,
            'confirm' => $accounts->confirm
        ]);

        
    }
}
