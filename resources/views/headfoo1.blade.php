<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

  <script type="text/javascript" src="{{URL::asset('js/megamenu.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/js/megamenu.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/megamenu.js') }}"></script>

  <header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
		<div class="container">

            <!-- Mobile toggle button -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="brand" href="#"><b>LOGO</b></a>

            <!-- Navigation -->
            <nav class="nav-collapse collapse">
                <ul class="nav">

				    <li><a href="#top">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu <b class="caret"></b></a>

						<ul class="dropdown-menu mega-menu">

						    <li class="mega-menu-column">
						    <ul>
						        <li class="nav-header">Mega menu 1</li>
						        <img src="http://placehold.it/150x120">
								<li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						    </ul>
						    </li>

						    <li class="mega-menu-column">
						    <ul>
						    <li class="nav-header">Mega menu 2</li>
						        <img src="http://placehold.it/150x120">
								<li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						    </ul>
						    </li>

						    <li class="mega-menu-column">
						    <ul>
						    <li class="nav-header">Mega menu 3</li>
						        <img src="http://placehold.it/150x120">
								<li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						        <li><a href="#">Mega-menu link</a></li>
						    </ul>
						    </li>

						</ul><!-- dropdown-menu -->

					</li><!-- /.dropdown -->

                    <li><a href="#about">About Us</a></li>
                    <li><a href="#pricing">Our Pricing</a></li>
                    <li><a href="#team">Our Team</a></li>
                    <li><a href="#contact">Contact</a></li>

				</ul><!-- /.nav -->
            </nav><!--/.nav-collapse -->

        </div><!-- /.container -->
    </div><!-- /.nav-inner -->
</header>

</body>
</html>
