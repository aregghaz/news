<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Images;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    public  function dashboard() {
        $data['newsCount'] = News::count();
        $data['newsCountByDay'] = News::whereDay('created_at', date("d"))->count();
        return view('admin.dashboard',$data);
    }
    public  function deleteImage(Request $request) {
      $id = $request->id;
      if(is_numeric($id)){
          $images = Images::find($id);
          if($images and File::exists('images/news/'.$images->name)){
              $images->delete();
              File::delete('images/news/'.$images->name);
              $data['status'] = 200;
              $data['message'] = 'Image removed';
          }else {
              $data['status'] = 404;
              $data['message'] = 'Image Not Found';
          }

      }else {
          $data['status'] = 400;
          $data['message'] = 'Bad Request';
      }
      return json_encode($data);
    }
}
