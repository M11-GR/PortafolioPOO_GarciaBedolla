# Proyecto 01: Examen práctico contra reloj - Corte 1
## 1. Nombre del Proyecto
Examen Práctico Contra Reloj.

## 2. Objetivo del Proyecto
Medir la precisión técnica en la sintaxis del lenguaje PHP y la capacidad para modelar estructuras de datos del mundo real mediante abstracción, sin implementar comportamientos o métodos en esta etapa inicial.

## 3. Problema que Resuelve
El proyecto resuelve dos ejercicios de modelado bajo una restricción de tiempo de 30 minutos:
1. **Sistema de Logística para FastDelivery:** Creación de un molde funcional (`Paquete.php`) para gestionar paquetes mediante atributos públicos con tipado estricto (`codigoSeguimiento`, `pesoKilogramos`, `esFragil`) y una propiedad con visibilidad privada (`costoInterno`).
2. **Sistema de Monitoreo de Plantas:** Creación de un molde funcional (`Sensor.php`) para registrar el estado de dispositivos mediante identificadores, marcas, rangos y marcas de tiempo nativas (`DateTime`).
3. **Prueba de Visibilidad (`index.php`):** Demostración del comportamiento de instanciación e intento de acceso restringido a encapsulamiento privado.

## 4. Tecnologías Utilizadas
* **Lenguaje de Programación:** PHP (Tipado estricto).
* **Entorno de Desarrollo:** Servidor Local Apache en XAMPP.
* ]**Estructura de Archivos:** Código fuente organizado en `codigo/src/Logistica/Paquete.php` y archivos en raíz.

## 5. Conceptos Aplicados (según temario de POO)
**Clases y Objetos:** Creación de estructuras base (`Paquete` y `Sensor`) y su posterior instanciación como variables en memoria (`$paqueteA`, `$paqueteB`).
**Abstracción de Datos:** Identificación de las propiedades esenciales de un objeto real para convertirlos en variables de software.
**Modificadores de Acceso (Visibilidad):** Uso explícito de palabras clave `public` y `private`. Al intentar modificar `$costoInterno` desde fuera de la clase en `index.php`, PHP arroja un error fatal (*Fatal Error*), demostrando cómo el encapsulamiento protege la información sensible.
**Tipado Estricto:** Definición obligatoria de tipos de datos (`string`, `float`, `boolean`, `int`, `DateTime`) para mitigar errores de asignación.

## 6. Capturas de Pantalla

#### Estructura del Código / Interfaz Inicial
<img width="1134" height="968" alt="image" src="https://github.com/user-attachments/assets/853c4f75-d0fd-49c8-9b0b-3e3df69e079e" />

<img width="776" height="427" alt="image" src="https://github.com/user-attachments/assets/dfd5295f-ff60-4406-a5a0-b5d5b0397732" />

<img width="730" height="405" alt="image" src="https://github.com/user-attachments/assets/807e14f6-010f-4a24-9fab-e49e384e737a" />

#### Ejecución del Proceso en Servidor
<img width="1464" height="122" alt="image" src="https://github.com/user-attachments/assets/b4c1b37b-7d7d-41a8-bd3a-3258a54957c7" />


## 7. Instrucciones de Ejecución
1. Asegúrate de tener los archivos fuentes del examen organizados dentro de la carpeta `codigo/` de este directorio.
2. Copia la carpeta completa del proyecto y colócala en tu servidor local: `C:/xampp/htdocs/PortafolioPOO/Proyecto_01_ExamenContraReloj/`.
3. Inicia el panel de control de **XAMPP** y arranca el servicio de **Apache**.
4. Abre tu navegador web e ingresa a la ruta local: `http://localhost/PortafolioPOO/Proyecto_01_ExamenContraReloj/codigo/index.php`.

## 8. Reflexión Personal
**¿Qué aprendí?** Aprendí a estructurar clases de forma rápida utilizando tipado estricto en PHP y a comprobar en la práctica por qué no es posible alterar un atributo privado directamente desde un archivo externo (`index.php`) sin un método puente.
**¿Qué fue difícil?** El principal reto fue adaptarme a la presión del reloj de 30 minutos manteniendo la precisión en la sintaxis, asegurando que los tipos complejos como `DateTime` se instanciaran correctamente.        
**¿Qué mejoraría?** En futuros ejercicios agregaría métodos constructores (`__construct`) y métodos de acceso públicos (*getters* y *setters*) para poder manipular e interactuar con los datos privados de forma segura, respetando al 100% las buenas prácticas del encapsulamiento.

*Regresar al [README Principal](../README.md)*
