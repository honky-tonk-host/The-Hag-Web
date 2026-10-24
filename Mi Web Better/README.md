Merle Haggard Fanboys

Un pequeño sitio web multipágina sobre Merle Haggard, creado para el ejercicio de HTML exercise01.

Decisiones de diseño
Navegación entre el texto y las imágenes

Usé atributos id para enlazar cada imagen directamente con el párrafo de la biografía al que pertenece, y viceversa. Así, al hacer clic en una foto se va directo a la parte relevante del texto (en vez de abrir una imagen aislada que luego hay que cerrar), y al hacer clic en una fecha del texto se va directo a esa foto. ambas direcciones se connectan al archivo correspondiente y su id - se podria utlizar ../ / y # dependiendo de donde quieres ir


Usé el atajo ! de Emmet en VS Code para generar la plantilla básica de HTML5 en cada página, incluyendo la etiqueta meta de viewport para que se adapte bien a distintos tamaños de pantalla. Comprobé que funcionaba correctamente usando las herramientas de devtools.



he usado h1 por el main titulo de h2 para el siguiente, y despues h3 por lo de indexes y h4 por los titles de paragraphos. que realmente no estoy seguro de como deberia ser para ser mejor



Usé listas <ul> para los enlaces principales de navegación en cada página, y le puse un título a cada lista para que quede claro a qué enlaza (por ejemplo, "Web Index" frente a "Page Index").


Añadí enlaces de ancla (usando id) en cada etapa de la biografía (Primeros años, 1964–1973, 1973–1985, 1985–2015), para que se pueda saltar directamente a un periodo concreto desde la página de imágenes o el índice en la misma pagina.

Me comentaron que podria usa #up pero encontre que no podria hacerle funcionar pero con #top si.

He agregado un favicon que aperece en el tab de cada pagina y he cambiado el titulo para cada tab.

Una cosa que queria anotar es que he usado / en principio para navegar hasta el archivo maestro y va por camino donde le digo, pero he encontrado que agregando otro archivo con otro website es mas dificil manejar y se tiene que cambiar los direcciones. en cambio haciendolo subiendo y bajando archivos dependiente de donde estas es mas facil y no se tiene que cambiar todos los links.

Nivel avanzado
SEO: añadí <meta name="keywords"> con 8 términos relevantes, y <meta name="author">. - aunque yo se que google ya no toma esto en cuenta por como estaba abusado durante años.
Caché: añadí las etiquetas meta de Cache-Control porque el ejercisio me lo pido. aunque he visto que es tambien ignorado y mejor usar emcabeceras http en un sitio real.
Imágenes: las 4 imágenes están en formato .webp y cargan con loading="lazy" dentro del tag <img> para diferir la carga hasta que hagan falta.

Audio - he agregado audios que suenan, cuando el raton se queda en 'hover' encima de la palabra de un para de canciones como un 'feature' aunque yo creo que molestaria o soprenderia mas que ser una feature guay y tambien con una foto

he agregado <nav> y <header> y <details> con <summary> para abrir y cerrar los descripciones y por motivos seo he visto que es mejor usar nav header y footer. 

