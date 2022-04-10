<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use App\Models\Logins;
use DataTables;


class BooksController extends Controller
{
    public function index(Request $request)
    {
   
        $table = Admins::latest()->get();
        
        if ($request->ajax()) {
            $data = Admins::latest()->get();
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
        Admins::updateOrCreate(['id' => $request->book_id],
                ['Fullname' => $request->name, 'Username' => $request->uname,'Address' => $request->address,'Phoneno' => $request->phone,'Password' => $request->password]);        
                Logins::updateOrCreate(['Username' => $request->uname],
                ['Fullname' => $request->name, 'Username' => $request->uname,'Password' => $request->password,'Type' => "admin"]);        
        return response()->json(['success'=>'Admin saved successfully.']);
    }
   
    public function edit($id)
    {
        $book = Admins::find($id);
        return response()->json($book);
    }
  
   
    public function destroy($id)
    {
        Admins::find($id)->delete();
     
        return response()->json(['success'=>'Admin deleted successfully.']);
    }
}
