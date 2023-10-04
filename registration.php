<?php

if(isset($_POST['submit'])){
	$form=false;
	$user_first_name=$_POST['user_first_name'];
	$user_last_name=$_POST['user_last_name'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	$user_confrim_password=$_POST['user_confrim_password'];
	$gender_dd=$_POST['gender_dd'];
	
	if(isset($_POST['eduradio'])){
	$eduradio=$_POST['eduradio'];
}else{
	$eduradio='';
}
	if(isset($_POST['languagecb'])){
	$languagecb=$_POST['languagecb'];
	$languagecb=implode(",", $languagecb);	
	}
	else{
		$languagecb='';
	}

	//echo"<pre>";
	//print_r($_POST);
	//echo $languagecb;



	if(empty($user_first_name) || empty($user_last_name) || empty($user_email) || empty($user_password) || empty($user_confrim_password) || (empty($gender_dd)) || (empty($eduradio)) || (empty($laguagecb))){
		echo $gender_dd."<br>";
		//echo $eduradio."<br>";

		//echo $languagecb."<br>";

		echo"pls. provide complete data<br>";
		$form=true;
	}

}else{
	echo"no data is coming<br>";
	
}
if ($form){
?>
<div class="container">
	<table border="1">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<tr>
				<td>
					first name:
				</td>
				<td>
					<input type = "text" name="user_first_name" value="<?php echo $user_first_name;?>" />
				</td>
			</tr>


               <tr>
				<td>
					last name:
				</td>
				<td>
					<input type = "text" name="user_last_name" value="<?php echo $user_last_name;?>"/>
				</td>
			</tr>
             

			<tr>
				<td>
					email:
				</td>
				<td>
					<input type = "text" name="user_email" value="<?php echo $user_email;?>"/>
				</td>
			</tr>

             <tr>
				<td>
					password:
				</td>
				<td>
					<input type = "password" name="user_password" value="<?php echo $user_password;?>";/>
				</td>
			</tr>
            
             <tr>
				<td>
					confrim password:
				</td>
				<td>
					<input type = "password" name="user_confrim_password" value="<?php echo $user_confrim_password;?>"/>
				</td>
			</tr>



              <tr>
				<td>
					gender:
				</td>
				<td>
					<select name = "gender_dd" id="user_gender" value="<?php echo $gender_dd;?>"/>
					<option value="select_your_gender">select your gender</option>
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="custom">custom</option>
					<option value="prefare_not_to_say">prefare not to say</option>
				</td>
			</tr>

               
                <tr>
				<td>
					education:
				</td>
				<td>
					
					<input  type="radio" name ="eduradio" value ="matric pass">matric pass<br>
					<input type="radio" name ="eduradio" value ="higher secondary pass">higher secondary pass<br>
					<input  type="radio" name ="eduradio" value ="graduate">graduate<br>
					<input  type="radio" name ="eduradio" value ="post graduate">post graduate<br>
					<input  type="radio" name ="eduradio" value ="phd">phd<br>
				</td>
			</tr>

              
                <tr>
				<td>
					language known:
				</td>
				<td>
					
					<input  type="checkbox" name ="languagecb[]" value="c">c<br>
					<input type="checkbox" name ="languagecb[]" value="c++">c++<br>
					<input  type="checkbox" name ="languagecb[]" value="java">java<br>
					<input  type="checkbox" name ="languagecb[]" value="python">python<br>
					<input  type="checkbox" name ="languagecb[]" value="php">php<br>
					<input  type="checkbox" name ="languagecb[]" value="other">other<br>
				</td>
			</tr> 
          <tr>
          	<td><input type="submit" value="submit" name="submit"></td>
          </tr>



		</form>
	</table>
</div>
<?php
}
?>