<?php
//Create a class Car which is child class of the class Vehicle.
// Add the operation maintenance for car class.
// The maintenance class has a property to calculate cost to maintain a car in good condition for a month.
// Write a function which provides the total maintenance cost of a car for the year. 
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
            $total=0;
            $cw = $_POST['car_wash'];
            $olc = $_POST['oil_change'];
            $snt = $_POST['sant'];
            $mji = $_POST['mie'];

            if($cw=='CAR_WASH_YES'){
                $total = $total + 500;
            }
            if($olc=="OIL_CHANGE_YES"){
                $total = $total + 1000;
            }
            if($snt=="sant"){
                $total = $total + 1000;
            }
            if($mji=="E_YES"){
                echo "Our executive will contact you soon, Thank you for informaiton."."<br>";
            }
            echo "Your yearly car maintance charges: ";
            echo ($total*12);

            // }
        }    
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>CAR Classification -> Inherited from Vehicle Class</h1><br>
<h3>SERVICE SELECTION</h3><br>
</body>
</html>

<form action="" method="post">
CAR WASH:
<input type="radio" name="car_wash" value="CAR_WASH_YES">YES
<input type="radio" name="car_wash" value="CAR_WASH_NO">NO<br><br>

OIL CHANGE:
<input type="radio" name="oil_change" value="OIL_CHANGE_YES">YES
<input type="radio" name="oil_change" value="OIL_CHANGE_NO">NO<br><br>

CAR SANITIZATION:
<input type="radio" name="sant" value="S_YES">YES
<input type="radio" name="sant" value="S_NO">NO<br><br>

MAJOR ISSUES(CONTACT EXECUTIVE)
<input type="radio" name="mie" value="E_YES">YES
<input type="radio" name="mie" value="E_NO">NO<br><br>
<br>
<input type="submit" name="button" value="CAL CHARGES">

</form>

<?php

// $myVehicle = new Vehicle();
// $myVehicle->cpk();
$mycar = new car();
$mycar ->ymc();
?>