
<?
include "databaze.php";
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<link rel="icon" href="ikona.png" type="image/png">
    <title>Window</title>
    <link rel="stylesheet" href="indexstyle.css">
    
    
   
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Milduino</h2>  
            </div>

            <div class="menu">
                <ul>
                    <li><a href="http://data.xf.cz/indextest2.php">HOME</a></li>
                    <li><a href="http://data.xf.cz/kotelatmos.php">ATMOS</a></li>
                    <li><a href="http://data.xf.cz/windows.php">ŽALUZIE</a></li>
                    <li><a href="http://data.xf.cz/solars.php">SOLÁR</a></li>
                    <li><a href="http://data.xf.cz/codes.php">CODES</a></li>  
                    <li><a href="#">PAVEL</a></li>
                    <li><a href="index.php">OLD</a></li>
                    
                </ul>
           </div>

        <div class="tabulka">
       
                  
         </div>
         
         <div class="zaluzie">
         <?
                
     $vypis=mysql_query("SELECT * FROM `onka` ORDER BY ID DESC LIMIT 1",$GLOBALS["db_spojeni"]);                     
         while ($onka = MySQL_Fetch_Array($vypis))  {
                            
            $zapnutoChecked = $onka["W1"] == 1 ? 'checked' : ''; //nastaví výchozí hodnotu radio buttonu
            $vypnutoChecked = $onka["W1"] == 0 ? 'checked' : '';
            $autoChecked = $onka["W1"] == 2 ? 'checked' : '';
            
         /* echo "Proměnná z databáze:&nbsp;(".$onka["W1"].")&nbsp;";
          
                     if($onka["W1"] == 1){
			echo 'Roztemněno';
            		}
                     if($onka["W1"] == 0){
			echo 'Zatemněno';
            		}
                     if($onka["W1"] == 2){
			echo 'AUTO';
            		}
	    }

      echo '<br> <br>'; 
         */
    }
  

     echo '<form method="get" action="okno2.php" > '  ;

  echo ' <label class="container"> ROZTEMNIT ' ;
  echo ' <input type="radio" name="W1" value="1" '.$zapnutoChecked.' />                                                                          '  ;
  echo ' <span class="checkmark"></span> ';
  echo ' </label>';

  echo '<label class="container">ZATEMNIT ' ;
  echo '<input type="radio" name="W1" value="0" '.$vypnutoChecked.' />                                                                          '  ;
  echo '<span class="checkmark"></span> ';
  echo '</label>';

  echo '<label class="container">AUTO ' ;
  echo '<input type="radio" name="W1" value="2" '.$autoChecked.' />                                                                          '  ;
  echo '<span class="checkmark"></span> ';
  echo '</label>';


  
                 
  echo '  <input type="submit" value="NASTAVIT"> ';  
   


  echo '</form>'  ;
   ?>
         </div>

         

     </div>

    
     <div class= "content2">
         <h1>ESP automatické žaluzie</h1>
          
         
             
            
     </div>
    </div>
    
</body>
</html>

