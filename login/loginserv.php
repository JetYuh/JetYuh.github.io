<?php
  $mail=$_POST['email'];
  $pwd=$_POST['pwd'];

    $conn=mysqli_connect('localhost','root','','tutorial');
    if(!conn)
      echo mysqli_connect_error();
    else
      echo "Connected!";

    $sql="SELECT * FROM person WHERE Email='$mail' AND Password='$pwd'";

    $result=mysqli_query($conn,$sql);

    $rows=mysqli_num_rows($result);

    if($rows>0){
      echo'<script> window.location="welcome.php"; </script> ';
    }
    else
      echo "Inbvalid Username or Password!";


 ?>
