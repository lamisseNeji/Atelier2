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
$notes=array("rami"=>7.50,"mohamed"=>19.00,"amira"=>15.5,"asma"=>10.00,"ahmed"=>09.5,"yassin"=>15.5,"islem"=>12.00);
echo "<h4> Les etudiants qui ont la moyenne supérieur a 10 sont:</h4>" ;
   foreach ($notes as $key=>$valeur) 
   {
    if($valeur>=10)
    echo ("$key <br/>");
   }
$nb=count($notes);
echo "le nombre d'etudiants est $nb <br/>";
$bn_note=0;
$nom="";
foreach ($notes as $key=>$valeur)
{
  if($bn_note<$valeur)
  {$bn_note=$valeur;
    $nom=$key;
  }
}
echo "l'etudiant qui a une bonne note est $nom <br/>";
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NOM </th>
      <th scope="col">Note en PHP</th>
     
    </tr>
  </thead>
    <?php
   
      foreach($notes as $key=>$valeur)
      {echo "<tr>
      <td>$key</td>
      <td>$valeur</td>
      
    </tr>";}
    ?>
    </table>
    <?php
    echo "<h4>Voici le tableau trié das l'ordre croissant de notes </h4>";
    ?>
  
  <table class="table table-hover">
  
  <thead>
    <tr>
      <th scope="col">NOM </th>
      <th scope="col">Note en PHP</th>
     
    </tr>
  </thead>
  
   <?php
   $nv_tab=array();
   $nv_tab=$notes;
   asort($nv_tab);
   foreach($nv_tab as $key=>$valeur)
   {echo "<tr>
   <td>$key</td>
   <td>$valeur</td>
   
 </tr>";}
   
    
  ?>
  </table>
  <?php
    echo "<h4>Voici le tableau trié das l'ordre decroissant de nom  </h4>";
    ?>
  <table class="table table-hover">
  
  <thead>
    <tr>
      <th scope="col">NOM </th>
      <th scope="col">Note en PHP</th>
     
    </tr>
  </thead>
  
   <?php
   $nv2_tab=array();
   $nv2_tab=$notes;
   krsort($nv2_tab);
   foreach($nv2_tab as $key=>$valeur)
   {echo "<tr>
   <td>$key</td>
   <td>$valeur</td>
   
 </tr>";}
   

   
    
    
    
  ?>

</table>
<?php
$s=array_sum($notes);
$moy=$s/$nb;
echo "<br/><h4>la moyenne des notes en PHP est $moy </h4>";
?>
</body>
</html>