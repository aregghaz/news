<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Images;
use App\Lang;
use App\News;
use App\NewsTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Psy\Util\Json;

class NewsController extends Controller
{
    public function __construct(Request $request)
    {
        Session::has('applocale') ?: session()->put('applocale', 'am');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lang = Session::get('applocale');
        $data['lang'] = Lang::where('name', $lang)->value('id');
        $data['news'] = NewsTranslation::with( 'News.Categories', 'Lang')->where('lang_id',$data['lang'])->get();
        $data['categories'] = Categories::all();
        return view('admin.news', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['lang'] = Lang::all();
        $data['categories'] = Categories::all();
        return view('admin.addNews', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $category_id = $request['category_id'];
        $slug = $request['slug'];

        $validator =  Validator::make($request->all(), [
                'slug' => 'required|' .Rule::unique('news')->where(function ($query) use ($slug, $category_id) {
                    return $query->where('slug', $slug)
                        ->where('category_id', $category_id);
                }),
                'upload_file.*' => 'image|mimes:jpeg,png,jpg,gif,svg',

                'category_id' => 'required',
            ]);
        if ($validator->fails()) {
            return redirect(route('news.create'))
                ->withErrors($validator)
                ->withInput();
        }

        $news = new News();
        $news->slug = $request['slug'];
        $news->category_id = $request['category_id'];
        $news->save();

        $count = 1;
        foreach ($request->file('upload_file') as $image) {
            $filename = time() +$count . '.jpg';
            $images = new Images();
            $images->name = $filename;
            $images->news_id = $news->id;
            $images->save();
            $count++;
            $image->move(public_path() . '/images/news', $filename);

        }

        $lang = Lang::all();
        foreach ($lang as $key) {
            $reqName = $request[$key->name];
            if (isset($reqName['title']) and isset($reqName['description'])) {
                $newsTranslate = new NewsTranslation();
                $newsTranslate->title = $reqName['title'];
                $newsTranslate->description = $reqName['description'];
                $newsTranslate->news_id = $news->id;
                $newsTranslate->lang_id = $key->id;
                $newsTranslate->save();
            }

        }
        return redirect(route('news.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return Json
     */
    public function show(Request $request)
    {
        $lang = Session::get('applocale');
        $lang = Lang::where('name', $lang)->value('id');
        $data['news'] = NewsTranslation::with('News.Categories', 'Lang','News.Images')->where(['lang_id'=>$lang,'id'=>$request->id])->first();
        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $category_id = $request->category;
        $slug = $request->slug;
        $validator =  Validator::make($request->all(), [
            'slug' => 'required|'.Rule::unique('news')->ignore($id)->where(function ($query) use ($slug, $category_id) {
                    return $query->where('slug', $slug)
                        ->where('category_id', $category_id);
                }) ,
            'category' => 'required',
            'description' => 'required|max:255',
            'title' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect(route('news.index'))
                ->withErrors($validator)
                ->withInput();
        }
        $news = NewsTranslation::with('News')->where('id', $request->news_id)->first();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->News->slug = $request->slug;
        $news->News->category_id = $request->category;
        $news->push();
        $count = 1;
        foreach ($request->file('upload_file') as $image) {
            $filename = time() +$count . '.jpg';
            $images = new Images();
            $images->name = $filename;
            $images->news_id = $id;
            $images->save();
            $count++;
            $image->move(public_path() . '/images/news', $filename);

        }
        session(['editproduct' => __('admin.edit')]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        News::with('NewsTranslation')->where(['id'=>$id])->delete();
        session(['deletePr' => __('admin.edit')]);
        return redirect()->back();
    }
}
