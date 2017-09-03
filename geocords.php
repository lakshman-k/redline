<?php
// geocoordinates code
try{
  // $address=$address;
  $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');

  // Convert the JSON to an array
  $geo = json_decode($geo, true);

  if ($geo['status'] == 'OK') {
    // Get Lat & Long

    $latitude = $geo['results'][0]['geometry']['location']['lat'];
    $longitude = $geo['results'][0]['geometry']['location']['lng'];
    // echo $latitude;
    // echo $longitude;
  }
  else
  echo "googleapis_error ";
}
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
?>
