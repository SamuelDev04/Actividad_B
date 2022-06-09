// function showSelected(e){
//     e.preventDefault();
//     /* Para obtener el valor */
//     var cod = document.getElementById("sexApren").value;
    
//     /* Para obtener el texto */
//     var combo = document.getElementById("sexApren");
//     var selected = combo.options[combo.selectedIndex].text;
// }

function fillBook(){    
    var select = document.getElementById('sexApren').value;
    
    switch (select) {
        case 1:
            select = "Mujer";
            return select;
            break;
        case 2:
            select = "Hombre";
            return select;
            break;
        case 3:
            select = "Otro";
            return select;
            break;

    document.getElementById('sexApren').value = select;

    }

 }

function validateApren(e) {
    e.preventDefault();
    formulario = document.getElementById('formuAprendiz');
    nombre = document.getElementById('inameApre');
    fechaNacimiento = document.getElementById('naciApre');
    sexo = document.getElementById('sexApren');
    ciudad = document.getElementById('ciuApren');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value == "") {
        sexo.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value == "") {
        ciudad.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}


if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}

function validateModApren(e) {
    e.preventDefault();
    formulario = document.getElementById('modifiAprendiz');
    codigo = document.getElementById('icodeAprem');
    nombre = document.getElementById('inameAprem');
    fechaNacimiento = document.getElementById('naciAprem');
    sexoApren = document.getElementById('sexAprenm');
    ciudadApren = document.getElementById('ciuAprenm');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexoApren.value == "") {
        sexoApren.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudadApren.value == "") {
        ciudadApren.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}