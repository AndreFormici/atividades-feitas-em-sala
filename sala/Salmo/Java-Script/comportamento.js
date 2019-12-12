function mudatype(id, idbtn){
    var elemento = document.getElementById(id);
    var text = document.getElementById(idbtn);
    if(elemento.type == "text"){
        elemento.type = "password";
        text.innerHTML = "@";
    }
    else{
        elemento.type ="text";
        text.innerHTML = "#";
    }
}
function testaSenha(){
    // Validando a igualdade das senhas digitadas @
    var senha = document.getElementById("senha").value;
    var confirma = document.getElementById("confirmacao").value;
    var erro = document.getElementById("errosenha");
    var msgerro = "As senhas estão diferentes";
    if(senha != confirma) {
        alert(msgerro);
        erro.innerHTML = msgerro;
    }
    else{
        erro.innerHTML = "";
    }
}
function validacao(){
    
    var msg = "";
    var autorizacao = false;

    // Validando caixa de texto do nome @
    var nome = document.getElementById("nome").value;
    if(nome.length < 1){
        msg += "\r\n- O campo nome é de preenchimento obrigatório.";
    }
    
    // Validando idade > 18 && < 120 @
    var idade = document.getElementById("idade").value;
    if(idade < 18 || idade > 120){
        msg += "\r\n- O campo idade deve ser preenchido com um valor entre 18 e 120";
    }

    // Validando a seleção das áreas de interesse @
    var areas = document.getElementsByName("areas[]");
    var contador = 0;
    var i;
    for(i = 0; i < areas.length; i++){
        if(areas[i].checked) contador++;
    }
    if(contador < 1){
        msg += "\r\n- Selecione pelo menos uma área de interesse."
    }

    if(msg == ""){
        autorizacao = true;
    }else{
        alert("Verifique os seguntes campos: " + msg);
    }
    return autorizacao;
}
function showCB(){
    // Validando o botão de mostrar quais checkbox foram selecionads e se foram selecionadas @
    var conta = document.getElementsByName("areas[]");
    var msg = "";
    var i;
    for(i = 0; i < conta.length; i++){
        if(conta[i].checked){
            msg += "\r\n- " + conta[i].value;
        }
    }
    if(msg == ""){
        msg = "Nenhuma área de interesse foi selecionada.";
    }else{
        msg = "Áreas selecionadas: " + msg;
    }
    alert(msg);
}