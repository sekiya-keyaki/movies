<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Movie;
use App\Models\Review;

class MovieController extends Controller
{
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

    public function review($reviewId)
    {
        $review = Review::where('movie_id',$reviewId)->first();

        return view('review',compact('review'));
    }
}
