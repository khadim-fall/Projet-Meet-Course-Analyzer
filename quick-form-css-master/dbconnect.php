<?php
if(isset($_POST['envoi'])){ // si formulaire soumis
if(isset($_POST[qst_1[]]))
{
        foreach ($_POST[qst_1[]] as $valrep1) {
                echo $valrep1 " <br> ";
        }
}
if(isset($_POST[qst_2[]]))
{
        foreach ($_POST[qst_2[]] as $valrep2) {
                echo $valrep2 " <br> ";
        }
}
if(isset($_POST[qst_3[]]))
{
        foreach ($_POST[qst_3[]] as $valrep3) {
                echo $valrep3 " <br> ";
        }
}
if(isset($_POST[qst_4[]]))
{
        foreach ($_POST[qst_4[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}
if(isset($_POST[qst_5[]]))
{
        foreach ($_POST[qst_5[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}
if(isset($_POST[qst_6[]]))
{
        foreach ($_POST[qst_6[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}
if(isset($_POST[qst_7[]]))
{
        foreach ($_POST[qst_7[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}
if(isset($_POST[qst_8[]]))
{
        foreach ($_POST[qst_8[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}
if(isset($_POST[qst_9[]]))
{
        foreach ($_POST[qst_9[]] as $valrep4) {
                echo $valrep4 " <br> ";
        }
}









$servername = "localhost";
$username = "root";
$password = "passer";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?> 