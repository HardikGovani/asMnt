<?php
//Using question 6,7 take input from user for three cars maintenance. Add these records into text file. 
//Calculate most economical car and display car details
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php

class Vehicle{
    public $VID;
    public $ModelNo;
    public $Mileage;
    public $FuleRate;
    public $cpk;

    function cpk(){  // cal cost per km. 
        if($_POST){ 
        $VID = $_POST['vid'];
        $ModelNo = $_POST['md'];
        // $Mileage = (int)$_POST['mg'];
        // $FuleRate = (int)$_POST['fr'];
        
        // $cpk = (int)$FuleRate/(int)$Mileage;

        echo "VID = ".$VID;
        echo "</br>";
        echo "Model NO = ".$ModelNo;
        echo "</br>";
        // echo "Cost per KM. (CPK) = ".$cpk. "  INR";
        // }
    }
}
}

class car extends Vehicle{
    public $car_wash;
    public $oile_change;
    public $SPR;
    public $ymcC;
    
    function ymc(){  //yeraly maintance cost cal
        if($_POST){ 
            $total1=0;
            $total2=0;
            $total3=0;
            $serv1="";$serv2="";$serv3="";

            /// car 1 cal
            if($_POST['car_wash1']=="CWY1"){
                $total1 = $total1 + 500;
            }
            if($_POST['oil_change1']=="OLY1"){
                $total1 = $total1 + 1000;
            }
            if($_POST['sant1']=="SANTY1"){
                $total1 = $total1 + 500;
            }
            if($_POST['mie1']=="MJY1"){
                $serv1="YES";
            }

            /// car 2 cal
            if($_POST['car_wash2']=="CWY2"){
                $total2 = $total2 + 500;
            }
            if($_POST['oil_change2']=="OLY2"){
                $total2 = $total2 + 1000;
            }
            if($_POST['sant2']=="SANTY2"){
                $total2 = $total2 + 500;
            }
            if($_POST['mie2']=="MJY2"){
                $serv2="YES";
            }

            /// car 3 cal
            if($_POST['car_wash3']=="CWY3"){
                $total3 = $total3 + 500;
            }
            if($_POST['oil_change3']=="OLY3"){
                $total3 = $total3 + 1000;
            }
            if($_POST['sant3']=="SANTY3"){
                $total3 = $total3 + 500;
            }
            if($_POST['mie3']=="MJY3"){
                $serv3="YES";
            }

            echo "<br>";
            echo "CAR 1 yearly maintance charges: ";
            echo ($total1*12);
            if($serv1=="YES"){echo "<br>";
                echo "Our executive will contact you soon, Thank you for informaiton."."<br>";
            }

            echo "<br>";echo "<br>";
            echo "CAR 2 yearly maintance charges: ";
            echo ($total2*12);
            if($serv2=="YES"){echo "<br>";
                echo "Our executive will contact you soon, Thank you for informaiton."."<br>";
            }

            echo "<br>";echo "<br>";
            echo "CAR 3 yearly maintance charges: ";
            echo ($total3*12);
            if($serv3=="YES"){echo "<br>";
                echo "Our executive will contact you soon, Thank you for informaiton."."<br>";
            }

            $eff = min($total1,$total2,$total3);
            if($eff==$total1){
                echo "<br>";
                echo "CAR 1 is more effective!: ";
            }elseif ($eff==$total2) {
                echo "<br>";
                echo "CAR 2 is more effective!: ";
            }else{
                echo "<br>";
                echo "CAR 3 is more effective!: ";
            }
          
        }    
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<h2>CAR SERVICE COMPARISION</h2>
<p>car maintance display - best calculation among three car.</p>

<form action="" method="post">

<table style="width:100%">
<tr>
    <th>Maintain to do</th>
    <th>CAR 1</th>
    <th>CAR 2</th> 
    <th>CAR 3</th>
  </tr>
  <tr>
  <td>CAR WASH:</td>
    <th><input type="radio" name="car_wash1" value="CWY1">YES
        <input type="radio" name="car_wash1" value="CWN1">NO
    </th>
    <th><input type="radio" name="car_wash2" value="CWY2">YES
        <input type="radio" name="car_wash2" value="CWN2">NO
    </th> 
    <th><input type="radio" name="car_wash3" value="CWY3">YES
        <input type="radio" name="car_wash3" value="CWN3">NO
    </th> 
  </tr>

  <tr>
  <td>OIL CHANGE:</td>
    <th><input type="radio" name="oil_change1" value="OLY1">YES
        <input type="radio" name="oil_change1" value="OLN1">NO
    </th>
    <th><input type="radio" name="oil_change2" value="OLY2">YES
        <input type="radio" name="oil_change2" value="OLN1">NO
    </th> 
    <th><input type="radio" name="oil_change3" value="OLY3">YES
        <input type="radio" name="oil_change3" value="OLN1">NO
    </th> 
  </tr>

  <tr>
  <td>CAR SANITIZATION:</td>
    <th><input type="radio" name="sant1" value="SANTY1">YES
        <input type="radio" name="sant1" value="SANTN1">NO
    </th>
    <th><input type="radio" name="sant2" value="SANTY2">YES
        <input type="radio" name="sant2" value="SANTN2">NO
    </th> 
    <th><input type="radio" name="sant3" value="SANTY3">YES
        <input type="radio" name="sant3" value="SANTN3">NO
    </th> 
  </tr>

  <tr>
  <td>MAJOR ISSUES(CONTACT EXECUTIVE)</td>
    <th><input type="radio" name="mie1" value="MJY1">YES
        <input type="radio" name="mie1" value="MJN1">NO
    </th>
    <th><input type="radio" name="mie2" value="MJY2">YES
        <input type="radio" name="mie2" value="MJN2">NO
    </th> 
    <th><input type="radio" name="mie3" value="MJY3">YES
        <input type="radio" name="mie3" value="MJN3">NO
    </th> 
  </tr>

</table>

<br>
<input type="submit" name="button" value="CAL CHARGES">

</form>
</body>
</html>
<?php

// $myVehicle = new Vehicle();
// $myVehicle->cpk();
$mycar = new car();
$mycar ->ymc();
?>