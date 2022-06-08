function validate(e) {
    e.preventDefault();
    formulario = document.getElementById('formu');
    nombre = document.getElementById('iname');
    apellido = document.getElementById('iape');
    usuario = document.getElementById('iuser');
    clave = document.getElementById('icontra');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value == "") {
        apellido.style.borderColor = "red";
        ohSnap('Ingrese su apellido...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value == "") {
        usuario.style.borderColor = "red";
        ohSnap('Ingrese su usuario...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value == "") {
        clave.style.borderColor = "red";
        ohSnap('Ingrese su contraseña...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}

function validateMatricula(e) {
    e.preventDefault();
    formulario = document.getElementById('formMatricula');
    fechaMatricula = document.getElementById('fechaMatricula');
    nombreCentro = document.getElementById('nombreCentro');
    costo = document.getElementById('costo');
    estado = document.getElementById('estado');
    codigoPrograma = document.getElementById('codigoPrograma');
    codigoAprendiz = document.getElementById('codigoAprendiz');

    lVali = true;

    if (fechaMatricula.value == "") {
        fechaMatricula.style.borderColor = "red";
        ohSnap('Ingrese la fecha de la matricula...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (nombreCentro.value == "") {
        nombreCentro.style.borderColor = "red";
        ohSnap('Ingrese el nombre del centro...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (costo.value == "") {
        costo.style.borderColor = "red";
        ohSnap('Ingrese el costo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (estado.value == "") {
        estado.style.borderColor = "red";
        ohSnap('Ingrese el estado...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (codigoPrograma.value == "") {
        codigoPrograma.style.borderColor = "red";
        ohSnap('Ingrese el codigo del programa...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (codigoAprendiz.value == "") {
        codigoAprendiz.style.borderColor = "red";
        ohSnap('Ingrese el codigo del aprendiz...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }

}


if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}

function validateMod(e) {
    e.preventDefault();
    formulario = document.getElementById('modifiUsuario');
    codigo = document.getElementById('icodem');
    nombre = document.getElementById('inamem');
    apellido = document.getElementById('iapem');
    usuario = document.getElementById('iuserm');
    clave = document.getElementById('icontram');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value == "") {
        apellido.style.borderColor = "red";
        ohSnap('Ingrese su apellido...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value == "") {
        usuario.style.borderColor = "red";
        ohSnap('Ingrese su usuario...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value == "") {
        clave.style.borderColor = "red";
        ohSnap('Ingrese su contraseña...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}


//Otra solucion que le habia dado

/*document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("formulario").addEventListener('submit', validate);
});

function validateAll() {
    validateName();
    validateApe();
    validateUser();
    validatePass();

    this.submit();
}

function validateName(e) {
    e.preventDefault();

    let name = document.getElementById('iname').value;
    if (name.length == 0) {
        alert("Nombre en blanco");
        return;
    }
}
function validateApe(e) {
    e.preventDefault();

    let ape = document.getElementById('iape').value;
    if (ape.length == 0) {
        alert("Apellido en blanco");
        return;
    }
}
function validateUser(e) {
    e.preventDefault();

    let user = document.getElementById('iuser').value;
    if (user.length == 0) {
        alert("Usuario en blanco");
        return;
    }
}
function validatePass(e) {
    e.preventDefault();

    let pass = document.getElementById('ipass').value;
    if (pass.length == 0) {
        alert("Contraseña en blanco");
        return;
    }
}*/