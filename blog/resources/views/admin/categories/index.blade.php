@extends('layouts.app')

@section('content')

<section style="background-image: url(/img/back-dash.png);
background-size: cover; background-position:center center;
height: 609px;">

<div class="container d-flex flex-row col-md-12 p-3">

<div class="col-md-2 bg-dark" style="height: 550px;"  style="border-radius: 14px;">
    <ul class="list-group">
        <a class="bg-dark logo" href="#"></a>
        <a class="list-group-item bg-dark text-white" href="#">{{ __('Dashboard') }}</a>
        <a class="list-group-item bg-dark text-white" href="#">Profil</a>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route ('posts') }}">Articles</a>
          <a class="dropdown-item" href="{{ route ('create') }}">Ajouter</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route ('categories') }}">categories</a>
          <a class="dropdown-item" href="{{ route ('creer') }}">Ajouter</a>
        </div>
      </li>
        <a class="list-group-item bg-dark text-white" href="#">Users</a>
        <a class="list-group-item bg-dark text-white" href="#">Notification</a>
    </ul>
</div>


<div class="d-flex flex-column col-10 pl-0" style="height:80px;">
<div class="col-md-12 pl-0" >


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container d-flex flex-row">
                <div>
                  <a class="navbar-brand" href="#" style="font-size: 20px">{{ __('Dashboard') }}</a>  
                </div>
              
              <div>
                 <a class="navbar-brand" href="#" style="font-size: 15px">Account</a>
               <a class="navbar-brand" href="{{url('logout')}}" style="font-size: 15px">Logout</a> 
              </div>
              
            </div>
          </nav>
    </div>

    
    <div class="bg-light col-md-9 offset-md-1 p-2" style="height: 550px;">
      @include('message')
      <table class="table table-hover">
        <thead>
          
            <th scope="col">Name</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>
                  {{ $category->name }}
              </td>
              <td>
                <a href="{{ route('edit',['id'=>$category->id]) }}" class="btn btn-xs btn-info">modifier</a>
            </td>
            <td>
                <a href="{{ route('delete',['id'=>$category->id]) }}" class="btn btn-xs btn-danger">delete</a>
            </td>
            </tr>
                
            @endforeach
          
          
        </tbody>
      </table>


    
        
      </div>
      
    </div>
    
    
    
    
  </div>



@endsection
<style>
    .logo{
  background-image: url("/img/blooog.png");
  background-size: 100px 100px; 
  height: 120px;
  background-position: center center;
  background-repeat: no-repeat;
  
}
</style>