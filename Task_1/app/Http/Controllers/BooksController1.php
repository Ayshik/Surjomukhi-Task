<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DataTables;


class BooksController extends Controller
{
    public function index(Request $request)
    {
   
        $table = Book::latest()->get();
        
        if ($request->ajax()) {
            $data = Book::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('pages.book',compact('table'));
    }
     
   
    public function store(Request $request)
    {
        Book::updateOrCreate(['id' => $request->book_id],
                ['title' => $request->title, 'author' => $request->author]);        
   
        return response()->json(['success'=>'Book saved successfully.']);
    }
   
    public function edit($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }
  
   
    public function destroy($id)
    {
        Book::find($id)->delete();
     
        return response()->json(['success'=>'Book deleted successfully.']);
    }
}
