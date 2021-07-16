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

    
    <div class="bg-light col-md-9 offset-md-1 p-2" style="height: 550px; border-radius:14px">
      
      @if(count($errors)>0)
      <ul class="list-group">
        @foreach ($errors->all(); as $error)
        <li class="list-group-items text-danger offset-md-3"> {{ $error }}</li>
        
        @endforeach
      </ul>
      @endif 

      
      <div class="container">
        @include('message')
        <div class="row p-2">
          <div class="grid" style="border-radius: 15%">
            @foreach ($posts as $post)
            <div>

              <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="200px" height="200px" style="border-radius: 15%">
   
               <div class="text-center"> <h1>{{ $post->title }}</h1></div> 
               <div class="text-center"> <p>{{ $post->category_id }}</p></div>
                <div class="offset-md-2">
                  <a class="btn-sm btn-primary" href="{{ route('post.edit',['id'=>$post->id]) }}">Modifier</a>
                  <a class="btn-sm btn-danger"  href="{{ route('post.delete',['id'=>$post->id]) }}">Supprimer</a>
                </div>

            </div>
          



            @endforeach
          </div>
        </div>
      </div>
    
        
      </div>
      
    </div>
    
    
    
    
  </div>


</section>

@endsection
<style>
    .logo{
  background-image: url("/img/blooog.png");
  background-size: 100px 100px; 
  height: 120px;
  background-position: center center;
  background-repeat: no-repeat;
}
.grid{
  display: grid;
  grid-template-columns: 200px 200px 200px;
  grid-template-rows: auto; 
  grid-gap: 15px;
}
</style>




