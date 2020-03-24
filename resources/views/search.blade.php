
@extends('layouts.app')
@section('content')
<div class="container" style="background-color:white;">
    <div class="row justify-content-center">
        <div class="col-md-8">

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<h3 style="color: #656464">Search Books</h3>
<div class="container">
 
        <form method="POST" action="/search">

        {{ csrf_field() }}
 
       <div>
          <label > <b>Enter Name</b></label>
          <input type="text" name="name" placeholder="">
 
      </div>
      <div>
    <button formaction="/searchbookbyname" style="background-color: #58B131;color: white;">Search By Name</button>
    <button formaction="/searchbookbyauthor" style="float: right;background-color: #58B131;color: white;">Search By Author </button>
 
      </div>
 
       </form> 
 
    </div> 

</div>

 <table>
  <tr>
    <th style="text-align: center;">Name</th>
    <th style="text-align: center;">Price</th>
    <th style="text-align: center;">Author</th>
    <th style="text-align: center;">Rack No</th>
    <th style="text-align: center;">Quantity</th>
    <th colspan="2" style="text-align: center;">Action</th>
  
  </tr>
@if(isset($item))
@foreach ($item as $book)
  <tr>
    <td style="text-align: center;">{{ $book->name}}</td>
    <td style="text-align: center;">{{ $book->price}}</td>
    <td style="text-align: center;">{{ $book->author}}</td>
    <td style="text-align: center;">{{ $book->rackno}}</td>
    <td style="text-align: center;">{{ $book->quantity}}</td>
    @if($book->quantity==0)
     <td style="text-align: center;" colspan="2">Out Of Stock</td>
     @else
    <td style="text-align: center;"><a href = 'delete/{{ $book->id }}'>DELETE</a></td>
    <td style="text-align: center;"><form method="GET" action='update/{{ $book->id }}'><input type="number" name="price" placeholder="Price" style="width: 80px;"> <input type="submit" value="Update" style="width:80px;"></form></td>
    @endif
  </tr>
@endforeach 
@endif
</table>

            
        </div>
    </div>
</div>
@endsection
