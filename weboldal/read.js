function getdata()
{
    /*var database = firebase.database();
    var userId = firebase.auth().currentUser.uid;
    return firebase.database().ref('/felhasznalok/' + userId).once('value').then(function(snapshot) {
        var nev = (snapshot.val() && snapshot.val().nev) || 'Anonymous';
        $.post('main.php', {variable: nev});
      });*/
    /*var user=document.getElementById("user").value;
    firebase.database().ref('felhasznalok/'+user).once('value').then(function(snapshot){
        var name=snapshot.val().nev;

        document.getElementById('name').innerHTML=name;
    });*/

    firebase.auth().onAuthStateChanged(user => {
        if (user) {
            getUserData(user.uid)
        }
    })

}
function getUserData(id) {
    firebase.database().ref('felhasznalok/' + id).once("value", snap => {
        console.log(snap.val())
    })
}