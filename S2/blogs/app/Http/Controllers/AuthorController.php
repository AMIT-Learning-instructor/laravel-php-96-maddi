<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = author::all();
        return $authors;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'full_name'=>'string|required|max:255',
            'email'=>'email|required|unique:authors',
            'address'=>'',
        ]);
       
        if($validation->fails()){
            return $validation->errors();

        } else{
            $author = new author();
            $author->full_name = $request->full_name;
            $author->email = $request->email;
            $author->address = $request->address;
            $author->save();
    
            return [
                "message"=>"created",
                "author"=>$author
            ];
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request ,author $author)
    {
        //
        // $author = author::where('id','=',$id)->get()->first();
        // if(!$author){
        //     return ["message"=>"404 Not Found"];
        // }
        // $author = author::findOrFail($id);
        // return redirect('/api/authors/');
        return $author;
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, author $author)
    {
        //
        // $validation = Validator::make($request->all(),[
        //     'full_name'=>'',
        //     'address'=>'',
        // ]);
        // dd($validation->validated());
        // dd($request->all());
        $author->full_name = $request->full_name ?? $author->full_name;
        $author->address = $request->address ?? $author->address;
        $author->save();
        return $author;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(author $author)
    {
        //
        return $author->delete();
    }
}
