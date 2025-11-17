const janela = document.querySelector("#janeladeopcoes")
let ativar_display = 0

function logar() {
    let identificacao = document.querySelector("#identificacao").value
    let senha = document.querySelector("#senha").value

    if (identificacao == "aluno" && senha == "1234") {
        window.location.href = "login_aluno.html";
    }
}

function hamburguer() {
    if (ativar_display == 0) {
        janela.style.display = "inherit";
        ativar_display = 1
    } else {
        janela.style.display = "none";
        ativar_display = 0
    }
}

const mes = new Date().getMonth() + 1

const calendario = document.querySelector(".cal")
const criarmes = document.createElement('h4')
criarmes.textContent = "Mês: " + mes
calendario.appendChild(criarmes)
const table = document.querySelector("#table")

let day = 1

function emptydays() {
    
}

while (day <= 30) {
    const criar_linha = document.createElement("tr")
    criar_linha.className = "line"
    for (let i = 0; i < 7; i++) {
        const criar_coluna = document.createElement("td")
        criar_coluna.textContent = day
        criar_coluna.className = "column"
        if(day == 13 || day == 20){
            criar_coluna.style.backgroundColor = "orange"
        }else if(day == 30) {
            criar_coluna.style.backgroundColor = "lightgreen"
        }
        if (day <=30){
           criar_linha.appendChild(criar_coluna) 
        }
        day += 1
    }
    table.appendChild(criar_linha)
}