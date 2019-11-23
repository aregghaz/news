<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class AdminController extends Controller
{
    public  function dashboard() {

        $data['newsCount'] = News::count();
        $data['newsCountByDay'] = News::whereDay('created_at', date("d"))->count();
        return view('admin.dashboard',$data);
    }
}
