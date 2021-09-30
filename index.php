
<!DOCTYPE html>
<html>
    <head>
        <title>India covid Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
              

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        

    </head>
    <body style="background-image: url('https://wallpaperaccess.com/full/2348499.png');">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#" style="color:white;font-size:250%;font-family:monospace">INDIA COVID-19 Tracker</a>
      
      
    </div>
  </div>;
</nav>
        


<?php
echo"</br>";
echo"</br>";
echo"</br>";
echo"</br>";



$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);


?>
<div style="width:800px; margin:0 auto;">
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">State</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Active</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deaths</th>
      
      
    </tr>
  </thead>


<?php
$i=1;
while($i < $statescount){

  
  $state= $coranalive['statewise'][$i]['state']   ;
  $confirmed =$coranalive['statewise'][$i]['confirmed']   ;
  $active =$coranalive['statewise'][$i]['active']  ;
  $recovered= $coranalive['statewise'][$i]['recovered']   ;
  $deaths= $coranalive['statewise'][$i]['deaths']   ; 
 ?>

 <tbody>
   <tr>
     <td><?php echo $state?></td>
     <td><?php echo $confirmed?></td> 
     <td><?php echo $active?></td>
     <td><?php echo $recovered?></td>
     <td><?php echo $deaths?></td>
</tr>
</tbody>
<?php
  $i++;
}

?>
</table>
</div>
</body>
</html>