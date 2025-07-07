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


    //has()
        //authors who have at leat 1 book
        //Author::has('books')->get()->count()

    //doesntHave()
        //Authors with no books
        //Authot::doesntHave('books')->get();


     //When()
        //Conditional querry/ replacement of if conditions
        // This is cleaner and safer than a bunch of if blocks.
        
        //      public function index(Request $request)
        // {
        //     $books = Book::query()
        //         ->when($request->filled('title'), fn($q) =>
        //             $q->where('title', 'like', '%' . $request->title . '%')
        //         )
        //         ->when($request->filled('author_id'), fn($q) =>
        //             $q->where('author_id', $request->author_id)
        //         )
        //         ->get();

        //             return response()->json($books);
        // }


    //chunk()
        //Book::chunk(100, function ($books) {
        //     foreach ($books as $book) {
        //         echo $book->title;
        //     }
        // });

        // Laravel will load only 100 books at a time

        // Each chunk runs its own SQL query

        // Great for batch processing, exports, syncing jobs, etc.
   //cursor()
//    foreach (Book::cursor() as $book) {
//     echo $book->title;
// }
//Laravel does:

// Runs the query under the hood

// Fetches 1 row at a time from the database

// Processes that row

// Discards it

// Then moves to the next

// Memory-efficient
// Fast for large data sets
// Feels like a loop — but it’s powered by a PHP generator


        

       return response()->json(Author::selectRaw());

});

require __DIR__.'/auth.php';
