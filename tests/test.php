<?php

namespace Hasantayyar\Synonyms; 

include __DIR__.'/../vendor/autoload.php';

$syn = new Synonyms('test');
$syn->getThesaurus();
