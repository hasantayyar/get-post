<?php

namespace Hasantayyar\GetPost;

include __DIR__ . '/vendor/autoload.php';

$get = new Get("http://ifconfig.me/ip");
$get->setTimeout(10);
$get->setConnectTimeout(10);

echo $get->send();
