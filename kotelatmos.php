<?php

$DB_NAME = 'dataxfcz4079';
$DB_HOST = 'sql2.webzdarma.cz';
$DB_USER = 'dataxfcz4079';
$DB_PASS = 'EeWV9B7';


  $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  
  $result = $mysqli->query('SELECT * FROM `atmos` ORDER BY ID DESC LIMIT 230');

  $rows = array();
  $table = array();
  $table['cols'] = array(

    array('label' => 'Cas', 'type' => 'string'),
    array('label' => 'T1 kotel zpatecka', 'type' => 'number'),
    array('label' => 'T2 kotel', 'type' => 'number'),
    array('label' => 'T3 vystup', 'type' => 'number'),
    array('label' => 'T4 vratka', 'type' => 'number') ,
    array('label' => 'T5', 'type' => 'number')
    );

   
    foreach($result as $r) {
        $temp = array();
        
        $temp[] = array('v' => (string) $r['Cas']);
 
        $temp[] = array('v' => (float) $r['T1']);
        
        $temp[] = array('v' => (float) $r['T2']);
        
        $temp[] = array('v' => (float) $r['T3']);
         $temp[] = array('v' => (float) $r['T4']);
        // $temp[] = array('v' => (float) $r['T5']);
        $rows[] = array('c' => $temp);
        

$table["rows"] = $rows;
      

$jsonTable = json_encode($table);  
 }
  
?>
<!DOCTYPE html>
<html >
<head>
<link rel="icon" href="ikona.png" type="image/png">
    <title>Atmos</title>
    <link rel="stylesheet" href="indexstyle.css">
    
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
    google.load('visualization', '1', {'packages':['corechart']});

    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
          title: 'ATMOS',
          is3D: 'true',
          width: 1200,
          height: 600,  
          backgroundColor: "grey"
          //vAxis.viewWindow.min: 15 
                };
    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);   
    }
    
    </script>
    
   
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
         
         <div class="graf">
                  <div id="chart_div"></div>

                  <div class="next">
                 <a class="button" href="Atmos.php">Starší záznamy<a/>
                 <a class="button" href="atmosgraf.php">Dlouhodobý graf<a/>
                      </div>
         </div>

                 
         

     </div>

    
     <div class="nadpis">
         <h1>Aktualní data kotel Atmos</h1>
          
         </div>
             
            
     
    </div>
    
</body>
</html>

