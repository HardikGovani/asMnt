<?php
//Write a PHP function which ask the user number of tickets to be booked. 
//The function get the no. of booked tickets and create a table based on that which have exactly same rows 
//as number entered by user. The value for rows are booked ticket numbers. 
?>

<?php
function create_table(){
    $crtable = '';
	if ($_POST){
		$crtable .= '<table border="1">';
		for ($i = 0; $i < $_POST['line']; $i++) {
            $crtable .= '<tr>';
            $crtable .= '<td width="500">&nbsp;</td>';
		}
        $crtable .= '</table>';
        echo $crtable;
	}
}
	
?>
<!DOCTYPE html>
<html>
<body>
<h1>Book your ticket:</h1>
</body>
</html>

<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td><label>Number_of_Ticket:</label></td>
			<td><input type="text" name="line"></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Book">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php
	create_table();
?>