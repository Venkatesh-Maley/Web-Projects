<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIGN UP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
Body {
    font-family: Calibri, Helvetica, sans-serif;
    color: rgb(255, 255, 255);
    background-image: linear-gradient(rgba(0, 0, 0, 0.404),rgba(0, 0, 0, 0.384)),url(../assets/1554105.jpg);
    background-size:cover;
    
  }
</style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Signup Page</h1>
        <form class="px-3" onsubmit="return validateForm()" action="signupdb.php" method="POST">
            <div class="container" style="max-width: 500px;">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control form-control-sm" id="fname" placeholder="Enter Your First Name" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control form-control-sm" id="lname" placeholder="Enter Your Last Name" name="lname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="text" class="form-control form-control-sm" id="email" placeholder="Enter Your Email ID" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter your Password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="cpassword"> Confirm Password:</label>
                    <input type="password" class="form-control form-control-sm" id="cpassword" placeholder="Confirm your Password" name="cpassword" required>
                </div>
                      
                <button name="submit" type="submit" class="btn btn-primary btn-block btn-sm">REGISTER NOW </button>

                <a href="../src/index.php" class="btn btn-secondary btn-block btn-sm">Cancel</a>
                
                <div class="container" style="max-width: 300px;">
                    <a href="../src/login.php" class="d-block text-center mt-3">Already have a account..?</a>
                    <a href="../src/login.php" class="btn btn-secondary btn-block btn-sm">Login to my account</a>
                </div><br><br>
               
            </div>
        </form>
    </div>
    <script>
        function validateForm() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var cpassword = document.getElementById("cpassword").value;
            
            if (fname === "" || lname === "" || email === "" || password === "" || cpassword === "") {
                alert("All fields must be filled out");
                return false;
            }

            if (password !== cpassword) {
                alert("Passwords do not match");
                return false;
            }

            return true; // Submit the form if validation passes
        }
    </script>
</body>
</html>

