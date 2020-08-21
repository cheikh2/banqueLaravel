function compteType() {
    //alert ("boooooo");
    let status = document.getElementById("typecomptes_id");

    if (status.value == "1") {
       document.getElementById("datebloc").style.display = "none";
   
    } else if (status.value == "2") {
        document.getElementById("datebloc").style.display = "none";
    }else if (status.value == "3") {
        document.getElementById("datebloc").style.display = "";

    }
}

//     myform.addEventListener("submit", function(e) {
//     /**** Control du numéro agence ****/
//     let myPrenom = document.getElementById("prenom");
//     let prenomRegex = /^[a-zA-Z0-9-]+$/;

//     if (myPrenom.value.trim() == "") {
//         e.preventDefault();
//         alert("Prenom obligatoire");
//     } else if (prenomRegex.test(myPrenom.value) == false) {
//         alert("Champ prenom invalid");
//         e.preventDefault();
//     } else {
//         /**** Control du numéro agence ****/
//         let myNom = document.getElementById("nom");
//         let nomRegex = /^[a-zA-Z0-9-]+$/;
// }