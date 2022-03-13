# gitpod-workspace-php-configuration

Create Database in terminal
$mysql
$show databases; > to check all databases
$create database gitpod_db; > create database called gitpod_db
$show databases; > check if the databases you created is there
$use gitpod_db; > refer to the database you want to manipulate "gitpod_db"
$show tables; > to check the table have inside "gitpod_db" database
$create table Contact(); > to create table inside "gitpod_db"
$describe Contact; > to check the entities in contact table
$Select * from Contact; > to read the data existed in table "contact"

Create connection
<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "gitpod_db"); 
//server, username, password, database_name
    if($con){
        echo 'Connected successfully';
    }else{
        echo 'Failed to connect';
    }
?>

Insert data using PHP script
1. Create a file named inser_data and paste these script
2. Use this include script to connect in the php connection file we just created
<?php
include_once 'connection.php';
?>
3. Use this script to insert data;
<?php
$sql="INSERT INTO Contact (contactId,firstName,lastName,email,age,salary,address) VALUES (2, 'Alyssia', 'Manzo', 'allysia@gmail.com', '12', '300', 'Tarlac City')";
$stmt=$con->prepare($sql);
if($stmt->execute()){
  echo 'User has been added successfully ';
}else{
  echo 'User has not been added successfully ';
}
?>

Laravel Installer
1. Go to the terminal and paste this
$ composer create-project --prefer-dist laravel/laravel learning


Get the data using RESTful API
