# language: es

Característica: Titular de la cuenta retira dinero
    Como titular de la cuenta
    quiero retirar efectivo de un cajero automatico
    Aunque el banco este cerrado

Antecedentes:

Escenario: La cuenta tiene suficiente fondo
    Dado que el saldo de la cuenta es $ 100
    Y la tarjeta es válida
    Y la maquina tiene suficiente dinero
    Cuando la solicitud del titular es retirar de su cuenta $ 20
    Entonces el cajero debe dar $ 20
    Y el saldo de la cuenta debe ser $ 80
    Y la tarjeta debe ser devuelta

