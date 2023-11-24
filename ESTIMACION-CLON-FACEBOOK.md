# Projecto: Clon de Facebook

-   Objetivo: Determinar el tiempo necesario que se requiere para crear una aplicación backend, clon de la red social "facebook" en Laravel

### Aspectos a considerar que estarian presentes todo el tiempo

-   Solo 1 desarrollador nivel sr./ssr. se encuentra involucrado en el proyecto

-   Para prevenir "desastres" al realizar modificaciones de codigo relativamente antiguo (+6 meses) se desarrolla el proyecto de inicio a fin bajo la modalidad de TDD

-   Todo el software se desarrolla bajo estandares de codigo limpio (se evitan en mayor medida los "workarounds")

-   Se consideran tambien tiempos perdidos por "Imprevistos" (bugs, conflictos con proveedores de servicios, problemas de salud, etc)

## Epicas y estimacion de tiempo por las features involucradas

### Sistema de perfiles de usuarios con "amigos y sugerencias"

-   Inicia con una planeacion DETALLADA de las entidades de usuarios y sus relaciones, ademas, se evalua el uso de distintos algoritmos para

-   A nivel de backend, representa funcionalidades de:

    -   Registro de usuario (con tanta informacion personal como se considere util para los algoritmos de anuncios), manejo de autenticacion y autorizacion, y sesion
    -   Darse de alta
    -   Invitar
    -   Creacion de "grupos"
    -   Buscar amigos (SERVICIO DE BUSCADOR POR AMIGOS)
    -   Añadir/Eliminar amigos
    -   Bloquear perfiles
    -   Visibilizar perfil propio (publico/semi-publico/privado)
    -   Implementacion de algoritmos de sugerencias

-   ESTIMACION: 3-4meses

### Sistema de "publicacion de contenido"

-   Incluye logistica de reserva/adquisicion del hardware necesario para almacenar todo el contenido

-   Incluye el desarrollo de endpoints CRUD para cada tipo de contenido: posts de texto,fotos/videos, comentarios, reacciones

-   Manejo de cache para optimizacion de uso de recursos

-   Buscar contenido (SERVICIO DE BUSCADOR POR POSTS)

-   Eventos enviados por servidor (batch de nuevos posts)

-   Analisis e implementacion de algoritmos para "sugerencias de contenido"

-   Facebook Live (livestreaming) Y live record (se guardan los lives)

-   "Feeds" (Clips cortos sugeridos)

-   ESTIMACION: 6-9meses

### Sistema de "live chat, envio de audio y multimedia"

-   Implementacion de streams de datos para los chats

-   Optimizacion para el manejo de multiples chats por usuario (usuario1 habla con usuario2 y usuario3, mientras que usuario3 habla con usuario2 y usuario4)

-   ESTIMACION: 2-3meses

### Sistema de "monitoreo de actividad/intereses de los usuarios"

-   Se monitorea por usuario:

    -   Duracion de la sesion
    -   Se procesa tambien la data de duracion de "enfoque" de un usuario a un post/feed/publicidad
    -   IP y zona geografia
    -   Todo contenido publicado (posts, lives, hasta reacciones a publicaciones/anuncions/comentarios)
    -   Todo contenido buscado (desde personas, hasta objetos de marketplace)
    -   Todo contenido que haya redirigido al usuario fuera de "clon facebook"

-   Se generan reportes semanales basados en los patrones de contenido que los usuarios consideran "nuevo y atractivo o todavia relevante"

-   Se generan reportes tambien para el contenido que los usurios consideran ofensivo (esto con tal de automatizar luego la prevencion de su publicacion)

-   Se hace uso de sistemas predictivos automatizados(preferiblemente, provenientes de terceros) permitan determinar nuevos "trends" y cual tipo de usuario tiende a ser el consumidor de dichos trends

-   ESTIMACION: 1-1.5años

### Sistema de "marketplace"

-   Mayormente se haria uso de los sistemas ya anteriormente desarrollados

-   ESTIMACION: 1-2meses

### Sistema de "facebook gaming"

-   Desarrollo de la plataforma propia de "clon facebook" para distribucion de juegos en linea

-   Provision de licencias y monitoreo a terceros encargados del desarrollo

-   ESTIMACION: 8meses

### Sistema de "estrellas"

-   Comunicacion con servicios de 3eros internacionales y procesadores de pago para el manejo de conversion de moneda digital a local

-   Sistema automatizado para provision a los creadores de contenido para realizar sus cobros

-   ESTIMACION: 1año

---

## Tiempo total de desarrollo: entre 4 y 5 años
