<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/output.css">
    <title>Register</title>
</head>
<body class="bg-slate-900 flex flex-col items-center justify-center min-h-[100vh]">
<?php include '..\Resources\views\shared\header.php'; ?>

<main>
    <form action="/validate" method="post">
        <div>
            <label for="user_email">Identifiant
                <input type="text" name="user_email" required>
            </label>
        </div>
        <div>
            <label for="password">Mot de passe
                <input type="password" name="password" required>
            </label>
        </div>
        <div>
            <input type="submit" value="Log in">
        </div>
    </form>
</main>

<?php include '..\Resources\views\shared\footer.php'; ?>

</body>
</html>