<?php 


include 'encrypt.php';
include 'decrypt.php';

$data = 200;
$key  = 12378967532123567996431698543254644456648877465511315448875445416148854;
//$key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);


$encp_msg = encrypt_message($data,$key);
echo $encp_msg;

echo "<br>";

$decp_msg = decrypt_message($encp_msg,$key);
echo $decp_msg;
?>