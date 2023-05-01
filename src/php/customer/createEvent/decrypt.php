<?php 

$key  = 12378967532123567996431698543254644456648877465511315448875445416148854;


function decrypt_message($encrypted_message, $key) {
    $cipher = "AES-256-CBC";
    $data = base64_decode($encrypted_message);
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = substr($data, 0, $ivlen);
    $ciphertext = substr($data, $ivlen);
    return openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
}

?>