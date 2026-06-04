const navbar = document.querySelector("#navbarlateral")
const avisar = document.querySelector("#aviso")
const $html = document.querySelector("html")
const $checkbox = document.querySelector("#checkbox")

let ativar_display = 0
let aviso = 0

// Cadastro 
const btnVerSenha = document.querySelector("#verSenha")
const btnConfirm = document.querySelector("#verSenhaConfirm")

const Id = document.querySelector("#ID")
const labelId = document.querySelector("#labelID")
let validId = false

const senha = document.querySelector("#senha")
const labelSenha = document.querySelector("#labelSenha")
let validSenha = false

const confirmSenha = document.querySelector("#confirmSenha")
const labelConfirmSenha = document.querySelector("#labelConfirmSenha")
let validConfirmSenha = false

const msgError = document.querySelector("#msgError")
const msgSuccess = document.querySelector("#msgSuccess")

if (Id) {
    Id.addEventListener("keyup", ()=>{
        if (Id.value.length <= 1) {
            labelId.setAttribute("style", "color: red")
            labelId.innerHTML = "ID *Insira no mínimo 2 caracteres"
            validId = false
        } else {
            labelId.setAttribute("style", "color: green")
            labelId.innerHTML = "ID"
            validId = true
        }
    })
}

if (senha && labelSenha) {
    senha.addEventListener("keyup", ()=>{
        if (senha.value.length <= 5) {
            labelSenha.setAttribute("style", "color: red")
            labelSenha.innerHTML = "SENHA INVÁLIDA *Insira no mínimo 6 caracteres*"
            validSenha = false
        } else {
            labelSenha.setAttribute("style", "color: green")
            labelSenha.innerHTML = "Senha"
            validSenha = true
        }
    })
}

if (confirmSenha) {
    confirmSenha.addEventListener("keyup", ()=>{
        if (confirmSenha.value.length <= 5) {
            labelConfirmSenha.setAttribute("style", "color: red")
            labelConfirmSenha.innerHTML = "As senhas não conferem."
            validConfirmSenha = false
        } else {
            labelConfirmSenha.setAttribute("style", "color: green")
            labelConfirmSenha.innerHTML = "Confirmar Senha"
            validConfirmSenha = true
        }
    })
}

function cadastrar() {
    if (validId && validSenha && validConfirmSenha) {
        let listaUser = JSON.parse(localStorage.getItem("listaUser") || "[]")

        listaUser.push({
            IdCad: Id.value,
            senhaCad: senha.value
        })

        localStorage.setItem("listaUser", JSON.stringify(listaUser))

        msgSuccess.setAttribute("style", "display: block")
        msgSuccess.innerHTML = "<strong>Cadastrando usuário...</strong>"
        msgError.setAttribute("style", "display: none")
        msgError.innerHTML = ""

        setTimeout(() => {
            window.location.href = "cadastro.html"
        }, 3000)

    } else {
        msgError.setAttribute("style", "display: block")
        msgError.innerHTML = "<strong>Preencha todos os campos corretamente!</strong>"
        msgSuccess.setAttribute("style", "display: none")
    }
}

if (btnVerSenha) {
    btnVerSenha.addEventListener("click", ()=>{
        let inputSenha = document.querySelector("#senha")

        if (inputSenha.getAttribute("type") == "password") {
            inputSenha.setAttribute("type", "text")
        } else {
            inputSenha.setAttribute("type", "password")
        }
    })
}

if (btnConfirm) {
    btnConfirm.addEventListener("click", ()=>{
        let inputConfirmSenha = document.querySelector("#confirmSenha")

        if (inputConfirmSenha.getAttribute("type") == "password") {
            inputConfirmSenha.setAttribute("type", "text")
        } else {
            inputConfirmSenha.setAttribute("type", "password")
        }
    })
}

//Login
const btn2 = document.querySelector(".fa-eye")

if (btn2) {
    btn2.addEventListener("click", ()=>{
        let inputSenha = document.querySelector("#senha")

        if (inputSenha.getAttribute("type") == "password") {
            inputSenha.setAttribute("type", "text")
        } else {
            inputSenha.setAttribute("type", "password")
        }
    })
}

function entrar(){
    const idInput = document.querySelector("#id")
    const senhaInput = document.querySelector("#senha")
    const msgErrorLogin = document.querySelector("#msgError")

    if (!idInput || !senhaInput) return

    const id = idInput.value
    const senhaLogin = senhaInput.value

    let listaUser = JSON.parse(localStorage.getItem("listaUser") || "[]")
    let userValid = null

    listaUser.forEach((item) => {
        if (id == item.IdCad && senhaLogin == item.senhaCad) {
            userValid = item
        }
    })

    if (userValid) {
        let mathRandom = Math.random().toString(16).substr(2)
        let token = mathRandom + mathRandom

        localStorage.setItem("token", token)
        localStorage.setItem("userLogado", JSON.stringify(userValid))
        window.location.href = "login_aluno.html"
    } else {
        if (msgErrorLogin) {
            msgErrorLogin.setAttribute("style", "display: block")
            msgErrorLogin.innerHTML = "<strong>ID ou senha incorretos</strong>"
        }
    }
}

document.addEventListener('keydown', function(k){
    if(k.key == "Enter") {
        entrar()
    }
})

function perfil(){
    window.location.href = "perfil.html"
}

function logout() {
    let escolha = confirm("Deseja efetuar logout?")

    if (escolha) {
        window.location.href = "index.html"
    }
}

function hamburguer() {
    if (ativar_display == 0) {
        navbar.style.width = '250px'
        navbar.className = 'ativado'
        ativar_display = 1
    } else {
        navbar.style.width = '38px'
        navbar.className = 'none'
        ativar_display = 0
    }
}

//Calendário My
const table = document.querySelector("#table")

if (table) {
    const mes = new Date().getMonth() + 1
    const caption = document.createElement("caption")
    caption.textContent = "Mês: " + mes
    table.prepend(caption)

    let day = 1
    while (day <= 30) {
        const criar_linha = document.createElement("tr")
        criar_linha.className = "line"
        for (let i = 0; i < 7; i++) {
            const criar_coluna = document.createElement("td")
            criar_coluna.textContent = day
            criar_coluna.className = "column"
            if(day == 13 || day == 20){
                criar_coluna.style.backgroundColor = "orange"
            } else if(day == 30) {
                criar_coluna.style.backgroundColor = "lightgreen"
            }
            if (day <= 30){
                criar_linha.appendChild(criar_coluna)
            }
            day += 1
        }
        table.appendChild(criar_linha)
    }
}

//Modo escuro
const modoescuro = document.getElementById("modoescuro")
const body = document.querySelector("body")

if (modoescuro) {
    modoescuro.addEventListener("click", ()=>{
        modoescuro.classList.toggle("dark")
        body.classList.toggle("dark")
    })
}
