<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/output.css">
    <title>To Do List</title>
</head>

<body class="bg-slate-900 text-white flex flex-col items-center justify-center min-h-[100vh] ">
    <header class="flex flex-row w-[100%] fixed top-0 bg-slate-800 p-2 shadow-xl shadow-slate-800/60">
        <nav class="w-auto flex gap-6 text-lg justify-center items-center">
            <div class="logo ml-5 font-black text-base">To Do &lt;List&gt;</div>
            <div class="items flex gap-6 items absolute right-5 text-xs"><a href="/">Home</a> <a href="#">Login</a> <a href="#">Signin</a></div>
        </nav>
    </header>
    <main>
        <section class="container">
            <img src="assets/img/Illustration.png" alt="cogip logo" class="illustration">
            <h1 class="text-gray-100">Welcome, <?php echo $name; ?>!</h1>
            <p>This base project is provided by Pierre N.</p>
            <ul>
                <li><a href="https://github.com/bramus/router" target="_blank">Bramus/Router</a></li>
                <li><a href="https://github.com/filp/whoops" target="_blank">Flip/Whoops</a></li>
                <li>dd() function</li>
                <li>redirect() function</li>
            </ul>
        </section>
    </main>
    <footer class="flex flex-row w-[100%] bg-slate-800 p-3 shadow-2xl shadow-slate-800/60 justify-center items-center">
        <nav class="w-auto flex gap-6 text-lg items-center justify-center flex flex-col">
            <div class="items flex gap-6 items  text-sm text-center">© Jonathan Manes & Pierre Mauriello | BeCode - Keller 5 - 2023<br>All Rights Reserved</div>
        </nav>
    </footer>
</body>

</html>