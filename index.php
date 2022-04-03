<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basics of sign language</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    ul{
    margin:10px 6px;
}
.nav-li{
  margin-right:20px;
}
.classi{
    font-weight:bolder;
    color:white;
    text-decoration:none;
    padding:10px 25px;
    display: inline;
    /* float:right;
    box-sizing: border-box;*/
    border-radius:25px;
}
.classi:hover{
    color:black;
    background-color:#F5F5DC;
}

.sidenav{
    height:100%;
    width: 160px;
    /* z-index: 1;
    top: 0;
    left: 0;  */
    background-color:#F5F5DC;
    /* overflow-y:hidden; */
    /* padding-top: 20px; */
    /* padding:15px 25px; */
    /* display:block;
    font-weight: bolder;
    font-size:15px; */
  }


.sidenav li{
    list-style-type:none;

}
.sidenav li a{
    font-size:20px;
    color:black;
    display: block;
    font-weight:bolder;
    padding:10px 10px;
}
  .sidenav a:hover{
    text-decoration: none;
  }

  .sidenav a:visited{
    text-decoration: none;
  }

  .sidenav a:link{
    text-decoration: none;
  }

  .sidenav a:active{
    text-decoration: none;
  }
  .sidenav li a:hover{
    color: white;
    background-color: darkslategray;
    border-radius:25px;
    font-weight:bolder;
    box-shadow: 0px 0px 10px #29465B;
  }

  footer {
    background-color: #555;
    color: white;
    padding: 15px;
    text-align: center;
    margin-top:0px;
  }
  footer img{
      padding:10px;
  }
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      width: 100%;
      position: relative;
      display: inline-block;
      padding: 15px 100px;
      margin-right:100px;
    }
    .sidebar a {float: left;
    margin-left:-10px;
    margin-top:-35px;
  }
    .row.content {height:auto;} 

     .sidebar ul{
    padding: 0;
    display: inline-flex;
    margin-top: 80px;

  }
  }
  @media screen and (max-width: 400px) {
.sidebar a {
  text-align: center;
  float: none;
}
}

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px;}
    
  .sidebar ul{
    padding: 0;
  }
@media screen and (max-width:990px){
    .classi{
        float: left;
    }

}
    .sidenav{
      font-size: 12px;
    }
  </style>
</head>
<body>

  <!-- <nav class="navbar navbar-inverse  navbar-light" style="background-color:black">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="navbar1">
        <img src="../images/logo.jpg" width="10%" height="10%">
        <p class="name">Speak With Sign</p>
        <span class="cs">
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar navbar-nav navbar-right">
          <li class="active"><a href="#home" class="classi">Home</a></li>
          <li><a href="alphanum.php" class="classi">Alphabets and numbers</a></li>
          <li><a href="keywords.php" class="classi">Keywords</a></li>
          <li><a href="dictionary.php" class="classi">Dictionary</a></li>
          <li><a href="typesofsigns.php" class="classi">Types of Signs</a></li>
          <li><a href="basichandshapes.php" class="classi">Basic Handshapes</a></li>
          <li><a href="grammarexplanation.php" class="classi">Grammar Explanation</a></li>
          </ul>
          </div>
        </span>
      </div>
    </div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="../images/logo.jpg" width=10% height=10%;></a>
          <!-- <p class="name">Speak with Sign</p> -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-li">
                <a class="classi" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="keywords.php">Keywords</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="dictionary.php">Dictionary</a>
              </li>
              <li class="nav-item dropdown">
                          <a href="alphanum.php" class="classi dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                          <div class="dropdown-menu dropdown-menu-end">
                              <a href="alphanum.php" class="dropdown-item">Alphabets and numbers</a>
                              <a href="typesofsigns.php" class="dropdown-item">Types of Signs</a>
                              <a href="basichandshapes.php" class="dropdown-item">Basic Handshapes</a>
                              <a href="grammarexplanation.php" class="dropdown-item">Grammar Explanantion</a>

              </li>
            </ul>
          </div>
        </div>
  </nav>
<div class="sidebar">
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <ul>
          <p><li><a href="#description">Description</a></li></p>
          <p><li><a href="#aim">Aim</a></li></p>
        </ul>
    </div>
   <div class="col-sm-8 text-left"> 
      <img src="../images/welcome.jpg" width="35%" height="30%" style="margin-top:20px">
      <p id="description">SIGN LANGUAGE- It means that communicating with each other through hand gestures and some dedicated signs.This type of language is used generally by deaf people to convey their message.Since its difficult for them understand everything without hearing , they are trained to become specialised to communicate using sign langauge.Signs may include hand gestures, facial expressions and postures of the body.Since American sign language is easy to understand and communicate our site focuses mainy on sign language.</p>
      <p id="aim">This site will provide readers with the beginning fundamentals of American Sign Language(ASL) by learning about Handshapes, Vocabulary, Syntax  that will allow the reader to participate in signed conversations. The site is made interactive and attractive so that the reader does not loosen interest.Signs are represented through videos and images.Written expression of the vocabulary is provided to the reader so that he/she can learn how to write in signed language.It enables readers to be able to communicate in sign language easily and efficiently</p>
      <hr>
    </div>
    </div>
  </div>
</div>
<footer>
  <p>&copy Vanshi Mittal</p>
  <img src="../images/facebook.png" width="5%" height="5%">
  <img src="../images/twitter.png" width="5%" height="5%">
  <img src="../images/instagram.png" width="5%" height="5%">
</footer>
</body>
</html>