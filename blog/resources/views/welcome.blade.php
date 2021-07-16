@include('data.header')


<section style="background-image: url(/img/back.jpg);
background-size: cover;
height: 650px;">
    <nav class="navbar navbar-default fixed-top">
       <div class="container-fluid flex-row justify-content-around">
           <div class="navbar-header logo">
             <a class="navbar-brand" href="#"></a>
           </div>
              <ul class="nav flex-row"> 
             <li class="p-2"><a class="text-white" href="#">Home</a></li>
             <li class="p-2 ml-2"><a class="text-white" href="#">Article</a></li>
             <li class="p-2 ml-2"><a class="text-white" href="#">Equipe</a></li>
             <li class="p-2 ml-2"><a class="text-white" href="#">Contacter nous</a></li>
           </ul> 
         </div>
    </nav>
    <div class="welcome">
      <h1>
        Welcome to ..
      </h1>
        <h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Est exercitationem nulla repellat, 
            cum, hic sit sint tempore sed <br>ipsam placeat possimus, ex vitae ipsum eligendi? <br>Blanditiis fugit
             corporis aspernatur id!
        </h5>
        <div class="p-3">
          <a type="button" class="btn btn-primary p-1" href="{{ route ('login') }}">Login</a>
          <a type="button" class="btn btn-danger p-1" href="{{ route ('register') }}">Register</a>

        </div>
      </div>
      
      <div class="col-1 arrow">
      <a href="#articles"><img src="/img/down-arrow.svg" alt="" style="height: 50px; width:50px"></a>  
      </div>


</section>

<section id="articles">
  <div class="container p-4">
    <div class="row">
      <div class="col-sm-7 bg-primary" style="height: 200px">
        One of three columns
      </div>
      <div class="col-sm-3 bg-danger ml-2">
        One of three columns
      </div>
    </div>
  </div>


</section>

<section class="bg-dark">
  <div class="container p-4 col-12 ">
    <div class="row">
      <div class="col-sm-4 md-auto bg-primary">
        One of three columns
      </div>
      <div class="col-sm-2 ml-md-auto bg-danger">
        One of three columns
      </div>
      <div class="col-sm-2  ml-md-auto bg-danger">
        One of three columns
      </div>
    </div>
  </div>

</section>



@include('data.footer')

<style>
  .btn{
    width: 150px;
  }
  .arrow{
      position: absolute;
      Top: 85%;
      left: 15px;
    }
    .welcome{
      position: absolute;
      Top: 30%;
      left: 15px;
    }
    .navbar-default{
        min-height:15vh;
  transition:100ms ease;
  background:transparent;
}
.navbar-default.scrolled{
   background:#000; 
} 
.logo{
  background-image: url("/img/blooog1.png");
  background-size: 100px 100px; 
  height: 120px;
  width:120px;
  background-position: center center;
  background-repeat: no-repeat;
  
}
.logo.scrolled{
  background-image: url("/img/blooog.png");
  height: 100px;
  width:100px;
  
}

</style>

<script>
    $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
  $('.logo').toggleClass('scrolled', $(this).scrollTop() > 50);

}); 
</script>

