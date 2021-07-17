<?php
//code zum erstellen der karten
// todo: zufalls generator,.....
// 

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.opensea.io/api/v1/assets?owner=0x887ca19b435f17a4f635bcee3a0b7ef73559bf68&asset_contract_address=0xbc4ca0eda7647a8ab7c2061c2e118a18a936f13d&order_direction=desc&offset=0&limit=20",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}


$boi = json_decode($response);
$image = $boi->assets[0]->image_original_url;
$id = $boi->assets[0]->token_id;                                                  

echo "<div id=apeProfile >";
echo '<img class="apeImage" src='. $image . '>';
echo  '<div>'. $id. '</div>';

for ($i = 0; $i < count($boi->assets[0]->traits); $i++) {
    
    $type = $boi->assets[0]->traits[$i]->trait_type;
    $typeValue = $boi->assets[0]->traits[$i]->value;
    $typeCount = $boi->assets[0]->traits[$i]->trait_count;
    

    echo '<div class="apeInfo" >';
    
    echo  '<div>'. $type. '</div>';
    echo  '<div>'. $typeValue. '</div>';
    echo  '<div>'. $typeCount. '</div>';
    echo '</div>';
       
}
echo "</div>"; 





?>