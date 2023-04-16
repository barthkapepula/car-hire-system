<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

        $firstname    = stripslashes($_REQUEST['firstname']);
        $firstname   = mysqli_real_escape_string($con, $firstname);

        $surname    = stripslashes($_REQUEST['surname']);
        $surname    = mysqli_real_escape_string($con, $surname);


        $DOB    = stripslashes($_REQUEST['DOB']);
        $DOB    = mysqli_real_escape_string($con, $DOB);

        $sex    = stripslashes($_REQUEST['sex']);
        $sex    = mysqli_real_escape_string($con, $sex);

        $nrc    = stripslashes($_REQUEST['nrc']);
        $nrc    = mysqli_real_escape_string($con, $nrc);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone   = mysqli_real_escape_string($con, $phone);

        $email    = stripslashes($_REQUEST['email']);
        $email	    = mysqli_real_escape_string($con, $email);

        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);

        $province    = stripslashes($_REQUEST['province']);
        $province    = mysqli_real_escape_string($con, $province);

        $country    = stripslashes($_REQUEST['country']);
        $country    = mysqli_real_escape_string($con, $country);

        $category    = stripslashes($_REQUEST['category']);
        $category    = mysqli_real_escape_string($con, $category);

        $password   = stripslashes($_REQUEST['password']);
        $password    = mysqli_real_escape_string($con, $password);

        $nbank    = stripslashes($_REQUEST['nbank']);
        $nbank    = mysqli_real_escape_string($con, $nbank);

        $bankacc    = stripslashes($_REQUEST['bankacc']);
        $bankacc    = mysqli_real_escape_string($con, $bankacc);

        $branch    = stripslashes($_REQUEST['branch']);
        $branch   = mysqli_real_escape_string($con, $branch);

        $pnumber    = stripslashes($_REQUEST['pnumber']);
        $pnumber    = mysqli_real_escape_string($con, $pnumber);

        $b_email    = stripslashes($_REQUEST['b_email']);
        $b_email    = mysqli_real_escape_string($con, $b_email);
       

        $query    = "INSERT into `bank` (nbank,bankacc,branch,pnumber,b_email)
        VALUES ('$nbank','$bankacc','$branch','$pnumber','$b_email')";

         $query2   = "INSERT into `users` (username,firstname,surname,DOB,sex,nrc,phone,email,password )
         VALUES ('$username','$firstname','$surname','$DOB','$sex',$nrc,$phone,'$email','$password')";

$result   = mysqli_query($con, $query);
$result   = mysqli_query($con, $query2);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="firstname" placeholder="firstname" required />
        <input type="text" class="login-input" name="surname" placeholder="surname" required />
        <input type="text" class="login-input" name="DOB" placeholder="Date Of Birth" required />
        <input type="text" class="login-input" name="sex" placeholder="Sex" required />
        <input type="text" class="login-input" name="nrc" placeholder="nrc" required />
        <input type="text" class="login-input" name="phone" placeholder="phone" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="address" placeholder="Physical Address" required />
        <input type="text" class="login-input" name="province" placeholder="Province" required />
        <input type="text" class="login-input" name="country" placeholder="Country" required />
        <input type="text" class="login-input" name="category" placeholder="Specify Category" required /> <br>
        <input type="password" name="password" value="FakePSW" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

        <h>Bank details</h><br>

        <input type="text" class="login-input" name="nbank" placeholder="Bank name" required />
        <input type="text" class="login-input" name="bankacc" placeholder="Bank Account" required />  
        <input type="text" class="login-input" name="branch" placeholder="Branch" required />
        <input type="text" class="login-input" name="pnumber" placeholder="Bank Phone number" required />
        <input type="text" class="login-input" name="b_email" placeholder="Bank Email address" required />

        
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

      </form>

<style>

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body,p {
  font-family: 'Nunito', sans-serif;
  color: #384047;
  background-color: antiquewhite;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1,P {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
  </style>
  <script>

function checkForm()
{
  var valid = true;
  if (document.mainForm.user_name.value == "") {
    alert("Please type in your first name!");
    document.getElementById("firstNameError").
      style.display = "inline";
    valid = false;
  }
  return valid;
}

<form name="mainForm" onsubmit="return checkForm()">
  <input type="text" name="firstName" />
  …
</form>

<script>
	$(document).ready(function(){
		
	$('#manage-signup').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('#pass_match').attr('data-status') != 1){
			if($("[name='password']").val() !=''){
				$('[name="password"],[name="cpass"]').addClass("border-danger")
				end_load()
				return false;
			}
		}
		$.ajax({
			url:'admin/ajax.php?action=signup',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=home')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
		$('[name="password"],[name="cpass"]').keyup(function(){
			var pass = $('[name="password"]').val()
			var cpass = $('[name="cpass"]').val()
			if(cpass == '' ||pass == ''){
				$('#pass_match').attr('data-status','')
			}else{
				if(cpass == pass){
					$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
				}else{
					$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
				}
			}
		})
	})

</script>

</body>
</html>
