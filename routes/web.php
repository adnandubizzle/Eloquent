<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Book;

Route::get('/', function () {


    //create()
        //    $author = Author::create( ['name'=> 'Adnan'] );

    //make()
        // $x=Author::make(['name' => 'Don'], ['id'=>100]);
        // Only saves to DB when  Save() runs otherwise its only in memory and not in DB.
        // $x->save();d

    // all()
        // $author=Author::all();

    //get()        
        // $author=Author::get();

    //get( ['col1', 'col2'] );         // Use Select() instead
        // $author=Author::get(['name']);   
        
    //Select()
        // Author::select('id', 'name')->get(). //Reccomended
        // Author::get(['id', 'name']); //Not Recommended

    //Where()
        // Author::select('name')->where('id','!=', 81)->get()    

    
    //first()
        // In SQL its LIMIT 1
        // Author::select('id','name')->where('name', 'Adnan')->get(). //Return multiple Adnans
       // Author::select('id','name')->where('name', 'Adnan')->get()->first()     return only first Adnan
       // first( can also take Arguments like ): Book::where('author_id', 3)->first(['id', 'title']);



     //find()
     //filters on based on primary key eg: id
       //Author::find(82));

    //pluck()  
        //gives simple data in array(if 1 column arg), or Key Value pair(  "1": "Enrique McKenzie")
        // You cannot call -> functions on the output as its not returning a model
        // Author::pluck('name' ,'id')

    //orderBy()
        //Author::orderBy('created_at')->get():  //By Default Ascending
        //Author::orderBy('created_at', 'desc')->get():


    //count()
        //Author::get()->count();


     //With()
     //loads table plus forign table in single statement (2 SQL querries) only, Avoids n+1 problem(lazy loading)
        // Book::with('author')->get()


    //with() //with only specifuic cols of forign table
        // Book::with(['author:id,name'])->get()


       return response()->json();

});

require __DIR__.'/auth.php';
