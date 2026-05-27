from usuario import Usuario

class Admin(Usuario):

    def __init__(self, nombre, email, nivel_acceso):

        super().__init__(nombre, email)
        self.nivel_acceso = nivel_acceso

    def acceso_sistema(self):

        print("Acceso completo como administrador")
        print("Nivel de acceso:", self.nivel_acceso)