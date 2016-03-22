@extends('layout.master')

@section('title', 'Home')

@section('sidebar')
    @parent

    <div class="container">
<br><br><br>
    


    </div>
    
@endsection

@section('content')

   
 

   


<div class="row">
	<div class="col s12 m4 l3"> <!-- Note that "m8 l9" was added -->


    <ul class="collection">
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
    </ul>
            
    
     <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
  </div>
		

    </div>

    <div class="col s12 m8 l9">

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.



		<div class="row">
    <form action="" method="" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="username">
          <label for="icon_prefix">Username</label>
        </div>
    
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_open</i>
          <input id="icon_prefix" type="password"  name="password">
          <label for="icon_prefix">Password</label>
        </div>


        <div class="input-field col s6">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		  </button>
		  </div>

      </div>
    </form>
  </div>

    </div>
 </div>



    
@endsection


@section('footer')
     <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
@endsection


