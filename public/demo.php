<?php

require_once 'SM4.php';

$sm4 = new \SM4();
//16字节的HEX编码字符串 32个hex字符
$re = $sm4->setKey('0123456789abcdeffedcba9876543210')
    ->encrypt('0123456789abcdeffedcba987654321p');
print_r($re);
echo '-----';
$re1 = $sm4->decrypt($re);
print_r($re1);


?>