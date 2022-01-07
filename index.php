
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<link rel="icon" href="ikona.png" type="image/png">
    <title>Milduino</title>
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
                    <li><a href="indexodl.html">OLD</a></li>
                    
                </ul>
           </div>

         <div class="tabulka">                  
         </div>  

        </div>    
       <div class= "content">
         <h1>Aktualní hodnoty </h1>
          
         <div class= "data">
         <?
include "databaze.php";
                    
     
   $vypis=mysql_query("SELECT * FROM `atmos` ORDER BY ID DESC LIMIT 1",$GLOBALS["db_spojeni"]);                           
        if($vypis == false){print "!!! nepodarilo se provest dotaz !!!";}    

           while ($atmos = MySQL_Fetch_Array($vypis))  { 

           echo ' <div class="bunka"> Datum a èas <br> '.$atmos['Cas']. "</div>"  ;
          echo ' <div class="bunka1"> Teplota zpatecka kotel <br> '.$atmos['T1']. "</div>"  ;
          echo ' <div class="bunka2"> Teplota kotel <br> '.$atmos['T2']. "</div>"  ;
          echo ' <div class="bunka3"> Vstup radiator <br> '.$atmos['T3']. "</div>"  ;
          echo ' <div class="bunka4"> Zpatecka radiator <br> '.$atmos['T4']. "</div>"  ;
          echo ' <div class="bunka5"> Teplota spalin <br> '.$atmos['T5']. "</div>"  ;
                   }

    $vypis=mysql_query("SELECT * FROM `solar` ORDER BY ID DESC LIMIT 1",$GLOBALS["db_spojeni"]);                           
        if($vypis == false){print "!!! nepodarilo se provest dotaz !!!";}    

           while ($solar = MySQL_Fetch_Array($vypis))  { 

           echo ' <div class="bunka6"> plyn > bojler <br> '.$solar['T1']. "</div>"  ;
          echo ' <div class="bunka7"> solar vrat <br> '.$solar['T2']. "</div>"  ;
          echo ' <div class="bunka8"> plyn UT vstup <br> '.$solar['T3']. "</div>"  ;
          echo ' <div class="bunka9"> solar vstup <br> '.$solar['T4']. "</div>"  ;
          echo ' <div class="bunka10"> vrch bojler <br> '.$solar['T5']. "</div>"  ;
          echo ' <div class="bunka11"> spodek bojler <br> '.$solar['T7']. "</div>"  ;
                   }

            $vypis=mysql_query("SELECT * FROM `temphome` ORDER BY ID DESC LIMIT 1",$GLOBALS["db_spojeni"]);                     
              while ($temphome = MySQL_Fetch_Array($vypis))  {

                        $a =0 ;
                        $b = $temphome["Temp"] ; 
                        $c = $b - $a ;

            echo ' <div class="bunka12"> Teplota doma <br> '.$c. "</div>"  ;
                          
                        
                        }


            ?>
            

            
         

         </div>
             
            
     </div>
    </div>
    
</body>
</html>

