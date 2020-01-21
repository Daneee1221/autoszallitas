
<?php
    use Kreait\Firebase\ServiceAccount;
    use MrShan0\PHPFirestore\FirestoreClient;
function newuser($id,$nev){


    $serviceAccount = ServiceAccount::fromJsonFile("../serviceaccount.json");

    $firestore = new FirestoreClient($serviceAccount->getProjectId(),"AIzaSyB5odF1Yz4zE5qqV35QgGYhH8dtW1dGdL8",[
        'database' => '(default)',
    ]);
    $firestore->addDocument("felhasznalok",[
        'admin'=> false,
        'id'=> $id,
        'nev'=> $nev
    ]);
}
?>