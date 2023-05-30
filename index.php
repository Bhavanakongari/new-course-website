


<!DOCTYPE html>
<html>
<head>
<title>webapp</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&display=swap" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>


<style>

.food-munch-logo {
    width: 80px;
    height: 70px;
}

#navItem1 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem2 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem3 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem4 {
    color: #323f4b;
    font-family: "Roboto";
}

.banner-section-bg-container {
    background-image: url("https://res.cloudinary.com/didazhqdb/image/upload/v1685452690/coding_imagessss_rcanpq.jpg");
    height: 100vh;
    background-size: cover;
}

.banner-heading {
    color: white;
    font-family: "Roboto";
    font-size: 45px;
    font-weight: 300;
}

.banner-caption {
    color: #f5f7fa;
    font-family: "Roboto";
    font-size: 24px;
    font-weight: 300;
}

.custom-button {
    color: white;
    background-color: #d0b200;
    width: 130px;
    height: 45px;
    border-width: 0;
    border-radius: 8px;
    margin-right: 10px;
}

.custom-outline-button {
    color: #d0b200;
    background-color: transparent;
    width: 130px;
    height: 45px;
    border-style: solid;
    border-width: 1px;
    border-color: #d0b200;
    border-radius: 8px;
}

.wcu-section {
    background-color: #f9fbfe;
}

.wcu-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 28px;
    font-weight: 700;
}

.wcu-section-description {
    color: #5a7184;
    font-family: "Roboto";
    font-size: 16px;
}

.wcu-card {
    text-align: center;
    background-color: white;
    border-style: solid;
    border-width: 1px;
    border-color: #e5eaf4;
    border-radius: 16px;
    height: 350px;
}

.wcu-card-image {
    width: 87px;
    height: 90px;
}

.wcu-card-title {
    color: #323f4b;
    font-family: "Roboto";
    font-size: 22px;
    font-weight: 500;
}

.wcu-card-description {
    color: #7b8794;
    font-family: "Roboto";
    font-size: 16px;
}

.offers {
    color: #323f4b;
    font-style: italic;
    font-weight: 600;
}

.explore-menu-section {
    background-color: white;
}

.menu-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 28px;
    font-weight: 700;
}

.menu-item-image {
    border-radius: 16px;
}

.menu-card-title {
    color: #323f4b;
    font-family: "Roboto";
    font-size: 18px;
    font-weight: 500;
    margin-top: 24px;
}

.menu-item-link {
    color: #d0b200;
    font-family: "Roboto";
    font-size: 14px;
    font-weight: 500;
}

.menu-item-card {
    border-radius: 16px;
    height: 300px;
}

.healthy-food-section {
    background-color: #f9fbfe;
}

.healthy-food-section-img {
    width: 270px;
}

.healthy-food-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 28px;
    font-weight: 700;
}

.healthy-food-section-description {
    color: #5a7184;
    font-family: "Roboto";
    font-size: 16px;
}

.custom-button {
    color: white;
    background-color: #d0b200;
    width: 130px;
    height: 45px;
    border-width: 0;
    border-radius: 8px;
    margin-right: 10px;
}

.delivery-and-payment-section {
    background-color: white;
}

.delivery-and-payment-section-img {
    width: 270px;
}

.delivery-and-payment-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 28px;
    font-weight: 700;
}

.delivery-and-payment-section-description {
    color: #5a7184;
    font-family: "Roboto";
    font-size: 16px;
}

.payment-card-img {
    width: 50px;
    height: 50px;
    margin-right: 28px;
}

.custom-button {
    color: white;
    background-color: #d0b200;
    width: 130px;
    height: 45px;
    border-width: 0;
    border-radius: 8px;
    margin-right: 10px;
}

.thanking-customers-section {
    background-color: #d0b2001a;
}

.thanking-customers-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 28px;
    font-weight: 700;
}

.thanking-customers-section-description {
    color: #5a7184;
    font-family: "Roboto";
    font-size: 16px;
}

.thanking-customers-section-img {
    width: 270px;
    margin-bottom: 20px;
}

.custom-button {
    color: white;
    background-color: #d0b200;
    width: 130px;
    height: 45px;
    border-width: 0;
    border-radius: 8px;
    margin-right: 10px;
}
.images-resize{
  height: 300px;
  width: 400px;
}

</style>
<style>
  /* bottom container */
.bottom-container {
  text-align: center;
  background-color: #d0b200;
  border-radius: 0px 0px 4px 4px;
  
  
}


</style>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#d0b200">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo3.jpeg" class="food-munch-logo" style="height:100px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    
                    <a class="nav-link" href="#" id="navItem2">About us</a>
                    <li class="nav-item dropdown">

      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Courses
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="computer science.php">Computer science</a>
        <a class="dropdown-item" href="electronics and comunications.php">Electronic and communication</a>
        <a class="dropdown-item" href="Mechanical or Architecture.php">Mechanical/Architecture</a>
        <a class="dropdown-item" href="Civil or Architecture.php">Civil/Architecture</a>
        
      </div>
    </li>

                    <a class="nav-link" href="signup.php" id="navItem3">Sign up</a>
                    <a class="nav-link" href="login.php" id="navItem4">Login</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="banner-section-bg-container d-flex justify-content-center flex-column">
        <div class="text-center">
            <h1 class="banner-heading mb-3">Make it work, make it right, make it fast</h1>
            
        </div>
    </div>

<!--2nd container-->
    <section>
<div class="text-center m-5 p-5">
  <h1>Our Past and Present College & Club Partners</h1>
  <img src="img/Our Past and Present College & Club Partners1.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners2.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners3.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners4.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners5.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners6.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners7.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners8.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners9.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners10.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners11.webp" style="width:200px">
  <img src="img/Our Past and Present College & Club Partners12.webp" style="width:200px">
</div>
</section>

<!-- why to choose us-->

    <div class="wcu-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="wcu-section-heading">Why Choose Us?</h1>
                    
                </div>
                <div class="col-12 col-md-4">
                    <div class="wcu-card p-3 mb-3">
                        
                        <h1 class="wcu-card-title mt-3">You don’t have to relocate or commute.</h1>
                        <p class="wcu-card-description">
                        With online learning, the classroom comes to you. No matter what type of credential you’re interested in achieving—degree, professional certificate, qualification—you can access some of the most renowned educational institutions or industry leaders online. What’s more: you’re not limited by borders. You can find programs across the country or even across the globe, without having to factor in relocation costs to study elsewhere. 
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                    <div class="wcu-card p-3 mb-3">
                        <h1 class="wcu-card-title mt-3">You can keep working while enrolled. </h1>
                        <p class="wcu-card-description">
                        A lot of students work part-time or full-time while attending college or completing other programs designed to enhance their education or skill set. But the rigid scheduling of many in-person programs can make it hard to balance your professional obligations with your educational ones. 
                        </p>
                    </div>
                </div>



                <div class="col-12 col-md-4">
                    <div class="wcu-card p-3 mb-3">
                        <h1 class="wcu-card-title mt-3">Best Offers</h1>
                        <p class="wcu-card-description">
                        Education can be expensive, but virtual learning can provide a number of ways for students to save. Not having to commute to campus can help you save on transportation costs.
Every year, the average student spends more than a thousand dollars on textbooks and course materials. Virtual coursework often takes advantage of virtual resources, which translates into less money spent on textbooks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- trending corses-->
    <div class="explore-menu-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="menu-section-heading">Trending courses</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="shadow menu-item-card p-3 mb-3">
                        <img src="img/Machine Learning with Python1.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Machine Learning with Python</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="shadow menu-item-card p-3 mb-3">
                        <img src="img/Full Stack Web Development1.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Full Stack Web Development</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/Data Structure & Algorithms.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Data Structure & Algorithms</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/Artificial Intelligence.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Artificial Intelligence</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/Cyber Security.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Cyber Security</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn more
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/Data Science.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Data Science</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/Embedded System.webp" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">Embedded System</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="img/internet of things course.jpeg" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">
Internet of Things</h1>
                        <a href="signup.php" class="menu-item-link">
                            Learn More
                            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <a  type="button" class="btn btn-warning" href="allcoursers.php">Show More</a>
        </div>
    </div>

<!--about us-->
    <div class="healthy-food-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="text-center">
                        <img src="https://res.cloudinary.com/didazhqdb/image/upload/v1685455163/anime_kmu1va.jpg" class="healthy-food-section-img images-resize" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="healthy-food-section-heading">
                    Top Featured Courses
                    </h1>
                    <p class="healthy-food-section-description">
                    Choose courses taught by real-world experts.
                    </p>
                    <h4>Date Science</h4>
                    <p>This course will help you learn how to use data and statistical models to make predictions, communicate your findings with a broad range of audiences.

</p>
<h4>Digital Marketing</h4>
<p>This course aims to set a solid foundation for the digital marketing skills required for successful campaigns in the digital world.</p>
                    <button class="btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>
    </div>

    

    <section class="m-5">
  <div class="py-5">
  <Div class="container-fluid">
<Div class="row m-5">
<div class="col-lg-6 col-md-6 col-sm-12">

<h1 style="font-size:30px">Official Certification Partners</h1>
<div>
<img src="img/Official Certification Partners2.webp" style="width:100px">
<img src="img/officialcertificationpartner1.webp" style="width:100px">
<img src="img/Official Certification Partners3.webp" style="width:100px">
<img src="img/Official Certification Partners4.webp" style="width:100px">
</div>
<div>
<img src="img/Official Certification Partners5.webp" style="width:100px">
<img src="img/Official Certification Partners 6.webp" style="width:100px">
<img src="img/Official Certification Partners 7.webp" style="width:100px">
<img src="img/Official Certification Partners 8.webp" style="width:100px">
</div>


</div>

<div class="col-lg-6 col-md-6 col-sm-12 paragraph ">

<h1 style="font-size:30px">Our Startups and Corporate Network</h1>
<div>
<img src="img/Our Startups and Corporate Network1.webp" class="m-2" style="width:100px">
<img src="img/Our Startups and Corporate Network2.webp" class="m-2" style="width:100px">
<img src="img/Our Startups and Corporate Network3.webp" class="m-2" style="width:100px">
</div>
<div>

<img src="img/Our Startups and Corporate Network4.webp" class="m-2" style="width:100px">
<img src="img/Our Startups and Corporate Network5.webp" class="m-2" style="width:100px">
<img src="img/Our Startups and Corporate Network6.webp" class="m-2" style="width:100px">

</div>
</div>
</Div>
</Div>
</div>
</section>





    <div class="thanking-customers-section pt-5 pb-5">
        <div class="container">
            <div class="row">
              
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center">
                  <h1>About Us</h1>
                We came into being as a comprehensive platform to offer customised cost-effective training to college students and fresh graduates by professionals in the industry. We have trained 15,000+ students and the learners truly rave at the value addition re-affirming the tagline "Learning Beyond Expectations".
                    
                    <div class="d-md-none">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/thanking-customers-section-img.png" class="thanking-customers-section-img" />
                    </div>
                    <div>
                        
                        <a type="button" class="btn btn-warning m-2" href="about.php">Know More</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-none d-md-block">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/thanking-customers-section-img.png" class="thanking-customers-section-img" />
                </div>
            </div>
        </div>
    </div>


    <!--footer-->

    <div class="bottom-container">
  <div class="row">
    <div class="col col-lg-4 col-md-4 col-sm-12 py-5">
      <a href="#" style="color:white" class="btn">Quick linnks</a>
      <p>----------------</p>
      <div class="arrange">
      <ol><a href="index.php">Home</a></ol>
      <ol><a href="about.php">About Us</a></ol>
      <ol><a href="privecypolicy.php">Privacy Policy</a></ol>
      <ol><a href="terms and conditions.php">Terms and Conditions</a></ol>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 py-5">
      <a href="#" style="color:white" class="btn">Courses</a>
      <p>-----------------</p>
      <ol><a href="allcoursers.php">Machine Learning</a></ol>
      <ol><a href="allcoursers.php">Web Development</a></ol>
      <ol><a href="allcoursers.php">Cyber Security</a></ol>
      <ol><a href="allcoursers.php">Data Science</a></ol>
      <ol><a href="allcoursers.php">Allcourses</a></ol>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 py-5">
      <a href="#" style="color:white" class="btn">Contact Us</a>
      <p>------------------</p>
      <ol><a herf="" >Phone: +91 - 1234567890</a></>
      <ol><a herf="">Technicalskills: support@yhills.com</a></ol>
      <ol><a herf="">Address: A-44, A Block, Sector</a></ol>
      <ol><a herf="">2, Noida, Uttar Pradesh 201301,</a></ol>
      <ol><a herf="">India.</a></ol>
    </div>
  </div>
</div>

</body>

</html>