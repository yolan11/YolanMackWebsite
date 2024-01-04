<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Votre e-mail</title>
</head>
<body>
<h1>Un client vient de réserver une prestation</h1>

<ul>
    <li><strong>Nom:</strong> {{ $details['familyName'] }}</li>
    <li><strong>Prénom:</strong> {{ $details['firstName'] }}</li>
    <li><strong>E-mail:</strong> {{ $details['email'] }}</li>
</ul>

</body>
</html>
