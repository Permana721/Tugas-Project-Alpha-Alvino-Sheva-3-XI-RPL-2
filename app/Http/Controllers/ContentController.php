<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function cv()
    {
        $data = Content::all();
        return view('cv',['data'=>$data]);
    }
}
