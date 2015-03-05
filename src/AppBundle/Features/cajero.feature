# language: es

Característica: Titular de la cuenta retira dinero
    Como titular de la cuenta
    quiero retirar efectivo de un cajero automatico
    Aunque el banco este cerrado

Antecedentes:
    Dado que estoy en la ruta "homepage"

Escenario: La cuenta tiene suficiente fondo
    Dado que el saldo de la cuenta es $ 100
    Y la tarjeta es válida
    Y la maquina tiene suficiente dinero
    Cuando la solicitud del titular es retirar de su cuenta $ 20
    Entonces el cajero debe dar $ 20
    Y el saldo de la cuenta debe ser $ 80
    Y la tarjeta debe ser devuelta

#Escenario: La cuenta no tiene fondos suficientes
#    Dado que el saldo de la cuenta es $ 10
#    Y la tarjeta es válida
#    Y la maquina tiene suficiente dinero
#    Cuando la solicitud del titular es retirar de su cuenta $ 20
#    Entonces el cajero automático no debe dispensar dinero
#    Y la ATM debería decir no hay fondos suficientes
#    Y el saldo de la cuenta debe ser $ 10
#    Y la tarjeta debe ser devuelta
#
#Escenario: Tarjeta ha sido deshabilitado
#    Dado que la tarjeta está desactivada
#    Cuando la solicitud del titular es retirar de su cuenta $ 20
#    Entonces el cajero automático debe conservar la tarjeta
#    Y el cajero automático debe decir que la tarjeta ha sido retenida

#Escenario: La ATM no tiene fondos suficientes