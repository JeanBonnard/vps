<?php
session_start();
if (isset($_POST["css"])) $_SESSION['css']="css";
else if (isset($_POST["css2"])) $_SESSION['css']="css2";
if (!isset($_SESSION['css'])) $_SESSION['css']="css";// valeur par defaut

$tiitre='Température et Humidité';
$temp='visible';
$hum='visible';

if (isset ($_POST['temperat'])) $hum='hidden';
if (isset($_POST['humid'])) $temp='hidden';
if (isset($_POST['tempehum'])) $temp='visible' && $hum='visible';
if (!isset($_POST['temperat']) && !isset($_POST['humid']) && !isset($_POST['tempehum'])) $temp='visible' && $hum='visible';//valeur par defaut
if (isset ($_POST['temperat'])) $tiitre='Température';
if (isset($_POST['humid'])) $tiitre='Humidité';
if (isset($_POST['tempehum'])) $tiitre='Température et Humidité';
if (!isset($_POST['temperat']) && !isset($_POST['humid']) && !isset($_POST['tempehum'])) $tiitre='Température et Humidité';

print "<!DOCTYPE html>\n";
?>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['css'].'.css';?>">
    <title>ThonkSpoke</title>
  </head>

  <body>

    <header>
      <div class="bandeau"><h1 class='titre'><?php echo $tiitre?></h1></div>
    </header>


    <main>
      <div class="cercle" style="visibility:<?php echo $temp;?>;"></div>
      <object class="tableau" data="tableaudonnées.html" type="text/html" width="450" height="400"></object>
      <div class="cercle2" style="visibility:<?php echo $hum;?>;"></div>
      <p class="By">By ThongSpok®™</p>
    </main>

    <footer>
      <div class="pied">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <button class="css" type="submit" name="css">Froid</button>
          <button class="css1" type="submit" name="css2">Chaud</button>
        </form>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <button class="temp" type="submit" name="temperat"></button>
          <button class="tempehumi" type="submit" name="tempehum"></button>
          <button class="hum" type="submit" name="humid"></button>
        </form>

      </div>
    </footer>

  </body>
</html>
