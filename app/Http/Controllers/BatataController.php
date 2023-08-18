<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batatas;

class BatataController extends Controller
{
    public function teste(){
        $batatas = Batatas::all();
        echo $batatas;
        return view('teste');
    }
}
