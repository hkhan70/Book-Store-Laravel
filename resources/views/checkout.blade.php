
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

<h1 style="text-align: center;color: #656464 ">BILLING</h1><hr>
<div class="container">
 
        
    <form method="POST" action="/pdfview">

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
            <label ><b>Quantity</b></label><br>
            <input type="number" name="quantity" placeholder="Quantity">
 
      </div>
      <br>
          <div>
            <label ><b>Cash Paid</b></label><br>
            <input type="number" name="cashpaid" placeholder="Cash">
 
      </div>
      <div>
 
  <br>    <input type="submit" value="BILL">
 
      </div>
 
    </form>
 
    </div> 

</div>

            
        </div>
    </div>
</div>
@endsection
