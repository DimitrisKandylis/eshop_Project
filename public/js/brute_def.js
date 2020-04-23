document.getElementById("contact_form").addEventListener("submit", bruteDef);

function bruteDef() {
  var email = document.getElementById('email_input').value;
  var message = document.getElementById('message_input').value;

  if(message == "") {
    alert("fuckoff");
    return false;
  }
}
