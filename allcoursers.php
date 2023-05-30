<!DOCTYPE html>
<html>
    <head>
    <title>webapp</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&display=swap" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    </head>
    <body>
<style>
    .card{
    height: 450px;
  }
    .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<body>


<div class="dropdown m-5">
    <div>
<a href="index.php" class="previous mb-5">&laquo; Previous</a>
</div>
  <button class="dropbtn">Category</button>
  <div class="dropdown-content">
  <a href="ai.php">AI</a>
  <a href="electrical.php">Civil</a>
  <a href="computers.php">Computer Science</a>
  <a href="electrical.php">Electrical</a>
  <a href="electronics.php">Electronics</a>
  <a href="managment.php">management</a>
  <a href="mechanical.php">Mechanical</a>
  <a href="Software & Technology.php">Software & Technology</a>
  </div>
</div>


<section class="allcourses">

<Div class="container-fluid">
  <div class="row">

  <div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Artificial intelligence Training.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Artificial intelligence Training</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/AutoCAD.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">AutoCAD</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


  
  <div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/webdevelopmentcourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">webdevelopment</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/appdevelopmentcourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">App development</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/artificialintelligencecourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Artificial intelligence</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/cloudcomputingcourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Cloud computing</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/cybersecuritycourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Cyber security</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/datasciencecourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Data science</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/fullstackjavacourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Fullstack java</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/javacourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Java</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/embedded system course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Embedded system course</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/internet of things course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Internet of things</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/hybrid & electric vechile course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Hybrid and Electric vechile</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/digital marketing tutorial.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Digital marketing Tutorial</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/digital marketing batch.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">digital marketing batch</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Business Analytics.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Business analist batch</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/digital marketing batch.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Digital marketing batch</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/webdevelopmentcourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">webdevelopment</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/finance batch.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">finance Batch</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/human resourse managment.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Human Resources Management February Batch</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Digital Marketing.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Digital Marketing</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/Finance.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Finance</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/Human Resource & Management.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Human Resource & Management</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/ Operations Management.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">
Operations Management</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Business Analytics.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Business Analytics</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/webdevelopmentcourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">webdevelopment</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/appdevelopmentcourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">App development</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/artificialintelligencecourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Artificial intelligence</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/cloudcomputingcourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Cloud computing</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/cybersecuritycourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Cyber security</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/datasciencecourse.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Data science</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/fullstackjavacourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Fullstack java</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/javacourse.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Java</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/mechanical:architect.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Audo CAD</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/mechanical:arcitect.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Hybrid & Electric Vehicle</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/embedded system course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Embedded system course</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/internet of things course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Internet of things</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/hybrid & electric vechile course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Hybrid and Electric vechile</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/robatics engineering course.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Robatics engineering</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/AutoCAD.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">AutoCAD</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Digital Marketing.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Digital Marketing</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/Finance.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Finance</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/Human Resource & Management.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Human Resource & Management</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 py-5">
<div class="card" >
  <img class="card-img-top" src="img/ Operations Management.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">
Operations Management</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 py-5 ">
<div class="card" >
  <img class="card-img-top" src="img/Business Analytics.webp" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Business Analytics</h4>
    <p class="card-text">2 months course</p>
    <a href="signup.php" class="btn btn-primary">Learn more</a>
  </div>
</div>
</div>


</Div>
</div>
</section>


</body>
</html>
