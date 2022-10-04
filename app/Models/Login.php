<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    function authenticate($accounts){
        $data = DB::table('users')
        ->where('email', $accounts->email)
        ->where('password', $accounts->password)
        ->get();
        if(sizeof($data) == 0){
            echo "It is not exist";
        }else{
            return redirect('pages/job_seeker');
        }
    }
    
}
