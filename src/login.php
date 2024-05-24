<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN PAGE</title>
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
        <h1 class="text-center">LOGIN PAGE</h1>
        <form class="px-3" onsubmit="return validation()" action="logindb.php" method="POST">
            <div class="container" style="max-width: 500px;">
                <div class="form-group">
                    <label for="username">Email ID:</label>
                    <input type="text" class="form-control form-control-sm" id="email" placeholder="Enter your Email ID" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter your Password" name="password" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-block btn-sm">Login</button>
                <a href="#" class="d-block text-center mt-3">Forgot password?</a>

                <a href="../src/index.php" class="btn btn-secondary btn-block btn-sm">Cancel</a>

                <div class="container" style="max-width: 300px;">
                    <a href="../src/signup.php" class="d-block text-center mt-3">Create New account..?</a>
                    <a href="../src/signup.php" class="btn btn-secondary btn-block btn-sm">Create New Account</a>
                </div><br><br>
            </div>
        </form>
    </div>

    <script>
        let Email = document.getElementById('email');
        let password = document.getElementById('password');
        function validation()
        {
            //Email Validation
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(Email.value)) {
                alert("Please enter a valid email address.");
                Email.focus();
                return false;
            }        
            // Password validation
            let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
            if (!passwordPattern.test(password.value)) {
                alert("Password must contain at least one lowercase letter, one uppercase letter, one digit, and be 6-20 characters long.");
                password.focus();
                return false;
            }
            return true;
        }
    </script>




</body>
</html>
