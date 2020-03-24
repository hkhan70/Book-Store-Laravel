<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\UserRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Book;
use DB;

class BookController extends Controller
{

     public function index()
    {
 
        $Books = Book::all()->sortBy('name');
 
        return view('home',compact('Books'));
    }
    
     public function sortbyname()
    {
 
        $Books = Book::all()->sortBy('name');
 
        return view('home',compact('Books'));
    }

         public function sortbyprice()
    {
 
        $Books = Book::all()->sortBy('price');
 
        return view('home',compact('Books'));
    }
        public function sortbyrackno()
    {
 
        $Books = Book::all()->sortBy('rackno');
 
        return view('home',compact('Books'));
    }
 
    public function add()
    {
 
        $Book = new Book();
        $Book->name = request('name');
        $Book->price = request('price');
        $Book->author = request('author');
        $Book->rackno = request('rackno');
        $Book->quantity = request('quantity');
 
        $Book->save();
 
        return redirect('/books');
 
    }

    public function update($id) 
    {
        $price = request('price'); 
     DB::update('update presentstock set price = ? where id = ?',[$price,$id]);
       return redirect('/search');
    }
     public function destroy($id) 
    {

    DB::delete('delete from presentstock where id = ?',[$id]);
       return redirect('/books');
    }

    public function searchbookbyname()
    {

        $q = Input::get ( 'name' );
        $item = Book::where ( 'name', 'LIKE', '%' . $q . '%' )->get ();
        return view('search',compact('item'));


    }

    public function searchbookbyauthor()
    {

        $q = Input::get ( 'name' );
        $item = Book::where ( 'author', 'LIKE', '%' . $q . '%' )->get ();
        return view('search',compact('item'));


    }

    public function searchnamecheckout()
    {

        $q = Input::get ( 'name' );
        $item = Book::where ( 'name', 'LIKE', '%' . $q . '%' )->get ();
        return view('checkout',compact('item'));


    }

    public function searchauthorcheckout()
    {

        $q = Input::get ( 'name' );
        $item = Book::where ( 'author', 'LIKE', '%' . $q . '%' )->get ();
        return view('checkout',compact('item'));


    }
    public function search()
    {
        return view('search');

    }
    public function checkout()
    {
        return view('checkout');
    }
       public function sold($quantity,$id) 
    {
        $quantity=$quantity-1;
       DB::update('update presentstock set quantity = ? where id = ?',[$quantity,$id]);
       return redirect('/checkout');
    }
     public function pdfview()
    { 
        $name = request('name');
        $price = request('price');
        $quantity = request('quantity');
        $cashpaid = request('cashpaid');
        $bill=$price*$quantity;
        $change=$cashpaid-$bill;
       // return view('pdfview',compact('name','price','quantity'));
        $pdf = PDF::loadView('pdfview', compact('name','price','quantity','bill','change','cashpaid'));  
        return $pdf->download('bill.pdf');
    }
}
