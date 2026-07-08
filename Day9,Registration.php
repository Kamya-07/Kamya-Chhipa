<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f2f2f2;
}

.container{
    width:450px;
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

h1{
    color:blue;
    text-align:center;
}

label{
    font-weight:bold;
}

input,select{
    width:100%;
    padding:8px;
    margin-top:5px;
    margin-bottom:15px;
}

.gender input{
    width:auto;
}

.hobbies input{
    width:auto;
}

button{
    width:100%;
    padding:10px;
    background:blue;
    color:white;
    border:none;
    border-radius:5px;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:darkblue;
}
</style>

</head>
<body>

<div class="container">

<h1>Registration Form</h1>

<p>Submit this form for online registration.</p>

<form id="registerForm">

<label>Name</label>
<input type="text" id="fullName" placeholder="Enter Full Name" required>

<label>Email</label>
<input type="email" id="email" placeholder="Enter Email" required>

<label>Phone Number</label>
<input type="tel" id="phone" placeholder="Enter Phone Number" required>

<label>Gender</label>

<div class="gender">
<input type="radio" name="gender" value="Male" checked> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Transgender"> Transgender
</div>

<br>

<label>Date of Birth</label>
<input type="date" id="dob" required>

<label>Password</label>
<input type="password" id="password" required>

<label>City</label>

<select id="city" required>
<option value="">Select City</option>
<option>Jaipur</option>
<option>Delhi</option>
<option>Mumbai</option>
<option>Bangalore</option>
</select>

<label>Hobbies</label>

<div class="hobbies">
<input type="checkbox" value="Reading"> Reading
<input type="checkbox" value="Music"> Music
<input type="checkbox" value="Sports"> Sports
</div>

<br>

<input type="checkbox" required>
I accept the Terms & Conditions

<br><br>

<button type="submit">Register</button>

</form>

</div>

<script>

document.getElementById("registerForm").addEventListener("submit", function(event){

event.preventDefault();

let gender = document.querySelector('input[name="gender"]:checked').value;

localStorage.setItem("name", document.getElementById("fullName").value);
localStorage.setItem("email", document.getElementById("email").value);
localStorage.setItem("phone", document.getElementById("phone").value);
localStorage.setItem("gender", gender);
localStorage.setItem("dob", document.getElementById("dob").value);
localStorage.setItem("city", document.getElementById("city").value);

window.location.href="success.html";

});

</script>

</body>
</html>
