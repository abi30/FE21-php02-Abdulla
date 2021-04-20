<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
   <h1>Hello</h1>
  




   <form action="index.php"method="POST"; >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">please fahrenheit value</label>
    <input type="number" class="form-control" name ="given_value" required>
  
  </div> 
  <button type="submit" name="btn" class="btn btn-primary">Get Celsius</button>
</form>


<?php

$celsius=-1;

function fahrenheit_celsius($given_value){

  $celsius = ((5/9)*($given_value-32));
  return $celsius;
}


// function celsius_fharenheit($given_value){
// $fahrenheit=$given_value*(9/5)+32;
// return $fahrenheit ;

// }


if(isset($_POST['btn']))

{
    
    $given_value=$_POST['given_value'];
    
    //Fahrenheit to celsius 
   
             $celsius=(round(fahrenheit_celsius($given_value),2));
             echo "$given_value Fahrenheit = $celsius Celsius <br/>";
        
   
   
}
// echo "$celsius";


$temp_messWithImg=array(
  array("temp"=>"Very cold",
        "location"=>"Rassa",
        "img"=>"https://media.gettyimages.com/photos/young-woman-enjoying-snowfall-in-amsterdam-picture-id905616754?s=612x612",
        "info"=>"temperature between 0°c to 5°c"),
  array("temp"=>"Cold",
        "location"=>"Austria",
        "img"=>"https://us.123rf.com/450wm/mitarart/mitarart1507/mitarart150700064/43474095-winter-portrait-of-young-woman-wearing-clothing-for-cold-weather-at-snow-day.jpg?ver=6",
        "info"=>"temperature between 6°c to 10°c"),
  array("temp"=>"Pleasant",
       "location"=>"Costa Rica",
        "img"=>"https://image.pennlive.com/home/penn-media/width600/img/news/photo/2018/07/12/shutterstock-560273278jpg-5a8ecc3443e2ee3f.jpg",
        "info"=>"temperature between 11°c to 15°c"),
  array("temp"=>"warm",
        "location"=>"Tunisia",
        "img"=>"https://s7d2.scene7.com/is/image/TWCNews/warm_weather_jpg",
        "info"=>"temperature between 16°c to 20°c"),
       
  array("temp"=>"Hot",
        "location"=>"Dubai",
        "img"=>"https://image.freepik.com/free-photo/young-man-athlete-received-sun-heat-stroke-headache-guy-holds-his-head-with-his-hands-protects-himself-from-sun-outdoors_117638-306.jpg",
        "info"=>"temperature Above 21°c"),);



if ($celsius>=0 && $celsius<=5){
  echo '
  
  <div class="card w-50" >
  <img class="card-img-top  m-auto" src="'.$temp_messWithImg[0]['img'].'">
      <div class="card-body">
          <h5 class="card-title"> Weather:' . $temp_messWithImg[0]['temp'].' </h5>
          <p class="card-text">Location: ' . $temp_messWithImg[0]['location'] . '</p>
          <p class="card-text">Weather: ' .$temp_messWithImg[0]['info'] . '</p>
      </div>
  </div>
 

';

}elseif ($celsius>=6 && $celsius<=10) {
 

  echo '
  
  <div class="card w-50" >
  <img class="card-img-top  m-auto" src="'.$temp_messWithImg[1]['img'].'">
      <div class="card-body">
          <h5 class="card-title"> Weather:' . $temp_messWithImg[1]['temp'].' </h5>
          <p class="card-text">Location: ' . $temp_messWithImg[1]['location'] . '</p>
          <p class="card-text">Weather: ' .$temp_messWithImg[1]['info'] . '</p>
      </div>
  </div>
 

';

}
elseif ($celsius>=11 && $celsius<=15) {
  echo '
  
  <div class="card w-50 " >
  <img class="card-img-top m-auto" src="'.$temp_messWithImg[2]['img'].'">
      <div class="card-body">
          <h5 class="card-title"> Weather:' . $temp_messWithImg[2]['temp'].' </h5>
          <p class="card-text">Location: ' . $temp_messWithImg[2]['location'] . '</p>
          <p class="card-text">Weather: ' .$temp_messWithImg[2]['info'] . '</p>
      </div>
  </div>
 

';
}
elseif ($celsius>=16 && $celsius<=20) {
  echo '
  
  <div class="card w-50" >
  <img class="card-img-top  m-auto" src="'.$temp_messWithImg[3]['img'].'">
      <div class="card-body">
          <h5 class="card-title"> Weather:' . $temp_messWithImg[3]['temp'].' </h5>
          <p class="card-text">Location: ' . $temp_messWithImg[3]['location'] . '</p>
          <p class="card-text">Weather: ' .$temp_messWithImg[3]['info'] . '</p>
      </div>
  </div>
 

';
}
elseif ($celsius>=21) {
  echo '
  
  <div class="card w-50" >
  <img class="card-img-top  m-auto" src="'.$temp_messWithImg[4]['img'].'">
      <div class="card-body">
          <h5 class="card-title"> Weather:' . $temp_messWithImg[4]['temp'].' </h5>
          <p class="card-text">Location: ' . $temp_messWithImg[4]['location'] . '</p>
          <p class="card-text">Weather: ' .$temp_messWithImg[4]['info'] . '</p>
      </div>
  </div>
 

';
}


				?>
		
  
  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   
  </body>
</html>