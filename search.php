<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log Call
    </title>
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    </style>
  </head>
  <body>
    <div class="container" style="width: 930px">
      <header>
        <img src="images/banner.jpg" width="900" height="200" alt="" />
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="logcall.php">Home <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="dispatch.php">Dispatch</a> </li>
          <li class="nav-item"> <a class="nav-link" href="search.php">Update</a> </li>
          <li class="nav-item"> <a class="nav-link" href="history.php">History</a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Reports </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> </div>
          </li>
        </ul>
      </div>
    </nav>
      </header>
     
      <section style="margin-top: 20px">
        <form action="update.php" method="post">
         	<div class="form-group row">
            <label for="patrolCarId" class="col-sm-4 col-form-label">
              Enter Patrol's Car Number
            </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="patrolCarId"
                     name="patrolCarId">
            </div>
             <div class="col-sm-2">
              <input type="submit" class="btn btn-primary" id="btnSearch"
                     name="btnSearch" value="Search">
            </div>
          </div>
           
        </form>
      </section>
      <footer 
      		class="page-footer font-small blue pt-4 
      			   footer-copyright text-center py-3">
            © 2020 Copyright: 
            <a href="https://www.ite.edu.sg"> ITE </a>
      </footer>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js">
    </script>
    <script type="text/javascript" src="js/popper.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap-4.3.1.js">
    </script>
  </body>
</html>
