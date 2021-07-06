
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Home</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
		<a class="navbar-brand" href="index.html">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
				<a class="nav-link" href="form.html">Add Data<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container my-5">
		<table class="table table-striped" width="80%" border-e>
			<tr >
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			
<?php

  include "config.php";
  $result=mysqli_query($mysqli,"SELECT * FROM users");
  while($res = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$res['name']."</td>";
      echo "<td>".$res['age']."</td>";
      echo "<td>".$res['email']."</td>";
	  echo "<td> <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> </td>";
      echo "</tr>";
  }
?>
        </table>
	    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>