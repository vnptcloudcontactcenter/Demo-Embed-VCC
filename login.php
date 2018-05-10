<?php
    include("lib/BeforeValidException.php");
    include("lib/ExpiredException.php");
    include("lib/JWT.php");
    include("lib/SignatureInvalidException.php");
    use \Firebase\JWT\JWT;
    
    $domain = "{{domain}}";
    $key = "{{access_token}}";
    $payload = array(
            "ipphone" => "{{agent_id}}",
            "expired" => "2018-07-30 00:00:00"  //thời gian token hết hạn
    );
    $token = JWT::encode($payload, $key);
    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'https://web.vcc-vinaphone.com.vn/{{domain}}/thirdParty/login');
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array('token' => $token));
    $buffer = curl_exec($curl_handle);					
    curl_close($curl_handle);

    echo $token;
?>