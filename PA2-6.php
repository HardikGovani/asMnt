<?php
//Create a class Vehicle having attributes 
//VID, ModelNo and Mileage( per litere). 
//Write operations to calculate 
//cost per Km by asking price of fuel from user. Implement all the attributes and operations for the class. 
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
        $Mileage = (int)$_POST['mg'];
        $FuleRate = (int)$_POST['fr'];
        
        $cpk = (int)$FuleRate/(int)$Mileage;

        echo "VID = ".$VID;
        echo "</br>";
        echo "Model NO = ".$ModelNo;
        echo "</br>";
        echo "Cost per KM. (CPK) = ".$cpk. "  INR";
        }
    }

}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Vehicle Classification & CPK(cost per km.)</h1>
</body>
</html>

<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td><label>Enter_VID:</label></td>
			<td><input type="text" name="vid"></td>
        </tr>
        <tr>
			<td><label>Model_Number:</label></td>
			<td><input type="text" name="md"></td>
        </tr>
        <tr>
			<td><label>Enter_Milage(in_km):</label></td>
			<td><input type="number" name="mg"></td>
        </tr>
        <tr>
			<td><label>Enter_Fule_Rate:</label></td>
			<td><input type="number" name="fr"></td>
        </tr>
			<td colspan="2" align="right">
				<input type="submit" value="CAL CPK">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php

$myVehicle = new Vehicle();
$myVehicle->cpk();

?>