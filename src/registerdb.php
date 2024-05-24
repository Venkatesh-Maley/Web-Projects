<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    
    background-image: linear-gradient(rgba(0, 0, 0, 0.404),rgba(0, 0, 0, 0.384)),url(../assets/1554105.jpg);
    background-size:cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .message-box {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  h1 {
    color: #4CAF50;
    font-size: 24px;
    margin-bottom: 15px;
  }

  p {
    color: #333;
    font-size: 18px;
  }

  .home-button {
    margin-top: 20px;
  }
</style>
</head>
<body>
<?php
    session_start();
    $server ="localhost";
    $username = "root";
    $password = "";
    $dbname = "wt";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    //if($conn){
    //    echo " Connected Successfully";
    //}

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    //$year = $_POST['year'];
    $course = $_POST['course'];

    $sql ="INSERT INTO `registerdata` (`fname`, `lname`, `email`, `college`, `course`) VALUES ('$fname', '$lname', '$email', '$college','$course');";
    $query = mysqli_query($conn,$sql);
    echo "<br>";
    //if($query){
    //    echo "Inserted Successfully";
    //}
    $_SESSION["name"] = $fname;

    // Assuming Registered successfully
    //$_SESSION['user_authenticated'] = true;

    // Redirect back to Congratulations page
    //header("Location: ../src/congrats.php");
   

?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="message-box">
        <div class="icon">
          <span class="fas fa-check-circle"></span>
        </div>
        <h1 class="mb-3">Congratulations! <?php echo $_SESSION["name"]?></h1>
        <p class="mb-4">You have successfully completed this course.</p>
        <a href="index.php" class="btn btn-primary home-button">Go to Home</a>
      </div>
    </div>
  </div>
</div>


</body>


</html>




