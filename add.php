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
    $result =mysqli_query($mysqli, "INSERT INTO participants(surname, name, age, gender, location,phone, email) VALUES($surname,$name, $age,$gender,$city, $phone,$email)");
    //display success message
    echo "<br></br>";
    echo "<p class='text-success' align='center' style='font-size:30px'>Your data is been added successfully !</p>"; 
    echo "<br/><a style='padding-left:47%;' href='index.php'>View Result</a>";
//} 

echo $surname;
echo $name;
echo $age;
echo $gender;
echo $city;
echo $phone;
echo $email;
}
?>