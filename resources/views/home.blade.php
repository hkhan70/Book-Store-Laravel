
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

<h1 style="text-align: center;color: #646465 ">WELCOME</h1>
<button style="float: right;"><a href = '/search' style="color:#646465;"><i class="fa fa-search"></i>Search</a></button>
<button style="float: left;border-radius: 5px;background-color: #646465"><a href = '/checkout' style="color:white;">CheckOut</a></button>
<br><br>
<div style="width: 45%;float: left;">
<h3 style="color: #656464">Available Books</h3>
<button > <a href = '/sortbyname' style="color:#646465;">SortByName</a>  </button>&nbsp
<button > <a href = '/sortbyrackno' style="color:#646465;">SortByRackNo</a>  </button>
<button > <a href = '/sortbyprice' style="color:#646465;">SortByPrice</a></button>
<hr> 
 <table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Author</th>
    <th>Rack No</th>
    <th>Quantity</th>
  </tr>

@foreach ($Books as $device)
  <tr>
    <td>{{ $device->name}}</td>
    <td>{{ $device->price}}</td>
    <td>{{ $device->author}}</td>
    <td>{{ $device->rackno}}</td>
    <td>{{ $device->quantity}}</td>
  </tr>

@endforeach 

</table>
<br>
 </div>

<div style="width: 45%;margin-left: 70%;">
<h3 style="color: #656464">Add Books</h3>
<div class="container">
 
    <form method="POST" action="/books/add">

        {{ csrf_field() }}
 
       <div>
          <label > <b>Book Name</b></label>
          <input type="text" name="name" placeholder="Book Name">
 
      </div>
      <div>
            <label ><b>Book Price</b></label><br>
            <input type="number" name="price" placeholder="Book Price">
 
      </div>
      <br>
        <div>
            <label ><b>Author</b></label><br>
            <input type="text" name="author" placeholder="Book Author">
 
      </div>
        <div>
            <label ><b>RackNo</b></label><br>
            <input type="number" name="rackno" placeholder="Rack No">
      </div>
         <br>
        <div>
            <label ><b>Quantity</b></label><br>
            <input type="number" name="quantity" placeholder="Quantity">
 
      </div>
      <div>
 
  <br>    <input type="submit" value="Add Book">
 
      </div>
 
    </form>  
 
    </div> 

</div>

            
        </div>
    </div>
</div>
@endsection
