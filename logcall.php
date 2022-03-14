<?php
require_once "db.php";
$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
$sql = "SELECT * FROM incident_type";
$result = $conn->query($sql);
$incidentTypes = [];
while($row = $result->fetch_assoc()){
    $id = $row["incident_type_id"];
	$type = $row["incident_type_desc"];
	$incidentType = ["id"=>$id, "type"=>$type];
	array_push($incidentTypes, $incidentType);
}
$conn->close();
?>
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
        <img src="images/banner.jpg" width="900" height="200" alt="PESS" />
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
        <form action="dispatch.php" method="post">
          <div class="form-group row">
            <label for="callerName" class="col-sm-4 col-form-label">
              Caller's Name
            </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="callerName"
                     name="callerName">
            </div>
          </div>
          <div class="form-group row">
            <label for="contactNo" class="col-sm-4 col-form-label">Contact
              Number (Required)
            </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="contactNo"
                     name="contactNo">
            </div>
          </div>
          <div class="form-group row">
            <label for="locationOfIncident" class="col-sm-4 col-form-label">
              Location of Incident (Required)
            </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="locationOfIncident"
                     name="locationOfIncident">
            </div>
          </div>
          <div class="form-group row">
            <label for="typeOfIncident" class="col-sm-4 col-form-label">
              Type of Incident (Required)
            </label>
            <div class="col-sm-8">
              <select id="typeOfIncident" class="form-control"
                      name="typeOfIncident">
                <option value="">Select
                </option>
               <?php
            foreach ($incidentTypes as $incidentType) {
            echo "<option value =\"" . $incidentType["id"] . 
            "\">" . $incidentType["type"] . 
                "</option>";
            }
			?>
		<option value="Accident">Car Accident</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="descriptionOfIncident" class="col-sm-4 col-form-label">
              Description of Incident
            </label>
            <div class="col-sm-8">
              <textarea name="descriptionOfIncident" class="form-control"
                        rows="5" id="descriptionOfIncident">
              </textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-8">
              <input class="btn btn-primary" name="btnProcessCall" type="submit"
                     value="Process Call">
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
