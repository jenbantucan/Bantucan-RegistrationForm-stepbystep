<!DOCTYPE HTML>

<html>

<head><center>
	<title>Registration</title>
	<h2>Student Registration Form</h2>
</center></head>
<body><center>
	
	<form method="POST" action = "register.php">
		<table border ="5" cellpadding = "15">
			<tr>
			<td>First Name</td>
			<td>Middle Name</td>					
			<td>Last Name</td>
			</tr>
			<tr>
			<td><input type='text' name='firstname' id = 'fname' size="20"></td>
			<td><input type='text' name= 'middlename' id = 'mname' size="20"></td>
			<td><input type='text' name='lastname' id = 'lname' size="20"></td>
			</tr>
			<tr>
			<td>Gender</td>
			<td><input type='radio' name= "gender" id= "male"> Male</td>&nbsp;
			<td><input type='radio' name= "gender" id= "female"> Female </td> 
			</tr>
			<tr><td colspan = "3">Birthday</td></tr>
			<tr>
			<td>Month <select name = "month"> <option value = "jan">January</option><option>February</option>
			<option>March</option><option>April</option>
			<optionu>May</option><option>June</option>
			<option>July</option><option>August</option>
			<option>September</option><option>October</option>
			<option>November</option><option>December</option>
			</select></td>

			<td>Day
				<select name = "day">
				<?php for ($i=1; $i>=31; $i++): ?>
					<option value="<?= $i; ?>"><?= $i ?></option>
				<? endfor;?>	
				</select>
			</td>

			<td>Year<select name = "year"><option>2015</option><option>2014</option>
			<option>2013</option><option>2012</option><option>2011</option><option>2010</option>
			<option>2009</option><option>2008</option><option>2007</option><option>2006</option>
			<option>2005</option><option>2004</option><option>2003</option><option>2002</option>
			<option>2001</option><option>2000</option><option>1999</option><option>1998</option>
			<option>1997</option><option>1996</option><option>1995</option><option>1994</option>
			<option>1993</option><option>1992</option><option>1991</option><option>1990</option>
			<option>1989</option><option>1988</option><option>1987</option><option>1986</option>
			<option>1985</option></select></td>			
			</tr>
			<tr><td>Program</td>
			<td colspan = "2"><select name = "program"><option>Bachelor of Arts in Broadcasting</option>
			<option>Bachelor of Science in Accountancy</option>
			<option>Bachelor of Science in Accounting Technology</option>
			<option>Bachelor of Science in Information Systems</option>
			<option>Bachelor of FScience in Social Works</option>
			<option>Associate in Computer Technology</option>
			<option>Mass Communication</option>
			<option>Nursing Assistant</option>
			<option>Office Management</option>
			<option>International Cookery</option>
			</td>
			</tr>

			<tr><td colspan = "3" >Student Type</td></tr>
			<tr><td colspan = "3">
			<input type='radio' name= "student_type" id= "full">Full-scholar <br>&nbsp;
			<input type='radio' name= "student_type" id= "partial">Partial-scholar <br>&nbsp;
			<input type='radio' name= "student_type" id= "payee">Payee <br> </td> </tr>

			
			<tr><td colspan = "3">Address</td></tr>
			<tr><td colspan = "3"><textarea name='address' id='address' rows='10' cols='100%'></textarea></td></tr>
	
			<tr><td colspan = "3"><button >Submit Registration </button></td></tr>
		</table>
	</form>

<center></body>

