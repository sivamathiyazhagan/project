<?php 
ob_start();
  include_once 'db.php';

extract($_POST);

$ffile=$_FILES['file']['name'];

$move=move_uploaded_file($_FILES['file']['tmp_name'],
                "e_file/".$ffile);

function encryptData($value){
   $key = "top secret key";
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return $crypttext;
}

function decryptData($value){
   $key = "top secret key";
   $crypttext = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
   return trim($decrypttext);
} 



                
$filename = "file/".$ffile;
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));


$EncryptedData=encryptData($contents);

//$DecryptedData=decryptData($EncryptedData);

$put=file_put_contents($filename,$EncryptedData);



    


//$qry=mysql_query("update emp_data set status=1 where cid='$cid' ");


if (file_exists($filename)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);
  
    exit;
}

  





?>