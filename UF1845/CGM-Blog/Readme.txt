ACTIVIDAD EVALUABLE 2 - UF1845

1. Desarrollar un front end, funcional y estético para el usuario/a final.
2. Incluir variables globales dentro de las funciones.
3. Disponer de las 3 funciones necesarias relacionadas con los posts. (get all post - insert post - delete post - get post)
4. Actualizar de la función srtftime obsoleta por una actualizada.
5. Conectar efectivamente de la base de datos con el programa.




























Histórico:
ACTIVIDAD EVALUABLE 1 - UF1845

1. Aportar e implementar estilos en el código base de la aplicación.
 R: se ha usado como base la plantilla ZENBLOG y se ha adaptado a las exigencias de la prueba evaluativa

2. Añadir nos entradas (post) adicionales a los dos existentes (tanto en html como en el array asociativo)
 R: para este punto se ha insertado directamente en la base de datos los dos nuevos posts con las siguientes instrucciones:
    nuevo post #1
  INSERT INTO posts 
    (id, 
    title, 
    excerpt, 
    content, 
    published_on) 
    VALUES 
    ('', 
    'Las empresas de China están organizando sus propias milicias. La gran incógnita es: para qué',
    'Docenas de empresas chinas han creado unidades del Departamento de las Fuerzas Armadas Populares.',
    'En China están recuperando una antigua costumbre que vivió sus años dorados durante los tiempos de Mao Zedong, sobre todo entre los 50 y 70: la formación de milicias. Lo curioso es dónde y sobre todo quiénes están impulsando esas unidades voluntarias formadas por ciudadanos y que se conocen como Departamentos de las Fuerzas Armadas del Pueblo (PAFD). Su impulso está cuajando en las empresas, sobre todo las estatales, aunque hay casos también en corporaciones privadas. La gran pregunta que deja la tendencia es… ¿Para qué?

    Del mono de trabajo al uniforme. El fenómeno lo señalaba ya en febrero Financial Times. Tras examinar anuncios de empresas e informes publicados en medios estatales a lo largo de 2023, el diario británico llegaba a la conclusión de que docenas de empresas chinas se han dedicado a establecer nuevos PAFD. Y en un tiempo relativamente breve. En concreto, habla de que las unidades se pusieron en marcha en cuestión de "meses". Entre las compañías que movieron ficha hay empresas estatales, pero también un gigante lácteo de propiedad privada.

    La cadena CNN, que se ha encargado de investigar la tendencia de las milicias corporativas en China, hablaba hace dos meses y medio de al menos 16 grandes empresas con unidades creadas a lo largo de 2023. En su análisis destacaban sobre todo las firmas de propiedad estatal, conocidas como SOE, ligadas directamente al gobierno central o a las autoridades regionales, pero citaba también algún caso concreto en el que la administración no tenía mayoría en la toma de decisiones. Pero… ¿Qué clase de empresas? El listado es amplio. Los medios que han analizado la creación de milicias citan a una empresa promotora y constructora de propiedad estatal, un productor de lácteos de China también de titularidad pública, varias firmas dedicadas a la construcción, el transporte y suministro de agua, una entidad financiera… Sus ubicaciones se repartían a lo largo del país, desde Jiangsu a Shanghái, Guangdong o Hubei. En Qinhai, al noroeste de China, un banco estatal que destaca como prestamista informaba hace poco de que había organizado a parte del personal de una de sus filiales para formar una milicia.

    Si hay un caso que ha llamado la atención es sin embargo el de Yili Group, una empresa privada con sede en Mongolia Interior que destaca por su gran peso en el sector lácteo. A finales de 2023 se convirtió en la primera gran compañía china de control privado que, al menos en los últimos años, creó una unidad PAFD.

    ¿Milicias, para qué? La pregunta del millón. La de Yili se constituyó por ejemplo como una fuerza de defensa que pueda "servir en tiempos de paz, hacer frente a emergencias y responder en tiempos de guerra", como la definió Huang Zhiquiang, vicepresidente ejecutivo de la Región Autónoma de Mongolia, durante un acto en Hohhot. La unidad quedó además bajo la dirección de la guarnición del Ejército Popular de Liberación (EPL) de Mongolia Interior y el Partido Comunista.',
    NOW());

    nuevo post #2
    INSERT INTO posts 
    (id, 
    title, 
    excerpt, 
    content, 
    published_on) 
    VALUES 
    ('', 
    'Microsoft tiene un plan para evitar las comisiones de Apple y Google: lanzar su propia tienda de juegos para móvil',
    'Microsoft está a punto de lanzar su propia tienda de juegos para móvil. Todo un dardo para Apple y Google',
    'Microsoft está a punto de desafiar el dominio de Apple y Google en el mercado de las tiendas de aplicaciones móviles. La compañía, como recogen en Bloomberg, lanzará su propia tienda de juegos en línea en julio, ofreciendo una alternativa a las políticas y tarifas impuestas por las tiendas existentes. La tienda debutará con los juegos de Microsoft, incluyendo el popular Candy Crush Saga, con planes de expandirse para incluir títulos de otros desarrolladores en el futuro cercano.

    Una web, no una app. El enfoque estratégico de Microsoft es evitar las altas comisiones impuestas por las tiendas tradicionales a través de una tienda que funcionará como un sitio web, en lugar de una aplicación dedicada. Esto, según Microsoft, se traduce en que la tienda "será accesible desde cualquier dispositivo con acceso a Internet, sin importar las políticas restrictivas de las tiendas de aplicaciones cerradas". Esta decisión busca brindar a los usuarios una opción más abierta y flexible para descubrir y adquirir juegos para móviles.

    Es una decisión que deja claro que esta Store de Microsoft no vendrá para competir directamente con App Store y Play Store, sino que servirá como un espacio propio para que los juegos de Microsoft estén libres de comisiones. Evitando las comisiones. Las altas comisiones impuestas por Google y Apple están llevando a los grandes desarrolladores a mover ficha. Epic Games o Steam son ejemplos de gigantes cambiando la estrategia para atraer desarrolladores mediante un sistema de reparto mucho más equitativo. Del mismo modo, ya sabemos que Epic Games Store aterrizará en iOS y Android a finales de este año, cobrando una comisión del 12% a los desarrolladores y aprovechando que la DMA obliga a compañías como Apple a abrir su ecosistema a tiendas de terceros. El papel de Microsoft. Por el lado de Microsoft, el territorio de los juegos para móviles es clave. La adquisición de Activision Blizzard le permite competir con entregas como "Candy Crush" o, "Minecraft" "Call of Duty", dos de los pesos pesados en el sector móvil.

    Se abre así la puerta a que Microsoft retire de Play Store y App Store sus juegos más populares para evitar las comisiones, un movimiento peligroso teniendo en cuenta las millones de descargas que mueve en dichas tiendas.

    El anuncio de Microsoft sobre su tienda de juegos para móviles representa un nuevo capítulo en esta saga de las stores para móvil alternativas, reafirmando la creciente determinación de las empresas tecnológicas para desafiar las estructuras existentes y ofrecer alternativas más accesibles y equitativas para los desarrolladores (y para ellos mismos).',
    NOW());

3. Crea loops para mostrar los posts nuevos (basados en foreach)
 R: el loop creado para esta tarea se encuentra en el archivo single-post.php en la linea 59.

4. Añadir fechas de publicación a las cuatro entradas del proyecto.
 R: En el punto 2 ya se han asignado las fechas de publicación a los dos nuevos post mediante la funcion NOW() en la instruccion INSERT de SQL. Al igual que los dos primeros posts los cuales ya tenían asignadas fecha de publicación con anterioridad.

5. Integrar la función date default timezone set con la hora correspondiente a Canarias.
 R: Está contenida en el archivo time-zone controller el cual se encuentra dentro de la carpeta controller. luego es llamado en el archivo header.php contenido en la carpeta components para que se muestre en la cabecera del blog


