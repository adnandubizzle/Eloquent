<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Book;

Route::get('/', function () {


    //create()
    //    $author = Author::create( ['name'=> 'Ashfaq Sab'] );

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
        // Author::get(['id', 'name']); //Not REcommended

    //Where()
        // Author::select('name')->where('id','!=', 81)->get()    

    
        //
    


       return response()->json();

});

require __DIR__.'/auth.php';
