<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basics of sign language</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    height:278%;
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
    margin-top:800px;
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
          <p><li><a href="category.php?cate=animal">Animals</a></li></p>
          <p><li><a href="category.php?cate=color">Colors</a></li></p>
          <p><li><a href="category.php?cate=food">Food and Drinks</a></li></p>
          <p><li><a href="category.php?cate=relation">Friends and Family</a></li></p>
          <p><li><a href="category.php?cate=home">Home and Accessories</a></li></p>
          <p><li><a href="category.php?cate=educate">School and Education</a></li></p>
          <p><li><a href="category.php?cate=cloth">Clothing and Appearance</a></li></p>
          <p><li><a href="category.php?cate=event">Events and Holidays</a></li></p>
          <p><li><a href="category.php?cate=season">Season and Weather</a></li></p>
          <p><li><a href="category.php?cate=emotion">Emotions</a></li></p>
          <p><li><a href="category.php?cate=time">Time</a></li></p>
          <p><li><a href="category.php?cate=verb">Verb</a></li></p>
          <p><li><a href="category.php?cate=adjective">Adjective</a></li></p>
        </ul>
        </div>
    <div class="col-sm-8 text-center" style="padding-top:20px;padding-left:200px"> 
      <p>There are the words that you should learn first. Learning the signs for these ASL sign language words is a great way to build a basic vocabulary foundation before learning full American Sign Language. These 150 words were chosen by finding the most important words learned in our ASL 1 course. These are the words that students learn first in the class and are therefore extremely useful to learn–especially if you plan to take an ASL class in the future.</p> 
    <p>These top words have been organized into 11 categories: Common, Animals, Colors, Descriptions, Family, Food, Home, People, Questions,School, and Time. This should make them easy to find and easier to learn. The more important categories are listed toward the top. These are the basic ASL sign language words that you will find yourself using the most often. The categories toward the bottom are best for enriching basic conversations. Keep in mind that this list is just a starter and contains only the most common basic signs used in American Sign Language.</p>
      <hr>
    </div>
    </div>
  </div>
</div>

<footer>
  <p>&copy Vanshi(7744)</p>
  <img src="../images/facebook.png" width="5%" height="5%">
  <img src="../images/twitter.png" width="5%" height="5%">
  <img src="../images/instagram.png" width="5%" height="5%">
</footer>
</body>
</html>
