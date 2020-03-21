<?php
    $host = "localhost";
        $dbuser = "root";
        $pass = "";
        $dbname = "data";

    if(isset($_POST['Submit'])){
        $conn = mysqli_connect ($host, $dbuser, $pass, $dbname);
        if(mysqli_select_db($conn,'data'))
        $name = $_POST['Name'];
        $address = $_POST['Address'];
        $country = $_POST['Country'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];
        $passion = $_POST['Passion'];
        $telephone = $_POST['Telephone'];

        $sql = " INSERT INTO data values('$name', '$address', '$country', '$gender', '$telephone', '$passion', '$email')";
        mysqli_query($conn,$sql);
        echo "Register sucseccfully";
        mysqli_close($conn);
    }
?>
<html>
<head>

 
<style>
body {
  background:url('img.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:100%;
}


.login-form {
  border:.5px solid #fff;

  background:hsl(187, 78%, 45%);
  border-radius:10px;
  box-shadow:0px 0px 10px #000;

}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#fff;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
padding-bottom:10%;
  margin:5% auto;
  text-align:center;
 
}
.login input[type="text"],
.login input[type="password"] ,
.login input[type="Email"],
.login input[type="tel"]{
  max-width:400px;
width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
}
.login-form input[type="submit"],
.login-form input[type="reset"] {
  height:30px;
  width:100px;
  background:#fff;
  border:2px solid #f2f2f2;
  border-radius:20px;
  box-shadow: silver;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}


  .login-button {
    margin-bottom:10px;
  }
</style></head>
   
<body>
<div class="login">
  <div class="login-header">
    <h1>Welcome To Workshop</h1>
  </div>
  <div class="login-form">

         
<form action="<?php $_PHP_SELF ?>" method="POST">  
     
    <h3>Name: </h3><input type="text" size=65 name="Name" placeholder="Enter your full name" required><br> 
    <fieldset>
      <legend>Gender</legend>
      <input type="radio" name="Gender" value="M" required default> Male
      <input type="radio" name="Gender" value="F"> Female
    </fieldset>       
    <h3>Address:</h3> <input type="text" size=65 name="Address" placeholder="Enter your street or city" required> <br>
    <h3>Country: </h3><br>
        <select type="text" value="" name="Country">
            <option value="I">India</option>
            <option value="S">Shrilanka</option>
            <option value="U">US</option>
            <option value="C">Canada</option>
            <option value="R">Russia</option>
        </select>
    <h3>E-mail Address:</h3> <input type="text" size=65 name="Email" placeholder="like x@c.com" required><br>
    <h3>Phone: </h3><input type="tel"  name="Telephone" placeholder="enter 10 digit number" required><br>  
           
    <p><h3>Select Your Passion </h3><br>
        <select type="text" value="" name="Passion">
            <option>Student</option>
            <option>Feculty member</option>
            <option>company / firm representatives</option>
            <option>professional</option>
            </select></p><br>
    
    <input type="submit" class="login-button" value="send" name="Submit">      
        <input type="reset" class="login-button" value="Reset" name="Reset">  
              
</form>
</div>
</div>
</body>
</html> 
