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
<h1 class="display-4">User Information : {{$user->fullname}}</h1>
            <br/>
           
              <div class="row">
              <div class="col-lg-8">
              <form method="POST" action="{{route('usermanage.update', $user->id)}}" role="form" id="frmuser">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                   <div class="row">
                        <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                        <label for="fullname">Full name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Full name" name="fullname" value="{{$user->fullname}}" required>
                                </div>
                                <div class="form-group">
                                        <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" value="{{$user->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender" value=""  required>
                                        <option value=""></option>
                                        
                                                <option @if ($user->gender=="male")
                                                        {{'selected="selected"'}}
                                                    @endif
                                            value="male" >Male</option>
                                            
                                                <option @if ($user->gender=="female")
                                                        {{'selected="selected"'}}
                                                    @endif value="female">Female</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="phonenumber">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber" placeholder="Phone number" name="phonenumber" value="{{$user->phonenumber}}" required>
                                </div>
                                <div class="form-group">
                                        <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{$user->address}}" required>
                                </div>
                                <div class="form-group">
                                        <label for="zip">ZIP code</label>
                                <input type="text" class="form-control" id="zip" placeholder="Enter zip" name="zipcode" value="{{$user->zipcode}}" required>
                                </div>
                        </div>
                        
                   </div>
                   <div class="row">
                        &nbsp;&nbsp;   &nbsp;&nbsp;  <button type="submit" id="update" class="btn btn-dark"  name="submit">Update </button><br/>
                   </div>
                   @if(Session::has('success'))
                   <div class="alert alert-info">
                     {{Session::get('success')}}
                   </div>
               @endif
                </form>
                <div class="row"><button type="button" id="edit" class="btn btn-dark" name="edit">Edit </button><button type="button" id="cancel" class="btn btn-dark" name="cancel">Cancel </button></div>
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
            $("#frmuser :input").attr("disabled",true);
            $("#update").hide();
            $("#cancel").hide();
        $("#edit").click(function(){
            $("#frmuser :input").prop("disabled",false);
            $("#update").show();
            $("#cancel").show();
            $("#edit").hide();
        })
        $("#cancel").click(function(){
            $("#frmuser :input").attr("disabled",true);
            $("#update").hide();
            $("#cancel").hide();
            $("#edit").show();
        })
      
        if($("#gender").val()=="male"){
            $('#gender option[value=male]').attr('selected','selected')
        }
        
      
            
       
    
        })
        </script>

@endsection
  
