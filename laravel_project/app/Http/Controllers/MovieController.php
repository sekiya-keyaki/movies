<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Review;

class MovieController extends Controller
{
    public function top(Request $request)
    {
        $keyword = $request->input('keyword');

        if(!empty($keyword))
        {
            $movies = DB::table('movies')
            ->where('title','like','%'.$keyword.'%')
            ->paginate(4);

            $movies = Movie::whereHas('keywords',function($query)use($keyword){
                $query->where('genre','like','%'.$keyword.'%');
            })->paginate(4);
        }else{
            $movies = DB::table('movies')->paginate(4);
        }

        return view('top',[
            'movies'=> $movies,
            'keyword'=> $keyword,
        ]);
    }
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        if(!empty($keyword))
        {
            $movies = DB::table('movies')
            ->where('title','like','%'.$keyword.'%')
            ->paginate(4);

            $movies = Movie::whereHas('keywords',function($query)use($keyword){
                $query->where('genre','like','%'.$keyword.'%');
            })->paginate(4);
        }else{
            $movies = DB::table('movies')->paginate(4);
        }

        return view('search.index',[
            'movies'=> $movies,
            'keyword'=> $keyword,
        ]);
    }
    public function show($id)
    {
        $show = Movie::find($id);

        return view('show',compact('show'));
    }

    public function review($movieId)
    {
        $review = Review::where('movie_id',$movieId)->first();

        return view('review',compact('review'));
    }

    public function create($movieId){
        $review = Review::where('movie_id',$movieId)->first();

        return view('create',compact('movieId'));

    }
    public function store(Request $request)
{
    $post = new Review;
    $post->fill($request->all());
    $post->user()->associate(Auth::user());
    $post->save();

    return redirect()->back();
}
}