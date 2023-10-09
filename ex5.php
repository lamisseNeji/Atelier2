<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="bootstrap.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="ex1.php">Exercice 1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex2.php"> Exercice 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex3.php"> Exercice 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex4.php"> Exercice 4</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link "  href="ex5.php" > Exercice 5</a>
          
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<form method="post">
        <label for="chaine"><h4>Donnez une chaîne de caractères</h4></label>
        <input id="chaine" name="text" type="text">
        
    </form>
    <?php
    $ch=$_POST["text"];
    $ch1=explode(" ",$ch);
    $nv_ch="";
    foreach($ch1 as $valeur)
    {
        $nv_ch=$nv_ch.substr($valeur,0,1);
        
    }
    $ch3=strtoupper($nv_ch);
    echo "<h4>Les initiales de chaque mot en majuscules sont $ch3 </h4>";
    
  ?>  
</body>
</html>