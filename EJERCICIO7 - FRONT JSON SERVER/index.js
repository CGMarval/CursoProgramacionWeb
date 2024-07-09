fetch("http://localhost:3000/alumnos")
.then(response => response.json())
.then(datos => {
    datos.forEach(elemento => {
        cargaAlumno(elemento);
    });
    // console.log(datos);
})

function cargaAlumno(perfil){
    // creamos la fila (una por alumno)
    let fila = document.createElement("div");
    fila.classList.add("row", "align-items-center"); // añadimos las clases al contenedor div de la fila

    /////////////////////////////////////////////////////////////
    /////////////////// elemento IMG ///////////////////////////

    // creamos la columna de la foto
    let colFoto = document.createElement("div");
    colFoto.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento img para asignarle la imagen y atributos
    let foto = document.createElement("img");
    foto.src = "./imagenes/fotos/"+perfil.nombre + ".jpg"; //asignamos el archivo jpg o imagen al elemento img
    foto.onerror = () => {foto.src = "./imagenes/fotos/nofoto.webp"}; // en caso de que no se consiga el nombre de la imagen, se asigna una por defecto
    foto.style.width = "80px";
    foto.classList.add("rounded-circle");

    // ahora concatenamos los nodos creados en el arbol del DOM
    colFoto.appendChild(foto);
    fila.appendChild(colFoto);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    /////////////////// elemento nombre /////////////////////////

    // creamos la columna del nombre
    let colNombre = document.createElement("div");
    colNombre.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento spam para mostrar el nombre del alumno
    let nombre = document.createElement("spam");
    nombre.innerHTML = perfil.nombre;

    // ahora concatenamos los nodos creados en el arbol del DOM
    colNombre.appendChild(nombre);
    fila.appendChild(colNombre);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    /////////////////// elemento apellidos //////////////////////

    // creamos la columna de los apellidos
    let colApellidos = document.createElement("div");
    colApellidos.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento spam para mostrar los apellidos del alumno
    let apellidos = document.createElement("spam");
    apellidos.innerHTML = perfil.apellidos;

    // ahora concatenamos los nodos creados en el arbol del DOM
    colApellidos.appendChild(apellidos);
    fila.appendChild(colApellidos);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    //////////////////// elemento Email ////////////////////////

    // creamos la columna del Email
    let colEmail = document.createElement("div");
    colEmail.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento spam para mostrar los apellidos del alumno
    let email = document.createElement("spam");
    email.innerHTML = perfil.email;

    // ahora concatenamos los nodos creados en el arbol del DOM
    colEmail.appendChild(email);
    fila.appendChild(colEmail);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    /////////////////// elemento Telefono //////////////////////

    // creamos la columna del Email
    let colTelefono = document.createElement("div");
    colTelefono.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento spam para mostrar los apellidos del alumno
    let telefono = document.createElement("spam");
    telefono.innerHTML = perfil.telefono;

    // ahora concatenamos los nodos creados en el arbol del DOM
    colTelefono.appendChild(telefono);
    fila.appendChild(colTelefono);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    ///////////////////// elemento Web /////////////////////////

    // creamos la columna del Web
    let colWeb = document.createElement("div");
    colWeb.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento spam para mostrar los apellidos del alumno
    let web = document.createElement("spam");
    web.innerHTML = perfil.web;

    // ahora concatenamos los nodos creados en el arbol del DOM
    colWeb.appendChild(web);
    fila.appendChild(colWeb);
    // document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////
    ////////////////// elemento iconos /////////////////////////

    // creamos la columna del Web
    let colIconos = document.createElement("div");
    colIconos.classList.add("col"); // añadimos las clases al contenedor div de la columna

    // creamos el elemento lista desordenada para contener los itemns modificar y eliminar
    let lista = document.createElement("ul");
    lista.classList.add("d-flex");

    // creamos los items de la lista
    let elementoModificar = document.createElement("li");
    let modificar = document.createElement("i");
    modificar.classList.add("fa-solid","fa-pencil", "fa-lg");
    modificar.onclick = fModificar;

    let elementoEliminar = document.createElement("li");
    let eliminar = document.createElement("i");
    eliminar.classList.add("fa-solid","fa-trash-can", "fa-lg");

    // ahora concatenamos los nodos creados en el arbol del DOM
    elementoModificar.appendChild(modificar);
    lista.appendChild(elementoModificar);
    elementoEliminar.appendChild(eliminar);
    lista.appendChild(elementoEliminar);
    colIconos.appendChild(lista);
    fila.appendChild(colIconos);

    document.getElementById("contenedor").appendChild(fila);

    ////////////////////////////////////////////////////////////


    function fModificar(){
        document.getElementById("cuerpo")
    }

}
