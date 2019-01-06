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
            <h1 class="display-4">User Informations</h1>
            <br/>
           
              <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Zip Code</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($users->count())
                        @foreach($users as $user)
                      <tr>
                      <td scope="row">{{$user->fullname}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->gender}}</td>
                      <td>{{$user->phonenumber}}</td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->zipcode}}</td>
                      <td><a type="button" class="btn btn-info" href="{{action('UsermanagementController@show',$user->id)}}" title="Detail">Detail</a> &nbsp;<form action="{{action('UsermanagementController@destroy', $user->id)}}" method="post">{{csrf_field()}} <input name="_method" type="hidden" value="DELETE"><button type="submit" class="btn btn-danger" title="Delete">Delete</button></form>
              </td>
                      </tr>
                      @endforeach 
                      @else
                      <tr>
                          <td colspan="6">No Users Found</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
              </div>
           
            
             
              <br/>
              
      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){
            
           
        })
        </script>

@endsection
  
