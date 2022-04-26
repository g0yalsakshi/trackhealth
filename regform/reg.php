<?php


session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'userregistration');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$age=$_POST['Age'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$exercise_level=$_POST['Exercise_Level'];
$gender=$_POST['gender'];
$weight=$_POST['Weight'];
$height=$_POST['Height'];
$password=$_POST['password'];
$s="select * from users where first_name = '$first_name'";
$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"username alredy taken";
}

else{
    $reg="insert into users(first_name , last_name, age, email , phone_number, exercise_level, gender, weight , height ,password) values('$first_name',' $last_name','$age','$email','$phone_number','$exercise_level','$gender','$weight', '$height','$password')";
mysqli_query($con,$reg);
echo"reg succesfull";

}
 ?>   

