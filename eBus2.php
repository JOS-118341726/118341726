<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$phonenumber = "";
$email ="";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $phonenumber;
$_SESSION['txtEmail'] = $email;
/**
 * Allocate The mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
          <style>     
        body{
            background-color:  #d2d2e0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .button {
  background-color: lightcoral;
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
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center><strong>Please enter your payment details below</strong></center>
                <center>
                    <table cellspacing="10"

                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        <!--Required so it must be filled in-->
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" maxlength="10" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required/></td>
                       <!--So telephone can only be numbers-->
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="Email" id="txtEmail" name="txtEmail" value="" required/></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" maxlength="4" required autocomplete="off"/></td>
                        <!--Fixing Max Length-->
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
                
                <center>
                    <a href="eBus1.php" class="button">Return to selections</a>
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed with Purchase" style="background-color: lightgreen;"/>
                
                </center>
        </div>
      </form>
      </body>
            </html>