<?php
//Write a program to calculate factorial value by using recursive function. The value must be entered by user
?>



<?php
function cal_avg(){
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['line1'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
}
	
?>
<!DOCTYPE html>
<html>
<body>
<h1>Factorial Calculation using Recursive Functions</h1>
</body>
</html>

<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td><label>Enter_Number:</label></td>
			<td><input type="number" name="line1"></td>
        </tr>
			<td colspan="2" align="right">
				<input type="submit" value="CAL FACTORIAL">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php
	cal_avg();
?>
