const janela = document.querySelector("#janeladeopcoes")
let ativar_display = 0

function logar() {
    let identificacao = document.querySelector("#identificacao").value
    let senha = document.querySelector("#senha").value

    if (identificacao == "kaua" && senha == "1234"){
        window.location.href = "login_aluno.html";
    }
}

function hamburguer(){
    if (ativar_display == 0) {
        janela.style.display = "inherit";
        ativar_display = 1
    }else{
        janela.style.display = "none";
        ativar_display = 0
    }
}