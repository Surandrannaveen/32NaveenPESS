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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" 
<title>Dispatch</title>
<!-- <link rel="stylesheet" href="css/bootstrap-4.3.1.css"> -->
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
			<form action="dispatch.php" method="post">
				<div class="form-group row">
					<label for="callerName" class="col-sm-4 col-form-label">Caller's
						Name </label>
					<div class="col-sm-8">
						<span id="callerName">
                     	<input type="text" name="callerName"
							id="callerName" value="">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="contactNo" class="col-sm-4 col-form-label"> Contact No:
					</label>
					<div class="col-sm-8">
						<span id="contactNo">
                     	<input type="text" name="contactNo"
							id="contactNo" value="">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="locationOfIncident" class="col-sm-4 col-form-label">
						Location of Incident: </label>
					<div class="col-sm-8">
						<span id="locationOfIncident">
                     	<input type="text" name="locationOfIncident"
							id="locationOfIncident" value="">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="typeOfIncident" class="col-sm-4 col-form-label"> Type
						of Incident: </label>
					<div class="col-sm-8">
						<span id="typeOfIncident">
                        <input type="text" name="typeOfIncident"
							id="typeOfIncident" value="">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="descriptionOfIncident" class="col-sm-4 col-form-label">
						Description of Incident: </label>
					<div class="col-sm-8">
						<span id="descriptionOfIncident">
                     	<input type="text" name="descriptionOfIncident"
							id="descriptionOfIncident"
							value="">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="patrolCars" class="col-sm-4 col-form-label"> Choose a
						Patrol Car </label>
					<div class="col-sm-8">
						<table id="patrolCars" class="table table-striped">
							<tbody>
								<tr>
									<th>Car Number</th>
									<th>Status</th>
									<th></th>
								</tr>
								<tr>
								<td>SJA667A</td>
								<td>Free</td>
								<td>
								<input type="checkbox" name="cbCarSelection[]">	
								</td>
								</tr>
								<tr>
								<td>SGA8765A</td>
								<td>Free</td>
								<td>
								<input type="checkbox" name="cbCarSelection[]">	
								</td>
								</tr>
								<tr>
								<td>SJE5564A</td>
								<td>Free</td>
								<td>
								<input type="checkbox" name="cbCarSelection[]">	
								</td>
								</tr>
                     		
                     		</tbody>
						</table>
					</div>
				</div>

				<div class="form-group row">

					<div class="col-sm-4"></div>

					<div class="col-sm-8" style="text-align: center">
						<input type="submit" name="btnDispatch" id="btnDispatch"
							value="Dispatch" class="btn btn-primary">
					</div>
				</div>

			</form>
		</section>



	</div>
</body>

</html>
