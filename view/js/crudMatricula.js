function eraseMat(obj) {
    let codigoMatricula = obj.children[0].innerHTML;

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
            window.location = "index.php?ruta=eraseMatricula&codigo=" + codigoMatricula;

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

function getDataMat(obj) {
    let codigoMatricula = obj.children[0].innerHTML;
    let fechaMatricula = obj.children[1].innerHTML;
    let nombreCentro = obj.children[2].innerHTML;
    let costo = obj.children[3].innerHTML;
    let estado = obj.children[4].innerHTML;
    let codigoPrograma = obj.children[5].innerHTML;
    let codigoAprendiz = obj.children[6].innerHTML;


    document.getElementById('codigoMatricula').value = codigoMatricula;
    document.getElementById('fechaMatricula').value = fechaMatricula;
    document.getElementById('nombreCentro').value = nombreCentro;
    document.getElementById('costo').value = costo;
    document.getElementById('estado').value = estado;
    document.getElementById('codigoPrograma').value = codigoPrograma;
    document.getElementById('codigoAprendiz').value = codigoAprendiz;
    
}