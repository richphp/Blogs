<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h4>For YouTube link click on image</h4>        
<div class="separator"><a target="_blank" href="https://youtu.be/74-Pd7B9fw0"><img alt="" border="0" width="400" src="images/enc_dec.png"/></a></div>
<h4>Cryptography Extensions are called OpenSSL to make it possible to encrypt and decrypt strings or integers in PHP.</h4>
<b>Syntax:</b>

<b>Parameters:</b>
<ul>
<li>$data: User string or data or integer value.</li>
<li>$cipher_method: You can get all cipher method using openssl_get_cipher_methods() function.</li>
<li>$key: It holds the encryption key.</li>
<li>$options: It holds the flags OPENSSL_RAW_DATA and OPENSSL_ZERO_PADDING.</li>
<li>$iv: It holds the initialization vector which is not NULL and 16 characters long or you can use digits.</li>
<li>$tag: It holds the authentication tag which is passed by reference when using AEAD cipher mode (GCM or CCM).</li>
<li>$additional: Additional authentication data.</li>
<li>$tag_length: Length of the authentication tag. The length of authentication tag lies between 4 to 16 for GCM mode.</li>
</ul>

<pre>
openssl_encrypt($data, $cipher_method, $key,
            $options = 0, $iv = 16, $tag= NULL,
            $additional, $tag_length = 16 )
</pre>
<b>Output:</b>
<p>It returns the encrypted string on success</p>

<pre>
openssl_decrypt($data, $cipher_method, $key,
            $options = 0, $iv = 16, $tag= NULL,
            $additional, $tag_length = 16 )
</pre>
<b>Output:</b>
<p>It returns the decrypted string on success</p>

<h4>Code</h4>
<pre>
class secure{
// cipher Method
private static $ciphering = "aes-256-cbc-hmac-sha256";
//It holds the bitwise disjunction of the flags OPENSSL_RAW_DATA and OPENSSL_ZERO_PADDING. 
private static $options = 0;
//It holds the encryption key.
private static $decryption_encryption_key = "Any secrete key";
// Non-NULL Initialization Vector for encryption 
private static $decryption_encryption_iv = '1234567891011121'; 

public static function encrypt($data){
static $encrypt;

$encryption = openssl_encrypt($data, self::$ciphering, self::$decryption_encryption_key, self::$options, self::$decryption_encryption_iv);

$encrypt = base64_encode($encryption);

return $encrypt;
}

public static function decrypt($encryptData){
static $decrypt;
$data_rand = base64_decode($encryptData);

$decrypt = openssl_decrypt ($data_rand, self::$ciphering, self::$decryption_encryption_key, self::$options, self::$decryption_encryption_iv); 

return $decrypt;
} 
}
</pre>

<b>Call Methods:</b>
<pre>
$encrypt_data = secure::encrypt('Hello World');
echo $encrypt_data . "<br />";
echo secure::decrypt($encrypt_data);
</pre>

<b>Output:</b>
<p>QTg2SUh2RWFCSnhvWExPRjNiOWVNdz09</p>
<p>Hello World</p>
</body>
</html>