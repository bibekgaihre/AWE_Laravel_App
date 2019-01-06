@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">{{$title}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usermanage/create">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usermanage">List</a>
      </li>
    
    </ul>
  </div>
</nav>
<div class="container" style="margin-top: 80px">
            <h1 class="display-4">User Information</h1>
            <br/>
           
              <div class="row">
              <div class="col-lg-8">
              <form method="POST" action="{{route('usermanage.store')}}" role="form">{{ csrf_field() }}
                   <div class="row">
                        <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                        <label for="fullname">Full name</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="Full name" name="fullname" required>
                                </div>
                                <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender"  required>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="phonenumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumber" placeholder="Phone number" name="phonenumber" required>
                                </div>
                                <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                                </div>
                                <div class="form-group">
                                        <label for="zip">ZIP code</label>
                                        <input type="text" class="form-control" id="zip" placeholder="Enter zip" name="zipcode" required>
                                </div>
                        </div>
                        
                   </div>
                   <div class="row">&nbsp;&nbsp;&nbsp;<button type="submit" id="submit" class="btn btn-dark" name="submit">Submit </button></div>
                   @if(Session::has('success'))
                   <div class="alert alert-info">
                     {{Session::get('success')}}
                   </div>
               @endif
                </form>
              </div>
              </div>
           
            
             
              <br/>
              
      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){
            $("#phonenumber").on("keypress keyup blur",function(e){
                $(this).val($(this).val().replace(/[^\d].+/, ""));
                 if ((e.which < 48 || e.which > 57)) {
                e.preventDefault();
            }   
            });
       
        })
        </script>

@endsection
  
