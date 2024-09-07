<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search ?? "";
        //
        // $posts = DB::select("SELECT id, title FROM posts where id >= ? ",[5]);
        // $posts = DB::table('posts')
        //     ->join('authors','author_id','=','authors.id')
        //     ->whereAny(['title','content','full_name'],'like',"%$search%")
        //     // ->whereMonth('posts.created_at',date('m-y'))
        //     ->get();
        // dd($posts->title);
        $posts =  posts::find(1);
        $posts->title = "Ali";

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
