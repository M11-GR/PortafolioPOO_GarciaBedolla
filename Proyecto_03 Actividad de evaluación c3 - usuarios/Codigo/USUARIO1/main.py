from admin import Admin
from cliente import Cliente
from invitado import Invitado

# Lista de usuarios
usuarios = []

# Crear usuarios
admin1 = Admin("Jaredt", "Jaredt@gmail.com", "Alto")
cliente1 = Cliente("itzel", "itzel@gmail.com", 100)
invitado1 = Invitado("Cristian", "Cristian@gmail.com")

# Agregar usuarios a la lista
usuarios.append(admin1)
usuarios.append(cliente1)
usuarios.append(invitado1)

# Menú interactivo
while True:

    print("\n--- MENU ---")
    print("1. Mostrar usuarios")
    print("2. Saludar usuarios")
    print("3. Salir")

    opcion = input("Selecciona una opción: ")

    if opcion == "1":

        # Polimorfismo
        for usuario in usuarios:

            usuario.saludar()
            usuario.mostrar_datos()
            usuario.acceso_sistema()

            print("----------------")

    elif opcion == "2":

        for usuario in usuarios:

            usuario.saludar()

    elif opcion == "3":

        print("Programa finalizado")
        break

    else:

        print("Opción no válida")


