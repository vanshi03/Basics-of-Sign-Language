<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basics of sign language</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
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
    height:538%;
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
    margin-top:1950px;
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
          <a class="navbar-brand" href="index.html"><img src="./images/logo.jpg" width=10% height=10%;></a>
          <!-- <p class="name">Speak with Sign</p> -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-li">
                <a class="classi" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="keywords.html">Keywords</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="dictionary.php">Dictionary</a>
              </li>
              <li class="nav-item dropdown">
                          <a href="alphanum.php" class="classi dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                          <div class="dropdown-menu dropdown-menu-end">
                              <a href="alphanum.php" class="dropdown-item">Alphabets and numbers</a>
                              <a href="typesofsigns.html" class="dropdown-item">Types of Signs</a>
                              <a href="basichandshapes.html" class="dropdown-item">Basic Handshapes</a>
                              <a href="grammarexplanation.html" class="dropdown-item">Grammar Explanantion</a>

              </li>
            </ul>
          </div>
        </div>
</nav>
<div class="sidebar">
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <ul>
         <p><li class="keywords"><a href="?cate=animal">Animals</a></li></p>
         <p><li class="keywords"><a href="?cate=color">Colors</a></li></p>
         <p><li class="keywords"><a href="?cate=food">Food and Drinks</a></li></p>
         <p><li class="keywords"><a href="?cate=relation">Friends and Family</a></li></p>
         <p><li class="keywords"><a href="?cate=home">Home and Accessories</a></li></p>
         <p><li class="keywords"><a href="?cate=educate">School and Education</a></li></p>
         <p><li class="keywords"><a href="?cate=cloth">Clothing and Apperance</a></li></p>
         <p><li class="keywords"><a href="?cate=event">Events and Holidays</a></li></p>
         <p><li class="keywords"><a href="?cate=season">Season and Weather</a></li></p>
         <p><li class="keywords"><a href="?cate=time">Time</a></li></p>
         <p><li class="keywords"><a href="?cate=emotion">Emotions</a></li></p>
         <p><li class="keywords"><a href="?cate=verb">Verbs</a></li></p>
         <p><li class="keywords"><a href="?cate=adjective">Adjectives</a></li></p>
        </ul>
        </div>
     <div class="col-sm-8 text-left">
        <?php
          $result_per_page = 4;
          $category = 'Animal';
          $conn = new mysqli("localhost", "priyagarg", "Pr0j3ctw0r7", "signlanguage");
          if(!$conn)
            die("Connection Error: ".$conn->connect_error);
          if(isset($_REQUEST["cate"])){
            $category = $_REQUEST["cate"];
            switch($_REQUEST["cate"]){
              case 'animal': $category = 'Animal';
                break;
              case 'color': $category = 'Color';
                break;
              case 'food': $category = 'Food';
                break;
              case 'relation': $category = 'Relation';
                break;
              case 'home': $category = 'Home';
                break;
              case 'educate': $category = 'Educate';
                break;
              case 'cloth': $category = 'Cloth';
                break;
              case 'event': $category = 'Event';
                break;
              case 'season': $category = 'Season';
                break;
              case 'time': $category = 'Time';
                break;
              case 'emotion': $category = 'Emotion';
                break;
              case 'verb': $category = 'Verb';
               break;
              case 'adjective': $category = 'Adjective';
                break;
            }
          }
          $sql = "SELECT * FROM words WHERE categories like '%$category%'";
          $result = $conn->query($sql);
          $number_of_pages = ceil($result->num_rows/$result_per_page);

          if(!isset($_REQUEST["page"]))
            $page = 1;
          else
            $page = $_REQUEST["page"];

          $this_page_first_result = ($page - 1)*$result_per_page;
          
          $sql = "SELECT * FROM words WHERE categories like '%$category%' LIMIT $this_page_first_result,$result_per_page";
          $result = $conn->query($sql);

          if($result->num_rows > 0)
            while($row = $result->fetch_assoc()){
              echo "<p style=font-size:18px;font-weight:bold;margin-top:15px;text-align:center;'>".$row["wordname"].'<br></p>';
              echo '<img src="'.$row['link'].'" style="
              margin-left:150px;
              margin-right: auto;
              width: 65%;
              height:300px"></a><br>';
              if($row["meaning"]!==NULL)
                echo '<br><pre style="background-color:#E9E4D4;padding:5px;margin-left:150px;">Explanation: '.$row["meaning"].'</pre>';
              if($row["typesofsign"]=="two")
                echo '<div style="margin-left:150px;">This sign is two-handed sign.</div>';
              else if($row["typesofsign"]=="one")
                echo '<div style="margin-left:150px;">This sign is one-handed sign.</div>';
              if($row["categories"]!==NULL)
                echo '<div style="margin-left:150px;margin-bottom:50px;">Categories: '.$row["categories"].'</div>';
            }
          else
            echo "Sorry, no result found";
          echo '<br>';

          $page1 = $page - 1;
          echo "<ul class='pagination justify-content-end'>";
          if($page1 >= 1)
            echo "<li class='page-item'>
              <a class='page-link' href='category.php?cate=$category&page=$page1'>Previous</a>
            </li>";
          for($page1 = $page;$page1 <= $page +2;$page1 = $page1 + 1){
            if($page1 <= $number_of_pages){
              echo "<li class='page-item'><a class='page-link' href='category.php?cate=$category&page=$page1'>$page1</a></li>";
              $_REQUEST["page"]=$page1;
            }
          }
          $page1 = $page + 1;
          if($page1 <= $number_of_pages)
            echo "<li class='page-item'>
                <a class='page-link' href='category.php?cate=$category&page=$page1'>Next</a>
              </li>
            </ul>";
          $conn->close();
        ?>
        </div>
      </div>
    </div>
  </div>
  <br>

<footer>
  <p>&copy Vanshi(7744)</p>
  <img src="./images/facebook.png" width="5%" height="5%">
  <img src="./images/twitter.png" width="5%" height="5%">
  <img src="./images/instagram.png" width="5%" height="5%">
</footer>
</body>
</html>
