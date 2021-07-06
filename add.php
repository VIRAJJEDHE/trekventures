<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<?php
//including the database connection tile
include "config.php";

if(isset($_POST['submit'])) 
{
    $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']); 
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $phone= mysqli_real_escape_string($mysqli, $_POST['phone']);
    $email= mysqli_real_escape_string($mysqli, $_POST['email']);
    $destination=mysqli_real_escape_string($mysqli, $_POST['destination']);
    
/*
    // checking empty fields
    if (empty($name) || empty($age) || empty($email)) {

        if(empty($name)) {
        echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($age)) {
        echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($email)) {
        echo "<font color='red'>Email field is empty.</font><br/>";
        }
//link to the previous page
echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    
} 
*/

   // if all the fields are filled (not empty)
    //insert data to database
    $result =mysqli_query($mysqli, "INSERT INTO participants(surname, name, age, gender,city,phone, email,destination) VALUES('$surname','$name','$age','$gender','$city','$phone','$email','$destination')");
    //display success message
    if ($result) {
        
    } else {
      echo "Error: <br>" . mysqli_error($mysqli);
    }
    echo "<br></br>";
    echo "<p class='text-success' align='center' style='font-size:30px'>Congratulations!! YOU will joining us for our next trip to $destination</p>";
   

}  
?>
<br/>
<div class="container">
    <div class="col-md-12 text-center">
<a class='col-md-2 btn btn-success' href='index.html'>Back to Home</a></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>