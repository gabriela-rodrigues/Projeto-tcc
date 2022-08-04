$(document).ready(function() {
    $('#example').DataTable();
} );
    function guardarDato() {
        const nombre = document.getElementById("nombre").value;
        const movil = document.getElementById("movil").value;
        localStorage.setItem(nombre, movil);
        document.getElementById("nombre").value = "";
        document.getElementById("movil").value = "";
        actualizarDatos();
    }
    function recuperarDato() {
        const nombre = document.getElementById("nombre").value;
        localStorage.getItem(nombre);
        document.getElementById("movil").value = localStorage.getItem(nombre);
    }
    function eliminarDato() {
        const nombre = document.getElementById("nombre").value;
        localStorage.removeItem(nombre);
        actualizarDatos();
    }
    function eliminarTodo() {
        localStorage.clear();
        actualizarDatos();
    }
    function actualizarDatos() {
        let pares = "";
        if (localStorage.length === 0) {
            pares += '<li class="list-group-item">Vacío</li>';
        } else {
            for (let i = 0; i <= localStorage.length - 1; i++) {
                const key = localStorage.key(i);
                pares += `<li class="list-group-item"><span class="badge badge-info">${localStorage.getItem(key)}</span>${key}</li>`;
            }
        }
        document.getElementById('contactos').innerHTML = pares;
    }


actualizarDatos()