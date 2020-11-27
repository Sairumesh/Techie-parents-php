
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>index page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <style>
      .jumbotron{
	background-image: url('https://images.unsplash.com/photo-1583452473797-c385cafb49bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
	background-size: cover;
	background-repeat: no-repeat;
} 
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Techie parents</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="color:white;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="filters.php" style="color:white;">Fees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.php" style="color:white;">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.php" style="color:white;">Event</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php" style="color:white;">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" style="color:white;">Logout</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3" style="color:white;">Techie Parents</h1>
          <p style="color:white;">Techie Parents is a website for Parents and Teachers to post information about their children and school related information.</p>
          <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Fees</h2>
            <p>In Fees page, parents can see the fee details and subjects of that academic year </p>
            <p><a class="btn btn-secondary" href="filters.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Profile</h2>
            <p>This page displays the details of the their respective children </p>
            <p><a class="btn btn-secondary" href="Profile.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Events</h2>
            <p>Events page display the contest details and Events details</p>
            <p><a class="btn btn-secondary" href="event.php" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; By Rumesh and Tharun</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
