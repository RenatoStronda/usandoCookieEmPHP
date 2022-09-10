function validaForm() {
    if(document.getElementsByName("email")[0].value=="") {
        alert("Por Favor, Preencha O Campo Email!");
        document.getElementsByName("email")[0].focus();
        return false;
    }
    let senha = document.getElementsByName("senha")[0].value;
    if(senha == "") {
        alert("Por Favor, Preencha O Campo Senha!");
        document.getElementsByName("senha")[0].focus();
        return false;
    }
}