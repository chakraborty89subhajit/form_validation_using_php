<?php

if(isset($_POST['submit'])){
	$form=false;
	$user_first_name=$_POST['user_first_name'];
	$user_last_name=$_POST['user_last_name'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	$user_confrim_password=$_POST['user_confrim_password'];
	$gender_dd=$_POST['gender_dd'];
	
    $languagecb=array();

	$matric_pass_checked="";
	$higher_secondary_pass_checked="";
	$graduate_checked="";
	$post_graduate_checked="";
	$phd_checked="";

	if(isset($_POST['eduradio'])){
	$eduradio=$_POST['eduradio'];
	if($eduradio=='matric_pass'){
		$matric_pass_checked="checked='checked'";
	}
	if($eduradio=='higher_secondary_pass'){
		$higher_secondary_pass_checked="checked='checked'";
	}
	if($eduradio=='graduate'){
		$graduate_checked="checked='checked'";
	}
	if($eduradio=='post_graduate'){
		$post_graduate_checked="checked='checked'";
	}
	if($eduradio=='phd'){
		$phd_checked="checked='checked'";
	}
}else{
	$eduradio='';
}

   

	if(isset($_POST['languagecb'])){
	$languagecb=$_POST['languagecb'];
	$languagecbop=implode(",", $languagecb);	
	}
	else{
		$languagecbop='';
	}

	//echo"<pre>";
	//print_r($_POST);
	//echo $languagecbop;



	if(empty($user_first_name) || empty($user_last_name) || empty($user_email) || empty($user_password) || empty($user_confrim_password) || (empty($gender_dd)) || (empty($eduradio)) || (empty($languagecb))){
		//echo $gender_dd."<br>";
		//echo $eduradio."<br>";

		//echo $languagecb."<br>";

		echo"pls. provide complete data<br>";
		$form=true;
	}
	//else ((!empty($user_first_name)) || (!empty($user_last_name)) || (!empty($user_email)) || (!empty($user_password)) || (!empty($user_confrim_password)) || (!empty($gender_dd)) || (!empty($eduradio)) || (!empty($laguagecb))) {
	else{
			echo"go to home page";
	}

}else{
	echo"no data is coming<br>";
	//$form=true;
	
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
				<?php
				$gender_array=array('male','female','custom','prefare_not_to_say');
				?>
				<td>
					<select name = "gender_dd" id="user_gender" value="<?php echo $gender_dd;?>"/>
					<option value="select_your_gender">select your gender</option>
					<?php 

                    foreach($gender_array as $gender_list){
                    	if($gender_dd==$gender_list){
                    		echo"<option selected>".$gender_list."</option>";
                    	}else{
                    		echo"<option>".$gender_list."</option>";
                    	}
                    }
					?>
				</td>
			</tr>

               
                <tr>
				<td>
					education:
				</td>
				<td>
					
					<input  type="radio" name ="eduradio" value ="matric_pass"
                    <?php echo $matric_pass_checked;?>>
					matric pass <br>
					<input type="radio" name ="eduradio" value ="higher_secondary_pass"
                     <?php echo $higher_secondary_pass_checked;?>>
					higher secondary pass<br>
					<input  type="radio" name ="eduradio" value ="graduate"
                    <?php echo $graduate_checked;?>>
					graduate<br>
					<input  type="radio" name ="eduradio" value ="post_graduate"
                    <?php echo $post_graduate_checked;?>>
					post graduate<br>
					<input  type="radio" name ="eduradio" value ="phd"
                    <?php echo $phd_checked;?>>
					phd<br>
				</td>
			</tr>

              
                <tr>
				<td>
					language known:
				</td>
				<td>
				<?php $languagearr=array('c','c++','python','java','php','other');
                  
                  foreach($languagearr as $pl){
                      if(in_array($pl, $languagecb)){
                  	 echo'<input  type="checkbox" name ="languagecb[]" value="'.$pl.'" checked="checked">'.$pl.'<br>';
                  }else{
                    echo'<input  type="checkbox" name ="languagecb[]" value="'.$pl.'">'.$pl.'<br>';
}
}
				?>
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