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
    <?php
    $tabpays1=["Tunisie","France","Japon","Italy","Angletere"];
    ?>
<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">Numéro de pays </th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
    foreach($tabpays1 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>
  </table>
<?php
echo "<h4>Tableau trié par ordre alphabetique croissant</h4> ";
$tab1=$tabpays1;
sort($tab1);
?>
<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">Numéro de pays </th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
    foreach($tab1 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>
  </table>
  <?php
echo "<h4>Tableau trié par ordre alphabetique decroissant</h4> ";
$tab1=$tabpays1;
rsort($tab1);
?>
<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">Numéro de pays </th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
    foreach($tab1 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>
  <?php
   
    $tabpays2=["Tunis"=>'tunisie',"Paris"=>'France',"Tokyo"=>'Japon',"Roma"=>'italy',"London"=>'Angletere'];
    ?>
    <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">Capitales </th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
  
  echo "<h4>Tableau trié par ordre alphabetique croissant de pays</h4> ";
  $tab2=$tabpays2;
  asort($tab2);

    foreach($tab2 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>
  </table>
  <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">capitale</th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
  
  echo "<h4>Tableau trié par ordre alphabetique decroissant de pays</h4> ";
  arsort($tab2);
    foreach($tab2 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>

    </table>
    <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">capitale</th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
  
  echo "<h4>Tableau trié par ordre croissant de indices</h4> ";
  ksort($tab2);
    foreach($tab2 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>

    </table>
    <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">capitale</th>
    <th scope="col">Pays</th>
  </tr>
</thead>
  <?php
  
  echo "<h4>Tableau trié par ordre decroissant de indices</h4> ";
  krsort($tab2);
    foreach($tab2 as $key=>$valeur)
    {echo "<tr>
    <td>$key</td>
    <td>$valeur</td>  
    </tr>";}
  ?>

    </table>

</body>
</html>