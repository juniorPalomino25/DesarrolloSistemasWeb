function validar() {
  var Email, Contrasena;
  Email = document.getElementById("Email").value;
  Contrasena = document.getElementById("Contrasena").value;
  if (Email == "" || Contrasena == "") {
    alert("Campos obligatorios");
    return false;
  } else if(Contrasena.length<8){
    alert("Contrasena muy corta");
    return false;
    }else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{8,100}$/', $form_state['values']['pass'])) {
      alert('Contrasena', t('Contrasena debe contener 8 caracteres de letras, numeros y caracter especial minimo'));
    }

}
