<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
<script>
<?php
    use Kreait\Firebase\ServiceAccount;
    use MrShan0\PHPFirestore\FirestoreClient;
    require "db.php";
class logged{
    function loggeduser(){
        
    try
    {
        $serviceAccount = ServiceAccount::fromJsonFile('../serviceaccount.json');
    
        $firestore = new FirestoreClient($serviceAccount->getProjectId(),'AIzaSyB5odF1Yz4zE5qqV35QgGYhH8dtW1dGdL8',[
            'database' => '(default)',
        ]);
        $id = $firestore->authenticator()->getAuthToken();
        $userRef = $firestore->collection('felhasznalok');
        $query = $userRef->where('id', '=', $id);
        $snapshot = $query->documents();
        foreach ($snapshot as $document) {
            return printf(PHP_EOL, $document->nev());
        }
    }
    catch(Exception $e){
        echo $e ->getMessage();
    }
}
}
?>

</script>
</head>

<body>
    <header>
        <div>
            <ul>
                <li><a href="#">Kezdőlap</a></li>
                <li><a href="rendeles.php">Rendelés</a></li>
                <li><a href="#">Referencia</a></li>
                <li><a href="#">Kapcsolat</a></li>
            </ul>
        </div>
    </header> 
    <script>
        var config = {
            apiKey: "AIzaSyB5odF1Yz4zE5qqV35QgGYhH8dtW1dGdL8",
            authDomain: "autoszallitas-cf551.firebaseapp.com",
            databaseURL: "https://autoszallitas-cf551.firebaseio.com",
            projectId: "autoszallitas-cf551",
            storageBucket: "autoszallitas-cf551.appspot.com",
            messagingSenderId: "597648555790",
            appId: "1:597648555790:web:fac309f772a0bd2e4f215f",
            measurementId: "G-032SF3SNGY"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        const auth= firebase.auth();
        const logout = document.querySelector('#logout');
        logout.addEventListener('click',(e) => {
            e.preventDefault();
            auth.signOut().then(()=>{
                console.log('Felhasználó kilépett');
                window.location.href="login.php";
            });
        });
        function kilepes(){
				alert("Sikeresen kilépett");
			}
    </script>
    <form class="box2" id="userform"action="login.html" method="post">
        <p class="loggedtext">Bejelentkezve mint</p>
        <p class="loggedtext" id="name"> <?php echo $var ?> </p>
        <input type="submit" onClick='kilepes()' id="logout" value="Kijelentkezés">
    </form>  
        
</body>


</html>