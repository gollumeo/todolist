<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/output.css">
    <title>Create a Task</title>
</head>


<body class="bg-slate-900 flex flex-col items-center justify-center min-h-[100vh]">
<?php include '..\Resources\views\shared\header.php'; ?>

    <main>
        <form class="flex flex-col text-black" action="/create-task" method="post">
            <label class="text-white" for="title">Title</label>
            <input type="text" name="title" , placeholder="'Enter a title">
            <label class="text-white" for="task">Task</label>
            <textarea name="task" id="" cols="30" rows="5"></textarea>

            <label class="text-white" for="status">Status</label>
            <input type="text" name="status" , placeholder="'Enter a status">
            <input class="text-white" type="submit" value="Send">
        </form>
    </main>

<?php include '..\Resources\views\shared\footer.php'; ?>
</body>

</html>