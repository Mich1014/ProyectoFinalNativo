<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registro extends Controller
{
    function addData(request $request)
    {
        $registro = new registro();
        $registro->username = $request->username;
        $registro->password = $request->password;
        $registro->save();
        return redirect('logn');



    }
}
