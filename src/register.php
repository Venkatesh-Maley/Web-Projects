<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Your Course</title>
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
        <h1 class="text-center">Registation form for your Course</h1>
        <form class="px-3"  action="registerdb.php" method="POST">
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
                    <label for="college">Your College Name:</label>
                    <input type="text" class="form-control form-control-sm" id="college" placeholder="Enter Your College Name" name="college" required>
                </div>
                <!--<div class="form-group">
                    <label for="graduation_year">Graduation Year:</label>
                    <select class="form-control" name="year" id="graduation_year" style="width:160px">
                        <option value="no_year">No Year Selected</option>
                        <option value="year1">2010</option>
                        <option value="year2">2011</option>
                        <option value="year3">2012</option>
                        <option value="year4">2013</option>
                        <option value="year5">2014</option>
                        <option value="year6">2015</option>
                        <option value="year7">2016</option>
                        <option value="year8">2017</option>
                        <option value="year9">2018</option>
                        <option value="year10">2019</option>
                        <option value="year11">2020</option>
                        <option value="year12">2021</option>
                        <option value="year13">2022</option>
                        <option value="year14">2023</option>
                        <option value="year15">2024</option>
                        <option value="year16">2025</option>
                        <option value="year17">2026</option>
                        <option value="year18">2027</option>
                        <option value="year19">2028</option>
                        <option value="year20">2029</option>
                        <option value="year21">2030</option>
                    </select>
                </div>   -->  
                <div class="form-group">
                    <label for="course">Select Your Course:</label>
                    <select class="form-control" name="course" id="course" style="width:160px">
                        <option value="No Course Selected" selected>No Course Selected</option>
                        <option value="Data Science">Data Science with python</option>
                        <option value="Python">Python Full Course</option>
                        <option value="Java Oops">Java programming Oops</option>
                        <option value="Full Stack Development">Full stack Mern Development</option>
                        <option value="C Programming">C programming</option>
                        <option value="Android App Developer">Andriod Development</option>
                        <option value="C++ Game Developer">C++ Game developer</option>
                        <option value="AI and ML">AI and Machine Learning</option>
                        <option value="MySQL">MySQL Database</option>
                        <option value="MangoDB">MangoDB</option>

                    </select>
                </div>                
                
                <button name="submit" type="submit" class="btn btn-primary btn-block btn-sm">REGISTER NOW </button>

                <a href="../src/Index.html" class="btn btn-secondary btn-block btn-sm">Cancel</a>
                <!--<div class="container" style="max-width: 300px;">
                    <a href="" class="d-block text-center mt-3">Already have a account..?</a>
                    <a href="../src/login.html" class="btn btn-secondary btn-block btn-sm">Login to my account</a>
                </div>-->
               
            </div>
        </form>
    </div>
</body>
</html>

<script>
    function validateForm() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var email = document.getElementById("email").value;
        var college = document.getElementById("college").value;

        // Email Validation
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!(emailPattern.test(email)) == true) {
            alert("Please enter a valid email address.");
            document.getElementById("email").focus();
            return false;
        }
        // All validations passed, return true to submit the form
        return true;
    }
</script>