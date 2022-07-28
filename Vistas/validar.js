const nombre = document.getElementById("nom")
const apellidoap = document.getElementById("ap")
const apellidoam = document.getElementById("am")
const correo = document.getElementById("co")
const contraseña = document.getElementById("con")
const formulario = document.getElementById("formulario")
const parrafo = document.getElementById("respuesta")

formulario.addEventListener("submit", e => {
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    let nonumeros = /^[A-Za-z\s]+$/

    var regexpass = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i

    parrafo.innerHTML = ""
    if (!nonumeros.test(nombre.value)) {
        warnings += `El nombre no es valido <br>`
        entrar = true
    }
    if (!nonumeros.test(apellidoap.value) || !nonumeros.test(apellidoam.value)) {
        warnings += `Uno de los apellidos no es valido <br>`
        entrar = true
    }
    if (!regexEmail.test(correo.value)) {
        warnings += `El correo no es valido <br>`
        entrar = true
    }
    if (!regexpass.test(contraseña.value)) {
        warnings += `La contraseña no es valida <br>`
        entrar = true
    }
    if (entrar) {
        parrafo.innerHTML = ` 
            <div class="alert alert-danger" role = "alert">`
            + warnings +
            `</div > 
            `

    } else {
        var datos = new FormData(formulario);
        fetch('../Servidor/insertarusu.php', {
            method: 'POST',
            body: datos
        })
        parrafo.innerHTML = `
            <div class="alert alert-info" role = "alert" >
					Registro Existoso
	            </div >`

        window.location = "Usuarios.php";


    }

})