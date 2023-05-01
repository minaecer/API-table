<?php
$curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => "{\"username\":\"365\", \"password\":\"1\"}",
                      CURLOPT_HTTPHEADER => [
                        "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
                        "Content-Type: application/json"
                      ],
                    ]);
                    $json_response = json_decode($response, true);
                    $access_token = $json_response['oauth']['access_token'];
                    $expires_in = $json_response['oauth']['expires_in'];
                    $token_expiry = time() + $expires_in;
                    $_SESSION['access_token_exp_time'] = $token_expiry;
                    $_SESSION['access_token'] = $access_token;
                 
                    $url = "https://api.baubuddy.de/dev/index.php/v1/tasks/select";
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                      "Authorization: Bearer ".$_SESSION['access_token']
                    ));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
$json = json_decode($response,true);

    foreach($json as $key ){

                    
                     
                        echo "<tr>
                        <td>".$key['task']."</td>
                        <td>".$key['title']."</td>
                        <td>".$key['description']."</td>
                        <td style='background-color:".$key['colorCode']."'>".$key['colorCode']."</td>
                        </tr>";
    
    }
 