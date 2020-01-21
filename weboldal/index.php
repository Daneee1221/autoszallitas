<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<?php
    require "saveuser.php";
?>
<script>
    window.onload=function(){
        document.querySelector("#register").addEventListener("click",register)
    }

    function register(e,$nev)
    {
        e.preventDefault()
        var php = new XMLHttpRequest()
        php.onreadystatechange = function(){
            if(this.status===200 && this.readyState===4){
                    alert(this.response)

            }
        }

        php.open("GET",`register.php?email=${document.querySelector("#email").value}&password=${document.querySelector("#password").value}&nev=${document.querySelector("#nev").value}`,true)
        php.send()
    }

</script>
</head>

<body>

    <form class="box" action="index.php" method="post">
        <p class="regtext">Regisztráció</p>
        <input type="text" id="nev" placeholder="Teljes név">
        <input type="email" id="email" placeholder="Email"> 
        <input type="password" id="password" placeholder="Jelszó">
        <a class="href" href="login.html">Van már fiókod? Lépj be!</a>
        <input type="submit" id="register" value="Regisztráió">
    </form>    
</body>


</html>