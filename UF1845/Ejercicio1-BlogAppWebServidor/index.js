const screen = {
    2: 0,
    6: 500,
    10: 900,
  };

    let url = "./controlador_posts.php";
    fetch(url, {
        method: "POST",
        body: FormData}
    )
    .then((response) => response.json())
    .then((data) => {
        // console.log('estoy aqui');
        cargaPosts(data);
    });
  
  // -----------------------------------------------
  // Cargamos todos los posts
  // -----------------------------------------------  
  function cargaPosts(posts) {
    let variable = Object.keys(posts).length;
    document.getElementById("listado").innerHTML = "";
    for (let i = 0; i < variable; i++) {
      cargaUnPost(posts[i]);
    }
  }
  
  // -----------------------------------------------
  // Cargamos un post en pantalla
  // -----------------------------------------------
  function cargaUnPost(post) {
    console.log(post);
    let tarjeta = document.createElement("div");
    tarjeta.classList.add("card");
    let contenCabecera = document.createElement("div");
    contenCabecera.classList.add("card-header")
    let titulo = document.createElement("h2");
    titulo.innerHTML = post.title;

    let cuerpo = document.createElement("div");
    cuerpo.classList.add("card-body");
    let bloque = document.createElement("blockquote");
    bloque.classList.add("blockquote","mb-0");
    let excerpt = document.createElement("p");
    excerpt.classList.add("text-justify");
    excerpt.innerHTML = post.excerpt;
    let conteido = document.createElement("footer");
    conteido.classList.add("blockquote-footer");
    conteido.innerHTML = post.content;

    contenCabecera.appendChild(titulo);
    tarjeta.appendChild(contenCabecera);

    bloque.appendChild(excerpt);
    bloque.appendChild(conteido);
    cuerpo.appendChild(bloque);
    tarjeta.appendChild(cuerpo);

    document.getElementById("listado").appendChild(tarjeta);
  }
  