<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Projekt bazy danych - zadanie</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>PROJEKT BAZY DANYCH</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=home">Home</a></li>
      <li><a href="index.php?id=a">a)</a></li>
      <li><a href="index.php?id=b">b)</a></li>
      <li><a href="index.php?id=c">c)</a></li>
      <li><a href="index.php?id=d">d)</a></li>
      <li><a href="index.php?id=e">e)</a></li>
      </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
        <?php
        require('config.inc.php');
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $id = isset($_GET['id'])?$_GET['id']:"";
        
        switch($id)
        {
            case "home": require('home.inc.html'); break;
            case "a": require('a.inc.html'); break;
            case "b": require('b.inc.html'); break;
            case "c": require('c.inc.html'); break;
            case "d": require('d.inc.html'); break;
            case "e": require('e.inc.html'); break;
            //case "pokaz": require('pokaz.inc.html'); break;
            //case "dodaj": require('dodaj.inc.html'); break;
            //case "usun": require('usun.inc.html'); break;
            //case "zmien": require('zmien.inc.html'); break;
            //default: require('home.inc.html');
        }
        mysqli_close($conn);
        ?>
    </p>
  </div>

</body>
</html>