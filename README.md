
Problema 1: 
En este caso, para evitar el uso de condicionales y permitir la utilización de diferentes servicios de envío de correo electrónico según las necesidades de cada cliente, el patrón de diseño más adecuado sería la Opción 1: Strategy.
El patrón de diseño Strategy permite encapsular algoritmos intercambiables en clases separadas, llamadas estrategias, y luego utilizar una interfaz común para invocar dichas estrategias. En este caso, cada servicio de envío de correo electrónico (SendGrid, Mandrill, etc.) se implementaría como una estrategia concreta que cumple con una interfaz común.
Al utilizar el patrón Strategy, el cliente puede ser configurado con la estrategia deseada en tiempo de ejecución, sin necesidad de condicionales. Esto permite agregar nuevos servicios de envío de correo electrónico en el futuro simplemente creando una nueva estrategia y configurando el cliente con dicha estrategia. Además, el patrón Strategy favorece la separación de responsabilidades y facilita el mantenimiento y la extensibilidad del sistema.

Problema 2: 
La diferencia entre el Factory Method y el Abstract Factory radica en el nivel de abstracción y complejidad de la creación de objetos.
El Factory Method es un patrón de diseño que define una interfaz para crear objetos, pero delega la responsabilidad de la creación de objetos a las subclases. Cada subclase puede proporcionar su propia implementación del método de fábrica para crear objetos de una clase base. El Factory Method se enfoca en la creación de un solo objeto.
Por otro lado, el Abstract Factory es un patrón de diseño que proporciona una interfaz para crear familias de objetos relacionados sin especificar sus clases concretas. Una fábrica abstracta define métodos para crear diferentes tipos de objetos relacionados y cada fábrica concreta implementa esos métodos para crear objetos específicos. El Abstract Factory se enfoca en la creación de una familia de objetos relacionados.



INSTALAR EL PROYECTO <br />
INSTALAR XAMMPP<br />
Acceder a la carpeta htdocs <br />
Clonar el archivo <br />
Accedemos a nuestra carpeta del proyecto<br />
Ejecutamos el comando dentro de la carpeta "composer install"<br />
Ejecutamos el comando dentro de la carpeta "composer update"<br />
Ejecutamos el comando dentro de la carpeta "cp .env.example .env"<br />
Ejecutamos "php artisan key:generate"<br />




