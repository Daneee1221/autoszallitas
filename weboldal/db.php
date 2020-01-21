
<?php

require '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile('../serviceaccount.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://autoszallitas-cf551.firebaseio.com')
    ->create();

$db = $firebase->getDatabase();

?>