var propiedades;

fetch("http://localhost:3000/casas")
.then(response => response.json())
.then(datos => {
    propiedades = datos;
    datos.forEach(elemento => {
        cargaPropiedad(elemento);
    });
    // console.log(datos);
})



// -----------------------------------------------
// Cargamos una propiedad en pantalla
// -----------------------------------------------
function cargaPropiedad(propiedad) {
    let tarjeta = document.createElement("div");
    tarjeta.classList.add("card", "text-center");
    tarjeta.style = "width: 45rem;";

    let foto = document.createElement("img");
    foto.src = "./imagenes/casas/"+"casa"+propiedad.id + ".jpg";
    foto.onerror = () => {foto.src = "./imagenes/casas/nocasa.png"};
    foto.classList.add("card-img-top", "img-fluid");
    

    let cuerpo = document.createElement("div");
    cuerpo.classList.add("card-body", "py-0");

    let descripcion = document.createElement("h5");
    descripcion.classList.add("card-title");
    descripcion.innerHTML = propiedad.descripcion;

    let precio = document.createElement ("p");
    precio.classList.add("card-text");
    precio.innerHTML = propiedad.precio+"€";

    let boton = document.createElement("a");
    // boton.href.add("#");
    boton.classList.add("btn" , "btn-primary");
    boton.innerHTML = "Ver Propiedad";
    ////////////////////////////////////
    // propiedades para el boton modal//
    boton.dataset.bsTarget = "#exampleModal"
    boton.dataset.bsToggle = "modal";
    ////////////////////////////////////
    boton.onclick = function() {
        muestraPropiedad(propiedad);
    };

    // concatenamos los nodos al div cuerpo de la tarjeta
    cuerpo.appendChild(descripcion);
    cuerpo.appendChild(precio);
    cuerpo.appendChild(boton);

    // Concatenamos ahora el div cuerpo y la imagen al div tarjeta
    tarjeta.appendChild(foto);
    tarjeta.appendChild(cuerpo);

    // concatenamos al elemento o nodo padre 
    document.getElementById("contenedor").appendChild(tarjeta);
    
  }


/////////////////////////////////////////////////////////////////////////////
////// funcion que permite mostrar todos los datos de una propiedad  ///////
function muestraPropiedad(propiedad){
    document.getElementById("contenedor-modal").innerHTML="";
    let detallesPropiedad = document.createElement("div");

    let descripcion = document.createElement("p");
    descripcion.innerHTML = "Descripción:  "+propiedad.descripcion;

    let año = document.createElement("p");
    año.innerHTML = "Año:  "+propiedad.año;

    let garaje = document.createElement("p");
    garaje.innerHTML = "Garaje:  "+propiedad.garaje;

    let dormitorios = document.createElement("p");
    dormitorios.innerHTML = "Dormitorios:  "+propiedad.dormitorios;

    let baños = document.createElement("p");
    baños.innerHTML = "Baños:  "+propiedad.baños;

    let superficie = document.createElement("p");
    superficie.innerHTML = "Superficie:  "+propiedad.superficie+"m2";

    let precio = document.createElement("p");
    precio.innerHTML = "Precio: "+propiedad.precio+"€";

    detallesPropiedad.appendChild(descripcion);
    detallesPropiedad.appendChild(año);
    detallesPropiedad.appendChild(garaje);
    detallesPropiedad.appendChild(dormitorios);
    detallesPropiedad.appendChild(baños);
    detallesPropiedad.appendChild(superficie);
    detallesPropiedad.appendChild(precio);

    document.getElementById("contenedor-modal").appendChild(detallesPropiedad);
}




