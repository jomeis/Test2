<?php

  echo $_POST['fname']." ".$_POST['lname']." ".$_POST['email'];
  echo "<br>";
  echo " First Name Length: ".strlen($_POST['fname']);
  echo "<br>";
  echo " Last Name Length: ".strlen($_POST['lname']);
  echo "<br>";
  echo " Email Length: ".strlen($_POST['email']);

  $fullNameLength = strlen($_POST['fname'])+strlen($_POST['lname']);

  echo "<br>";
  echo "Full Name Length: ".$fullNameLength;

  echo "<br>";
  echo "Age is: ".$_POST['age'];

  $daysAlive = $_POST['age']*365;

  echo "<br>";
  echo "You have been alive for ".$daysAlive." days";

  echo "<br>";
  echo "You live in ".$_POST['state'];


  







  if (strpos($_POST['email'], "@") !== false) {
    echo '<br>has @';
  } else { 
    echo '<br>Missing @';
  }

  if (strpos($_POST['email'], ".") !== false) {
    echo '<br>has .';
  } else { 
    echo '<br>Missing .';
  }

  if (strlen($_POST['email']) >= 6) {
    //is grater that 6
    if (strpos($_POST['email'], "@") !== false) {
      //is grater that 6 and has @
      if (strpos($_POST['email'], ".") !== false) {
        //is grater that 6 and has @ and has .
        echo "<br>this is a valid email"; 
      }
    }
  }

?>
