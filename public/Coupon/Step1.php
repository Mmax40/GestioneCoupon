<!doctype html>
<html lang="en">
  <head>
  
  <?php
require_once 'config.php';
if ((!$link = mysqli_connect($server, $user, $password, $database))) 
  die(printf("<br> <br> <H3>Connessione al server non possibile: [%d] %s</H3>", mysqli_connect_errno(), mysqli_connect_error())); 
?>

<?php
if (isset($_POST['Affiliato'])) 
{ 
 $Affiliato = $_POST['Affiliato'];
}

if (isset($_POST['CorsoCoupon'])) 
{ 
 $CorsoCoupon = $_POST['CorsoCoupon'];
}

if (isset($_POST['Costo'])) 
{ 
 $Corso = $_POST['Costo'];
}

?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Genera Coupon</title>
  </head>
  <body>

  <div class="container">
  <h3>Affiliato</h3>
  <form method="Post" action="Step2.php" target="">
  <div class="row">
    <div class="col">
    <p>Scegli Affiliato:</p>
    <select name='Affiliato'>
      <?php
$affiliati=mysqli_query($link, "SELECT
  *
FROM gest_account
");

while($riga = mysqli_fetch_row($affiliati)) { 
   echo "<option value='$riga[0]'> $riga[6]  </option>";
  } 
 ?>
   </select>
    </div>
    <div class="col">
    <p>Scegli corso:</p>
    <select name='CorsoCoupon'>
      <?php
$Corsista=mysqli_query($link, "SELECT
  *
FROM mdl_course
");

while($riga2 = mysqli_fetch_row($Corsista)) { 
   echo "<option value='$riga2[0]'> $riga2[4]  </option>";
  } 
 ?>
   </select>
    </div>
    <div class="col">
  <p>Prezzo coupon per singolo corso:</p>
  <input type="text" name="PrezzoCoupon"></input>
  <input type="submit" name="invia" value="Inserisci">

    </div>
  </div>
  </form>
</div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
