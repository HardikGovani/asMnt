<?php
//Write a PHP script which allows user to enter product code, 
//product name, product price and discount percentage. 
//The program must use a function to calculate discounted amount calculate net pay amount. 
?>


<?php
function netpay(){
	if ($_POST){
    echo "Product code: ".$_POST['line1'];
    echo "<br>";

    echo "Product Name: ".$_POST['line2'];
    echo "<br>";

    $net_cal = $_POST['line3']*(1 - $_POST['line4']/100);
    echo "Product NET AMOUNT PAY: ".$net_cal;

	}
}
	
?>
<!DOCTYPE html>
<html>
<body>
<h1>Product Discount Net PAY</h1>
</body>
</html>

<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td><label>Product Code:</label></td>
			<td><input type="text" name="line1"></td>
        </tr><tr>
            <td><label>Product Name:</label></td>
            <td><input type="text" name="line2"></td>
        </tr><tr>
            <td><label>Product Price:</label></td>
            <td><input type="number" name="line3"></td>
        </tr><tr>
            <td><label>Discount PER%:</label></td>
            <td><input type="number" name="line4"></td>
		</tr>
		</tr>
			<td colspan="2" align="right">
				<input type="submit" value="NET PAY">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php
	netpay();
?>

