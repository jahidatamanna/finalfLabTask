<!DOCTYPE HTML>
<html>
<head>
<style>
	.error {color: red;}
</style>
</head>
<body>
<fieldset><br>
<?php 
include 'Head.php';
require '../Controller/RegistrationValidation.php';
?><br>

<form method="post">
<fieldset>

	<legend>REGISTRATION</legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" value="<?php echo $name;?>">
		<span class="error"><?php echo $nameErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error"><?php echo $emailErr; ?></span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" value="<?php echo $uname;?>">
		<span class="error"><?phpecho $unameErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" value="<?php echo $password;?>">
		<span class="error"><?php echo $passwordErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" value="<?php echo $cpassword;?>">
		<span class="error"><?php echo $cpasswordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>GENDER</legend>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error"><?php echo $genderErr; ?></span>
	</fieldset><br>

	<fieldset>
	    <legend>Phone Number</legend>
		<input type="text" name="phoneNumber" value="<?php echo $phoneNumber;?>">
		<span class="error"><?php echo $phoneNumberErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" value="<?php echo $dob;?>">
		<span class="error"><?php echo $dobErr; ?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>ADDRESS</legend>
		<textarea name="address" rows="3" cols="30" value="<?php echo $address;?>"></textarea>
		<span class="error"><?php echo $addressErr;?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>POSTAL CODE</legend>
		<input type="text" name="postalCode" value="<?php echo $postalCode;?>">
		<span class="error"><?php echo $postalCodeErr; ?></span>
	</fieldset><br>
	
	
	<fieldset>
	    <legend>DIVISION</legend>
		<select id="division" name="division">
		<option value="sad" selected="" disabled="">Select a division</option>
		<option value="Barisal">Barisal</option>
		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Mymensingh">Mymensingh</option>
		<option value="Rajshahi">Rajshahi</option>
		<option value="Rangpur">Rangpur</option>
		<option value="Sylhet">Sylhet</option>
		<option value="Jessore ">Jessore </option>
		<option value="Dinajpur">Dinajpur</option>
		<option value="Comilla">Comilla</option>
		<option value="Faridpur">Faridpur</option>
		<option value="Bogra">Bogra</option>
		<option value="Pabna ">Pabna </option>
		<option value="Rangamati">Rangamati</option>
		<option value="Kushtia">Kushtia</option>
		<option value="sylhet">Noakhali</option>
		<option value="Tangail ">Tangail </option>
		<option value="Panchagarh">Panchagarh</option>
		<option value="Bhola">Bhola</option>
		<option value="Bandarban">Bandarban</option>
		<option value="Chandpur">Chandpur</option>
		<option value="Habiganj">Habiganj </option>
		<option value="Lakshmipur">Lakshmipur</option>
		<option value="Barguna">Barguna</option>
		<option value="Jhalokati">Jhalokati</option>
		<option value="Pirojpur">Pirojpur</option>
		<option value="Patuakhali">Patuakhali</option>
		<option value="Jhenaidah">Jhenaidah</option>
		<option value="Narail ">Narail </option>
		<option value="Magura ">Magura </option>
		<option value="Lalmonirhat">Lalmonirhat</option>
		<option value="Kurigram">Kurigram</option>
		<option value="Nilphamari">Nilphamari</option>
		<option value="Gaibandha">Gaibandha</option>
		<option value="Thakurgaon">Thakurgaon</option>
		<option value="Satkhira">Satkhira</option>
		<option value="Bagerhat ">Bagerhat </option>
		<option value="Chuadanga">Chuadanga</option>
		<option value="Meherpur">Meherpur</option>
		<option value="Sirajganj ">Sirajganj </option>
		<option value="Joypurhat">Joypurhat</option>
		<option value="Natore">Natore</option>
		<option value="Naogaon">Naogaon</option>
		<option value="Nawabganj">Nawabganj</option>
		<option value="Khagrachhari">Khagrachhari</option>
		<option value="Feni ">Feni </option>
		<option value="Brahmanbaria">Brahmanbaria</option>
		<option value="Sunamganj ">Sunamganj</option>
		<option value="Cox's Bazar">Cox's Bazar</option>
		<option value="Moulvibazar">Moulvibazar</option>
		<option value="Gopalganj">Gopalganj</option>
		<option value="Shariatpur">Shariatpur</option>
		<option value="Madaripur">Madaripur</option>
		<option value="Rajbari  ">Rajbari </option>
		<option value="Gazipur">Gazipur</option>
		<option value="Kishoreganj ">Kishoreganj</option>
		<option value="Jamalpur">Jamalpur</option>
		<option value="Sherpu">Sherpu</option>
		<option value="Netrakona">Netrakona</option>
		<option value="Munshiganj">Munshiganj</option>
		<option value="Narsingdi">Narsingdi</option>
		<option value="Narayanganj ">Narayanganj </option>
		<option value="Manikganj">Manikganj</option>
		</select>
		<span class="error"><?php echo $divisionErr; ?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>STATE</legend>
		<select id="state" name="state">
		<option value="sas" selected="" disabled="">Select a state</option>
		<option value="Barisal">Barisal</option>
		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Mymensingh">Mymensingh</option>
		<option value="Rajshahi">Rajshahi</option>
		<option value="Rangpur">Rangpur</option>
		<option value="Sylhet">Sylhet</option>
		</select>
		<span class="error"><?php echo $stateErr;?></span>
	</fieldset><br>	

	<span class="error"><?php echo $error;?></span><br>

	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset">

</fieldset><br>
</form>

<?php include 'Foot.php';?><br>

</fieldset>
</body>
</html>