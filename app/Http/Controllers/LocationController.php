<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Location;
// use App\Http\Models\Book;
use Illuminate\Http\Request;
class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    // public function index(){
    //     $categories = Category::all();
    //     return response()->json($categories, 200);
    // }

    // public function onecategory($id)
    // {
    //     return response()->json(Category::find($id));
    // }

    public function storelocations(Request $request)
    {
        $Location = Location::create($request->all());

        return response()->json($Location, 201);
    }

    // public function update(Request $request,$id)
    // {
    //     $Category = Category::findOrFail($id);
    //     $Category->update($request->all());
    //     return response()->json($Category, 200);
    // }

    // public function delete($id)
    // {
    //     Category::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }

    // public function query(){
    //     // $books = Book::select('categories.name','books.title','books.description','books.author')
    //     // ->join('categories','categories.id','=','books.id_category')
    //     // ->get();

    //     // return response()->json($books);
    //     // $result = DB::select('select * from categories,books where categories.id = books.id_category');
    //     // return response()->json($result);
    //     $data = Book::all();
    //     return response($data);
    // }

    // public function querydetails($id){
    //     $result = DB::select('select * from categories,books where categories.id = books.id_category and books.id = "'.$id.'"');
    //     return response()->json($result);
    // }

    // public function updatebook(Request $req, $id){
    //     $status = DB::update('UPDATE books SET title = ?, author = ?, description = ?, id_category = ?, updated_at = NOW() WHERE id = ?',
    //                         [$req->input('title'), $req->input('author'), $req->input('description'), $req->input('id_category'), $id]);
    //     return response()->json(['status'=>$status, 'data'=>$req->all()]);
    // }

    // public function createbook(Request $req){
    //     $status = DB::insert('INSERT INTO books (title, author, description, id_category) VALUES (?,?,?,?)',
    //                         [$req->input('title'),$req->input('author'),$req->input('description'),$req->input('id_category')]);
    //     return response()->json(['status'=>$status, 'data'=>$req->all()]);
    // }

    // public function deletebook($id)
    // {
    //     // Book::findOrFail($id)->delete();
    //     // return response('Deleted Successfully', 200);
    //         $status = DB::delete('DELETE FROM books WHERE id = ?', [$id]);
    //         return response()->json(['status'=>'deleted succesfully'], 200);
    // }
}
