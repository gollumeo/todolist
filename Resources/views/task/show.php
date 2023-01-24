<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <!--<link rel="stylesheet" href="assets/css/styles.css">-->
    <link rel="stylesheet" href="assets/css/output.css">
    <script src="https://kit.fontawesome.com/26838d0dd7.js" crossorigin="anonymous"></script>

    <title>List of tasks</title>
</head>

<body class="bg-slate-900 flex flex-col min-h-[100vh] space-between  items-center justify-center">
    <?php include '..\Resources\views\shared\header.php'; ?>

    <main class="flex flex-col mb-auto mt-20 m-auto text-gray-50 w-4/5 items-center justify-center">
        <h2 class="text-2xl text-center text-gray-50">List of tasks</h2>
        <?php if (isset($task_list)) {
            foreach ($task_list as $task) { ?>

            <section class="flex flex-col w-[80%] m-5 border-white border-solid border-2 rounded-sm">
                <h2 class="p-5"> <?php echo $task['status'] ?></h2><hr>
                <h2 class="p-5"> <?php echo $task['task_title'] ?></h2><hr>
                <p class="p-5"> <?php echo $task['task'] ?></p><hr>
                <form method="post" action="/delete-task">
                    <label>
                        <input type="text" hidden name="id" value="<?php echo $task['id'] ?>">
                    </label>
                    <input type="submit" class="p-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Delete">
                </form>
            </section>
        <?php }
        }; ?>
    </main>

    <?php include '..\Resources\views\shared\footer.php'; ?>
</body>

</html>