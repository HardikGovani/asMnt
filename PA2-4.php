<?php
//Write a function which takes 5 number of input as array from user. 
//Then calculate total and average and display total and average of the 5 numbers.
//'[Hint: use & to return multiple values] 
?>


<?php
function cal_avg(){
	if ($_POST){
		$avg = (int)$_POST['line1'] + (int)$_POST['line2'] + (int)$_POST['line3'] + (int)$_POST['line4'] + (int)$_POST['line5'];
        echo "Entered Number = ";
        echo $_POST['line1'].",".$_POST['line2']. "," .$_POST['line3'] .",".$_POST['line4'] .",".$_POST['line5']; 
        echo "        SUM = ";
        echo $avg;
        echo "        AVERAGE = ";
        $avg = (int)$avg/5;
        echo $avg;    
        
	}
}
	
?>
<!DOCTYPE html>
<html>
<body>
<h1>Average Number</h1>
</body>
</html>

<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td><label>Enter_Val_1:</label></td>
			<td><input type="number" name="line1"></td>
        </tr><tr>
            <td><label>Enter_Val_2:</label></td>
            <td><input type="number" name="line2"></td>
        </tr><tr>
            <td><label>Enter_Val_3:</label></td>
            <td><input type="number" name="line3"></td>
        </tr><tr>
            <td><label>Enter_Val_4:</label></td>
            <td><input type="number" name="line4"></td>
        </tr><tr>
            <td><label>Enter_Val_5:</label></td>
            <td><input type="number" name="line5"></td>

		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="GET AVERAGE">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php
	cal_avg();
?>
