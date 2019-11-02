<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = news::get();

        //dd($news);
        return view('index', compact('news'));
    }

    public function create(){
        
      return view('tambah');
    }

    public function store()
    {
        $news = new News;
        $news->title = request('title');
        $news->deskripsi = request('deskripsi');
        $news->user_id = request('user_id');
        $news->save();

        return redirect()->back();
    }

    public function show($id){
     //dd($id);

     $news = News::findOrFail($id);

     return view('news.show', compact('news'));
    }

    public function edit($id){
      $news = News::findOrFail($id);

      return view('news.edit', compact('news'));
    }

    public function update(News $news){

      $news = new News;
      $news->title = request('title');
      $news->deskripsi = request('deskripsi');
      $news->user_id = request('user_id');
      $news->update();

      return redirect('news.show', $news);
    }
}
