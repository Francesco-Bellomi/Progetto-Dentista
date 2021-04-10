<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <h1>Benvenuto {{$contact['user']}}</h1>
    <h3>Verrai Presto Ricontattato da uno dei nostri collaboratori</h3>
    <h4>Riepilogo dati</h4>
    <p>● Nome Utente : {{$contact['user']}}</p>
    <p>● Messaggio : {{$contact['message']}}</p>
</body>
</html>