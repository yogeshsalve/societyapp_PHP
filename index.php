<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 48%;
  padding: 10px;
  height: 410px; /* Should be removed. Only for demonstration */
}

.column1 {
  float: left;
  width: 52%;
  padding: 10px;
  height: 410px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<!-- style for registration window -->
<style>
  .btn {
      background-color: blue; 
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 55%;
      opacity: 0.9;
    }

   /* div{
      border : 1px solid black;
      margin-left: 800px;
      margin-top: 250px;
      margin-right: 150px;

      background-color: light blue;*/

    }
    .mem{
       background-color: cyan; 
      color: black;
      padding: 10px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 55%;
      opacity: 0.9;

    }
  </style>
<!-- style for registration window -->

</head>
<body>
<marquee><h3>message to flash</h3></marquee>



 



<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">SoftCare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i><span>Call us :</span> +91-2261567001/02/03<span class="sr-only">(current)</span></a>
      </li>
      &nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i><span>Email :</span> info@softcare.com</a>
      </li>
      &nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="https://www.facebook.com/yogeshbalkrushnasalve/" target="_blank"><i class="fa fa-facebook" aria-hidden="true">&nbsp;</i><span>Facebook</a>
      </li>
      &nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube" aria-hidden="true">&nbsp;</i><span>Youtube</a>
      </li>
      &nbsp;&nbsp;
       <li class="nav-item active">
        <a class="nav-link" href="https://twitter.com/?" target="_blank"><i class="fa fa-twitter" aria-hidden="true">&nbsp;</i><span>Twitter</a>
      </li>
  	  </ul>
      <ul class="navbar-nav float-md-right">
       <li class="nav-item active">
        <a class="nav-link" href="#" target="_blank"><i class="fa fa-sign-in" aria-hidden="true">&nbsp;</i><span>Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- navbar ends -->
<!-- <div class="row ml-5">
<h2>Place reserved for advertisement </h2>
</div> -->
<div class="row ml-5">
  <div class="column" style="background-color:#aaa;">

    <!-- carousel starts -->
    <!-- <div> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/building1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/building2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/building3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- carousel ends -->
  <!-- </div> -->
  <div class="column1" >
    <!-- Registration window -->
    <table class="table table-bordered">
    <div>
     <form>
     
      <center>
        <br>
        <h1>Welcome User !</h1>
        <h3>Choose your User Type below</h3>
          <b>
        <h1><input type="radio" id="1" name="first" value="member">
        <label class="mem">Member</label>
        
        <input type="radio" id="2"   name="first" value="staff">
            <label class="mem">Staff</label></h1>
     </b>
          <br> 

            <input type="button" class="btn" name="Register" value="Register" align="center">
            <input type="button" class="btn" name="Register" value="Login" align="center">
            <br> <br> <br> 
            <!-- <h4>Already registered?</h4><button type="button" class="btn btn-success">Login</button> -->
            </center>
            
        </form>

      </div>
      </table>
      <!-- registration window -->
  </div>
</div>



</body>
</html>