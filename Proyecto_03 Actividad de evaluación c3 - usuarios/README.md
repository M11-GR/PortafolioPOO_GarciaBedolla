# Proyecto 03: Actividad de evaluación c3 – usuarios

## 1. Nombre del Proyecto
Sistema de Usuarios con Herencia en Python.

## 2. Objetivo del Proyecto
Desarrollar una aplicación utilizando el lenguaje Python para simular el control de cuentas en una plataforma digital, aplicando la reutilización de características comunes entre distintos tipos de usuarios y modificando sus permisos de ingreso según su rol.

## 3. Problema que Resuelve
Una plataforma digital necesita controlar y distinguir a tres tipos de cuentas dentro de su sistema: Administradores, Clientes e Invitados. Como todos comparten datos básicos pero realizan acciones totalmente diferentes, este programa agrupa los datos generales en una sola plantilla de control para evitar repetir código. El sistema resuelve de forma ordenada la validación del correo electrónico, ofrece un menú interactivo para navegar por las opciones y ejecuta una lista que evalúa de forma automática el mensaje de entrada de cada usuario sin mezclar sus permisos o niveles de seguridad.

## 4. Tecnologías Utilizadas
* **Lenguaje de Programación:** Python (con comentarios explicativos en el código).
* **Entorno de Ejecución:** Consola de comandos o terminal del sistema de forma local.
* **Distribución del Código:** El proyecto se compone de archivos independientes de código fuente organizados ordenadamente dentro de la carpeta `codigo/` (usuario.py, admin.py, cliente.py, invitado.py y main.py).

## 5. Conceptos Aplicados (según temario de POO)
* **Plantilla base y derivados:** Creación de una clase principal para los datos generales del usuario y tres clases secundarias conectadas que adoptan esos mismos datos automáticamente para ahorrar espacio de programación.
* **Uso de constructores:** Inicialización automática de objetos mediante el uso de funciones de arranque encargadas de asignar los nombres y correos en el momento en que se da de alta un nuevo miembro en el sistema.
* **Llamadas a la clase principal:** Utilización de la instrucción especial que permite a las clases secundarias activar el constructor de la clase madre, facilitando la adición de datos específicos como el nivel de acceso o los puntos acumulados.
* **Modificación de funciones:** Ajuste personalizado en el comportamiento de la función de ingreso al sistema en cada uno de los roles, permitiendo que el administrador tenga un mensaje de nivel de acceso, el cliente visualice sus puntos y el invitado tenga restricciones.
* **Procesamiento en listas:** Capacidad del sistema para meter diferentes tipos de usuarios dentro de una sola colección y recorrerlos con un ciclo de programación, llamando a la misma función de saludo pero obteniendo una respuesta distinta según el tipo de cuenta.

## 6. Capturas de Pantalla

#### Formulario de Entrada / Interfaz Inicial
<img width="1122" height="511" alt="image" src="https://github.com/user-attachments/assets/5ad26d88-61ce-400b-8c80-b7dbeaeb62b4" />

#### Ejecución del Proceso
<img width="1144" height="417" alt="image" src="https://github.com/user-attachments/assets/21a9582c-4145-48bd-8841-9c5f3bedf691" />

#### Resultados Obtenidos
<img width="662" height="615" alt="image" src="https://github.com/user-attachments/assets/613bb38d-e410-48d0-979c-aa8abd69cae5" />

<img width="1021" height="418" alt="image" src="https://github.com/user-attachments/assets/dde1e5df-8f82-4aaa-bc9f-7678a9a5eb71" />

<img width="1125" height="393" alt="image" src="https://github.com/user-attachments/assets/6a9d99f9-8149-4f9a-9a76-2b466a6702bb" />


## 7. Instrucciones de Ejecución
1. Comprueba que todos tus archivos .py estén guardados correctamente dentro de la carpeta `codigo/` de este directorio.
2. Abre la consola de comandos, terminal o tu entorno de desarrollo favorito (como VS Code) en la ruta donde tienes el proyecto de usuarios.
3. Para iniciar la aplicación, ejecuta el archivo principal escribiendo en tu terminal: `python main.py`.
4. Utiliza las opciones del menú interactivo en la pantalla de la consola para registrar usuarios, validar los correos electrónicos y observar los diferentes permisos de acceso.

## 8. Reflexión Personal
* **¿Qué aprendí?** Aprendí las ventajas de conectar clases para evitar transcribir variables repetitivas y experimenté la transición a un nuevo lenguaje como Python, comprendiendo que los pilares del diseño de software se pueden aplicar en cualquier entorno informático.
* **¿Qué fue difícil?** El mayor reto fue comprender cómo hacer que una misma función se comportara de formas distintas dependiendo de qué clase la estaba llamando, y asegurar que la validación de la estructura de los correos funcionara correctamente.
* **¿Qué mejoraría?** Para una futura actualización, cambiaría la pantalla de texto de la consola por una interfaz con ventanas visuales y botones interactivos, y conectaría el sistema a un almacenamiento para que los usuarios no se borren al cerrar el programa.

---
*Regresar al [README Principal](../README.md)*
