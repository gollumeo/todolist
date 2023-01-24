<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/output.css">
    <script src="https://kit.fontawesome.com/26838d0dd7.js" crossorigin="anonymous"></script>

    <title>List of tasks</title>
</head>

<body>
    <h2 class="text-2xl text-center">List of tasks</h2>
    <?php foreach ($task_list as $task) {

        echo '<section class="flex m-5">';
        echo '<h2 class="p-5">' . $task['status'] . '</h2>';
        echo '<h2 class="p-5">' . $task['task_title'] . '</h2>';
        echo '<p class="p-5">' . $task['task'] . '</p>';
        echo '<form method="post" action="/delete-task">';
        echo '<input type="text" hidden name="id" value="' . $task['id'] . '">';
        echo '<input type="submit" class="p-5" value="Delete">';
        echo '</form>';
        echo '</section>';
    }; ?>
</body>

</html>