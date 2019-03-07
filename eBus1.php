<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>
        body{
            background-color:  #d2d2e0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
                  

            
           nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

nav li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
       
        </style>
</head>
<body>
    <nav> 
        <ul>
  <li><a class="active" href="Index.php">Index</a></li>
  <li><a href="Consultancy.html">Consultancy</a></li>
  <li><a href="AboutConsulting.html">About Consultancy</a></li>
  
  
  
</ul>
    </nav> 
    
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <center><h1 style="background-color: #ffffcc;">Services</h1></center>
        
        <center>
                    <table cellspacing="10">
            <tr>
                <td><center><b>Select a Consultancy Service</b></center></td>
            </tr>
            <tr>
                            <td>Blockchain @ €1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Things(Robots) @ €2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experience @ €3000</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total (- Dicount, + VAT)</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" style="background-color: yellow "/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear" style="background-color: red "/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed" style="background-color: lightgreen "/>
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
            var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
           
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calcDispVatTotalDisc(subAmount);
               
            }
        else if (document.getElementById('AutonomousThings').checked) {
                document.intCalc.txtSubTot.value = AutonomousThings;
                subAmount = AutonomousThings;
                 calcDispVatTotalDisc(subAmount);
              
            }
        else if (document.getElementById('ImmersiveExperience').checked) {
                document.intCalc.txtSubTot.value = ImmersiveExperience;
                subAmount = ImmersiveExperience;
                 calcDispVatTotalDisc(subAmount);
            }
        }   
       
         //Function for calculating the values
        function calcDispVatTotalDisc(parmSubTotal){
           var subTotal = parseFloat(parmSubTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>

