<!DOCTYPE html>
<html>
    <head>
        <style>
        body{
            background-color:  #d2d2e0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
                .button {
  background-color: lightgreen;
  border: none;
  color: black;
  padding: 1px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
}
        </style>
    </head>
    <body>
       <!-- //Starting the session to get the session variable from last page-->
    <center>
        <center>  <h2 style="background-color: #ffffcc;">Purchase Receipt</h2>  </center>
      <?php
       
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $phonenumber = $_POST['txtNum'];
        $email = $_POST['txtEmail'];
        echo "The name is : ".$fullNameValue.".";
       
        echo"<br></br>";
        
        echo "The Mobile Number is : ".$phonenumber.".";
        
        echo"<br></br>";
        
        echo "The Email is : ".$email.".";
        
        echo"<br></br>";
       
        echo "The total value is : ".$totalValue2.".";
        ?>
    </center>
    <br><br>
    <center>
    <a href="Index.php" class="button">Return to Index</a>
    </center>
    </body>
</html>
