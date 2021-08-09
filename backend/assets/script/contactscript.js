
function getdata(){
const Nom = document.getElementById("form_name").value;
const Prenom= document.getElementById("form_lastname").value;
const Email=document.getElementById("form_email").value;
const Besoin=document.getElementById("form_need").value;
const Message =document.getElementById("form_message").value;
let form = {
        "Nom":Nom,
        "Prenom":Prenom,
        "Email":Email,
        "Besoin":Besoin,
        "Message":Message
}
    fetch("http://localhost/Fill-Rouge/backend/contact/create",
    {
        body: JSON.stringify(form),
        method: "post"
    });

    }
    

