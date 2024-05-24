<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Eureka Times</title>
  <link rel="icon" type="image/x-icon" href="/assets/logoe.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="./Style.css" />

</head>

<body>
  <!--Step1 : Header Part-->
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i>Eureka Times</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#why">THEME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#job">JOBS</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#course" class="nav-link">COURSES</a>
                <div class="dropdown-content">
                  <a href="#trend">TRENDING</a>
                  <a href="#others">OTHERS</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php" target="_blank">SIGN UP</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>CONNECTED LEARNING FOR A CONNECTED WORLD</h6>
          <h1>CONNECTING LEARNERS</h1>
          <p>
            with innovative technology solutions and Teaching for a brighter future at your Fingertips.
          </p>
          <a href="register.php" target="_blank"><button class="btn btn-light px-5 py-2 primary-btn">
            REGISTER NOW
          </button></a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="../assets/pngimg.com - robot_PNG79.png" alt="robo" />
        </div>
      </div>
    </div>
  </header>

  <!--Step2 : Main Part-->
  <main>
    <section class="section-1">
      
      <div class="container text-center">
        <h1 id="why">Main purpose of This Website</h1><br><br>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="../assets/pexels-junior-teixeira-2047910.jpg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="">
              <h4>Learn as a Junior, Teach as a Senior and Earn like professional</h4>
              <p class="pt-4">
                Our Main intention is to develop a Money cycle where a Low skilled Student can be added in our Community as a "JUNIOR" Tag 
                and Then he can follow various "SENIORS" through our Platform. If He likes the Profile of that Senior,
                Then he can pay the mentioned budget friendly Amount to that senior and can Learn that skill in the guidence of that Senior.
              </p>
              <p>
                If the "SENIOR" Reaches a High level Experience and then according to his interest he can also continous his Journey as a "PROFESSIONAL".
                Since we have different Kinds of Badges and Star points. Your Teaching skill as a SENIOR, Learning Skills as a JUNIOR and 
                also Experience levels as a PROFESSIONAL can be easily exposed in your Resume.
              </p>
              <!--<p>
                Coming to that Money Cycle, As a beginner you can join as a JUNIOR and then You pay to a SENIOR and gains some knowledge 
                and then after Performing so projects and Works.Then you get certified as a SENIOR in that perticular course,
                After that to continue your journey as a SENIOR, you need to Prepare your own content and Stuff to Teach your Juniors.
                If you feel like you don't need money and you need to explore new courses, You can also continue your Courses.
                If you become SENIOR.Then You can get paid by Juniors and According to your experience you will become PROFESSIONAL also.
              </p>-->
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <div class="container text-center" style="max-width: 600px;">
        
        <h1 id="job">Searching for Job or Intership...???</h1><br>
        <p>Upload Your resume Here...If We found any Job or intership Chances according to your Interest, <br>Then we will Notify you.</p><br><br>
        <!--<form method="post" enctype="multipart/form-data" action="upload_photo.php">
          <label class="form-label" for="custompic">Upload your Photo Here [In PNG, JPEG and JPG Formats Only]</label><br>
          <input type="file" class="form-control" id="custompic" name="fileupload"/><br>
          <button type="submit" class="btn btn-primary" name="Upload">Submit</button>
      </form>
      
      <br><br>-->
      
      <form method="post" enctype="multipart/form-data" action="file_handling.php">
        <label class="form-label" for="customFile">Upload your Resume Here [In PDF Format Only]</label><br>
        <input type="file" class="form-control" name="fileupload" id="customFile"/><br>
        <button type="submit" class="btn btn-primary" name="Upload">Submit</button>
      </form>
      
        
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <!--<div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eum?
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>2345</h1>
            <p>Happy Client</p>
          </div>
          <div class="rect">
            <h1>6784</h1>
            <p>Cups Coffee</p>
          </div>
          <div class="rect">
            <h1>1056</h1>
            <p>Tickets Submitted</p>
          </div>
          <div class="rect">
            <h1>9152</h1>
            <p>Total Projects</p>
          </div>
        </div>
      </div>-->


      <div class="purchase text-center">
        <h1 id="course">Choose Whatever Course You Want to Learn</h1><br>
        <p id="trend">
          Here you can find dfferent corses and complete by Registering.
        </p><br>

        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h3 class="card-title">Full Stack Development</h3>
                </div>
                <p class="card-text">
                  Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
                </p>
                <div class="pricing">
                  <h2>₹400/Month</h2>
                  <a href="../Courses/Full_Stack_Development_.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h3 class="card-title">Data Science,ML and AI</h3>
                </div>
                <p class="card-text">
                  Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
                </p>
                <div class="pricing">
                  <h2>₹350/Month</h2>
                  <a href="../Courses/Datascience__Data_Analytics.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h3 class="card-title">Robotics Foundation</h3>
                </div>
                <p class="card-text">
                  Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
                </p>
                <div class="pricing">
                  <h2>₹300/Month</h2>
                  <a href="../Courses/Robotics_Foundation.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center"> 
      <p id="others">
        Here are some Trending programming Languages.
      </p>
      </div>
      <div class="purchase text-center">
      <div class="cards">
        <div class="d-flex flex-row justify-content-center flex-wrap">
          <div class="card">
            <div class="card-body">
              <div class="title">
                <h3 class="card-title">Java programming - Oops</h3>
              </div>
              <p class="card-text">
                Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
              </p>
              <div class="pricing">
                <h2>₹250/Month</h2>
                <a href="../Courses/Core_Java.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="title">
                <h3 class="card-title">Basics of python</h3>
              </div>
              <p class="card-text">
                Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
              </p>
              <div class="pricing">
                <h2>₹150/Month</h2>
                <a href="../Courses/Python_course.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="title">
                <h3 class="card-title">Ethical_hacking</h3>
              </div>
              <p class="card-text">
                Choose your Senior and Start your Journey <br>with New Technologies <br> All the Best.
              </p>
              <div class="pricing">
                <h2>₹250/Month</h2>
                <a href="../Courses/Cybersecurity__Ethical_Hacking.pdf" class="btn btn-dark px-5 py-2 primary-btn mb-5">View Course</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <section class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Download Our App for all Platform</h1>
          <p>
            You can Download our App from Playstore and also you can access our website through internet Browsers also.
          </p>
        </div>
      </div>
      <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">Desktop</h3>
                <p class="p-0 m-0">On website</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">On Mobile</h3>
                <p class="p-0 m-0">On Play Store</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">What our Comrades's Say about us</h1>
        <p class="text-secondary">Here are some of our Best Reviews by Our Comrades</p>
      </div>
      <div class="team row justify-content-center">
        <div class="col-md-4 col-8 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="../assets/kuuu.jpeg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Venky</h3>
                  <p class="card-text">
                    Impressed by the elegant design and user-friendly interface of your website. The color scheme and responsiveness make for a seamless experience. Great job!
                  </p>
                  <button class="btn btn-primary"><a href="#" class="text-secondary text-light text-decoration-none">Go somewhere</a></button>
                  <p class="text-black-50">CEO at Infosys</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-8">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                      <div class="card mr- d-inline-block shadow">
                          <div class="card-img-top">
                              <img src="../assets/juuu.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                          </div>
                          <div class="card-body">
                              <h3 class="card-title">Arjun das</h3>
                              <p class="card-text">
                                Your website showcases excellent design with a seamless user experience. The aesthetic balance and functionality reflect a well-crafted digital platform. Commendable work!
                              </p>
                              <button  class="btn btn-primary"><a href="#" class="text-secondary text-light text-decoration-none">Go somewhere</a></button>
                              <p class="text-black-50">CEO at HCL</p>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="card d-inline-block mr-2 shadow">
                          <div class="card-img-top">
                              <img src="../assets/juuu.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                          </div>
                          <div class="card-body">
                              <h3 class="card-title">Vijay Kumar</h3>
                              <p class="card-text">
                                The course offerings on your website are diverse and comprehensive. The organized layout and detailed information empower users to choose and learn effectively. Impressive range of courses!
                              </p>
                              <button  class="btn btn-primary text-white"><a href="#" class="text-secondary text-light text-decoration-none">Go somewhere</a></button>
                              <p class="text-black-50">CEO at Tech Mahindra</p>
                          </div>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
        </div>
      </div>
    </section>
  </main>
  <!--FOOTER-->
  <footer class="justify-content-center">
    <div class="container-fluid conetn p-0">
      <div class="row text-left">
        <div class="col-sm-5 col-md-5">
          <h4 class="text-light"  id="about">About us</h4>
          <p class="text-muted">Welcome to Eureka Times!

            At Eureka Times, we are passionate about transforming education through technology. Our mission is to make learning accessible, engaging, and effective for students of all ages and backgrounds. We believe that education is a lifelong journey, 
            and our platform is designed to empower learners, educators, and parents to achieve their educational goals.</p>
          <p class="pt-4 text-muted">Copyright ©2019 All rights reserved | This template is made with by
            <span> RGUKT Student</span>
          </p>
        </div>

        <!--<div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>-->
        <div class="col-5"></div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <a href="javascript:void(0);" onclick="openfacebook()"><i class="fab fa-facebook-f p-1"></i></a>
            <a href="javascript:void(1);" ondblclick="openinstagram()"><i class="fab fa-instagram p-1"></i></a>
            <a href="javascript:void(2);" onmouseover="opentwitter()"><i class="fab fa-twitter p-1"></i></a>
            <a href="javascript:void(3);" onmouseout="openyoutube()"><i class="fab fa-youtube p-1"></i></a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <script>
    function openfacebook()
    {
      window.location.href = "https://www.facebook.com";
    }
    function openinstagram()
    {
      window.location.href = "https://www.instagram.com";
    }
    function opentwitter()
    {
      window.location.href = "https://twitter.com";
    }
    function openyoutube()
    {
      window.location.href = "https://www.youtube.com";
    }

  </script>
</body>
</html>