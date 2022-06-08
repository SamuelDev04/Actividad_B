function eraseApren(obj) {
    let codigo = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No podras revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php?ruta=erase&codigo=" + codigo;

            /*swalWithBootstrapButtons.fire(
                'Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )*/
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El registro esta a salvo :)',
                'error'
            )
        }
    })
}

function getDataApren(obj) {
    let codigoApren = obj.children[0].innerHTML;
    let nombreApren = obj.children[1].innerHTML;
    let fechaNaci = obj.children[2].innerHTML;
    let sexoApren = obj.children[3].innerHTML;
    let ciudadApren = obj.children[4].innerHTML;


    document.getElementById('icodeApre').value = codigoApren;
    document.getElementById('inameApre').value = nombreApren;
    document.getElementById('naciApre').value = fechaNaci;
    document.getElementById('sexApren').value = sexoApren;
    document.getElementById('ciuApren').value = ciudadApren;

}