class Usuario:

    def __init__(self, nombre, email):

        self.nombre = nombre

        # Validación simple de email
        if "@" in email:
            self.email = email
        else:
            self.email = "Correo inválido"

    def mostrar_datos(self):

        print("Nombre:", self.nombre)
        print("Email:", self.email)

    def acceso_sistema(self):

        print("Acceso básico")

    def saludar(self):

        print("Hola,", self.nombre)

        