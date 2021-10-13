<?php
                          
                          $url = 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion';
                          $parameters = [
                            'amount' => '10',
                            'symbol' => 'USD',
                            'convert' => 'BTC'
                          ];
                          
                          $headers = [
                            'Accepts: application/json',
                            'X-CMC_PRO_API_KEY: 520f4f7a-6d18-4db0-84cd-483a28eaa755'
                          ];
                          $qs = http_build_query($parameters); // query string encode the parameters
                          $request = "{$url}?{$qs}"; // create the request URL
                          
                          
                          $curl = curl_init(); // Get cURL resource
                          // Set cURL options
                          curl_setopt_array($curl, array(
                            CURLOPT_URL => $request,            // set the request URL
                            CURLOPT_HTTPHEADER => $headers,     // set the headers 
                            CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
                          ));
                          
                          $response = curl_exec($curl);
                           // Send the request, save the response
                          $price = json_decode($response,true); // print json decoded response
                          echo $price["data"]["quote"]["BTC"]["price"];
                          curl_close($curl); // Close request
                      
                       
                          ?>