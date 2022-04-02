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
    height:255%;
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
    margin-top:700px;
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
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav  text-center">
        <ul>
          <p><li class="grammarexplanation"><a href="#type1">5 elements</a></li></p>
          <p><li class="grammarexplanation"><a href="#type2">Tense</a></li></p>
          <p><li class="grammarexplanation"><a href="#type3">Plural and possessives</a></li></p>
          <p><li class="grammarexplanation"><a href="#type4">Negatives</a></li></p>
          <p><li class="grammarexplanation"><a href="#type5">Articles</a></li></p>
          <p><li class="grammarexplanation"><a href="#type6">Punctuation</a></li></p>
          <p><li class="grammarexplanation"><a href="#type7">Intensity</a></li></p>
          <p><li class="grammarexplanation"><a href="#type8">Gender</a></li></p>
        </ul>
        </div>
    
   <div class="col-sm-8 text-center" style="margin-left:150px;"> 
      <p id="grammarexplanation">.</p>
      <p id="type1">
        <b>THE 5-ELEMENTS</b>-Just like how we see English words as the arrangement of letters, there are five basic sign language elements that make up each sign. The five elements are: handshape, movement, palm orientation, location, and facial expression.</p>

      <p id="type2">
        <b>TENSE</b>-In English, words are spelled differently to indicate the past, present, and future.<b> In basic sign language, you use your body to indicate tense.</b> Signs for the present are signed in front of your body (TODAY and NOW), signs for past are signed moving backward (BEFORE and YESTERDAY), and signs for the future are signed moving forward (TOMORROW and SOMEDAY).</p>

      <p id="type3">
        <b>PLURAL AND POSSESSIVES</b>-To form <b>plurals</b>, you have a few different options:
        <ul style="list-style-type:square;margin-left:20px;">
         <li>The most common way is to repeat the sign several times on either side of your body. Repeating the sign for CAT would mean “multiple cats.”</li>
         <li>You can also add a number or sign that indicates quantity after the sign. You can sign CAR + MANY to mean “many cars.”</li>
        <li>You can also form the sign, then point with your index finger at a number of locations in your signing area. You can sign HOUSE then point around in your signing area to mean “many houses.”</li></ul>
       <p>  Possessives are rarely used because you can usually use context. However, you can sign the letter “S” with a twist of your wrist after you sign the noun or fingerspell the word that is in possession of the thing you are talking about.</p></p>

      <p id="type4">
        <b>NEGATIVE</b>-To <b>form a negative</b>, you can do a few things:
        <ul style="list-style-type:square; margin-left:20px">
          <li>Sign the word NOT before the intended word. In relation to English, this adds the un-, im-, in-, or dis- prefix to the word (NOT + HAPPY = “unhappy”).</li>
          <li>Shake your head back and forth while signing the word (BELIEVE + (shake head) = “don’t believe”).</li>
          <li>For some signs, you can twist your hand downward to indicate a negative (WANT + (twist hands so palms face downward) = “don’t want”).</li></ul></p>

      <p id="type5">
        <b>ARTICLES</b>-Articles (a, an, and the) <b>are normally left out of basic sign language conversation.</b> They are not necessary. However, articles are sometimes used for teaching deaf students English.</p>

      <p id="type6">
        <b>PUNCTUATION</b>-Like articles, <b>punctuation marks are left out</b>. They are also unnecessary (facial expression suffices). If you feel you need to add a punctuation mark, just trace the shape of the mark in the air with your pointer finger.</p>

      <p id="type7">
        <p><b>INTENSITY</b>-n English, intensity is usually shown by adding words.<b> In ASL, intensity is shown by varying the intensity or speed with which a sign is made or by incorporating facial expression.</b></p>
        <p>For example: the sign for WALK can be made quickly or slowly to indicate how the person is walking, LIGHT BLUE is signed with a slight wrist turning motion, and SMART becomes BRILLIANT and PRETTY becomes BEAUTIFUL when signs are exaggerated.</p></p>

      <p id="type8">
        <b>GENDER</b>-<b>Location is what shows you the gender of some signs.</b> Most male signs are formed on or near the forehead while most female signs are formed on or near the cheek or chin. For example, FATHER is signed by touching the tip of your thumb to your head, while MOTHER is signed by touching the tip of your thumb to your chin.</p>
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
