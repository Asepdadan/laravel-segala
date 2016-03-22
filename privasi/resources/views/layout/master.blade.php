<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Name - @yield('title')</title>

         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        {!! Html::style('assets/css/materialize.min.css') !!}
        
          
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
            

    </head>
    <body>
   
     @section('sidebar')
        <div class="navbar-fixed"> 
         <nav >
            <div class="nav-wrapper" style="background:#2F4CB7;">
            <div class="container">
              <a href="" class="brand-logo" style="padding-top:9px;"><img src="./assets/img/smc.png" width="70" height="40" ></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
              </ul>
            </div>
            </div>
          </nav>
          </div>
        @show
       
        <div class="container">
            @yield('content')
        </div>

  




        <div>
            @yield('footer')
        </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>   
    {!! Html::script('assets/js/materialize.min.js') !!}
    {!! Html::script('assets/js/jquery.hammer.min.js') !!}
    <script>
     $(document).ready(function(){
  $('.button-collapse').sideNav();
       // Show sideNav
 

      });

     $(document).ready(function(){
      $('.carousel').carousel();
    });

$(document).ready(function(){
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
          });
    </script>
     
    </body>
</html>