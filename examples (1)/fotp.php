<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family:Roboto, sans-serif;
/*
  background-repeat:  no-repeat;
    background-size: fixed;
*/

    background-image: url('https://wallpaperaccess.com/full/1728957.jpg');
    background-image: center;
    background-repeat: no-repeat;

  position:fixed;
  top: 50%;
  left: 35%;
  overflow: auto;
  height: 50px;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  border-radius: 10px;
  margin-top: -235px;
  opacity: 0.95;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1; 
  border-radius: 15px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:#7AD7F0 ;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4BA4E8;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border-left: 6px solid skyblue;
  cursor: pointer;
  width: 50%;
  margin-left: 120px;
  border-radius: 10px;
}

.registerbtn:hover {
  opacity: 0.5;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  border-radius: 10px;
}

.reset-password {
  width: 35vw;
  border-radius: 10px;
  padding: 0px;
}

</style>
</head>
<body>
    <div class="container">
            <form action=".php" class="reset-password">
                <div class="row">
            <h1 style="margin-left: 35%">Register</h1>
                <span>Please fill in this form to create a new password.</span>
                <hr>
            <label for="OTP"><b>OTP</b></label>
            <input type="Text" placeholder="Enter OTP"  required>
                    <button type="submit" class="registerbtn">Reset Passsword</button>
            </div>
            </form>
<!--
        <div class="col-md-6">
             <img src="https://aspc.jobtrack.com.au/docs/web/Articles/support/forgotpassword.png" >
        </div>
-->
    
    </div>
</body>
</html>
