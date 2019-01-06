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
            <h1 class="display-4">Homepage</h1>
            <br/>
           
              <div class="row">
                  
                    
              </div>
              <div class="row">
                    <div class="col-lg-6">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" id="createuser">Create User</button>
                    </div>
                  
              </div>
              <br />
              <div class="row">
                  <div class="col-lg-6">
                      <button type="button" class="btn btn-secondary btn-lg btn-block" id="listuser">List Users</button>
                      </div>
              </div>
             
              <br/>
              
      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script>
   $(document).ready(function(){
       $("#createuser").click(function(){
           window.location="/usermanage/create"
       })
       $("#listuser").click(function(){
         window.location="/usermanage"
       })
   })
   </script>

@endsection
 
