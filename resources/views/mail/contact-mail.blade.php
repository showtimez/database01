<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattato, {{ $name }}</h1>
    <h2>Risponderemo il prima possibile</h2>
    <p>Ecco un riepilogo dei tuoi dati :</p>
    <ul>
        <li>Nome: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
        <li>Number: {{ $number }}</li>
        <li>Messaggio: {{ $user_message }}</li>
    </ul>
    <small>Se non hai mai fatto richiesta, ignora pure questa email</small>
</body>
</html>
