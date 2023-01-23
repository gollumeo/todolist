# How to start?

1. Install the dependances

```terminal
composer install
```

2. Launch the project

```terminal
php -S localhost:8000 -t public 
```


# Project Idea: Simple To-Do List

## Mission objectives

- Create a web application where users can create, read, update and delete to-do items
- Use a MySQL database to store the to-do items
- Use PHP to interact with the database and display the to-do items on the front-end

## The Mission

- Build a simple to-do list web application that allows users to create new to-do items, view a list of all to-do items, mark items as complete, and delete items.
- Use a MySQL database to store the to-do items and use PHP to interact with the database (insert, update, select and delete)
- Use HTML, CSS and JavaScript to create the user interface
- Implement a login system to allow multiple users to access their own to-do lists
- Specifications
- Allow users to create new to-do items by entering a task name and clicking a button.
- Display a list of all to-do items, including the task name and a completion status.
- Allow users to mark items as complete by clicking on them.
- Allow users to delete items by clicking on a delete button.
- Use a MySQL database to store the to-do items and use PHP to interact with the database.
- Use HTML, CSS, and JavaScript to create the user interface
- Use Tailwind CSS framework for styling
- Implement a login system to allow multiple users to access their own to-do lists
- Allow users to edit their tasks

## Head Start

### Database setup
- Create a new MySQL database and name it `todolist`
- Create a new table named `tasks` with the following columns:
  - `id` (INT, primary key, auto-increment)
  - `task` (VARCHAR, length: 255)
  - `status` (VARCHAR, length: 15)
  - `user_id` (INT)
- Create a new table named `users` with the following columns:
  - `id` (INT, primary key, auto-increment)
  - `username` (VARCHAR, length: 50)
  - `password` (VARCHAR, length: 255)

### PHP setup
- Create a new PHP file named `config.php` to store the database connection settings
- Use the `mysqli` extension to connect to the database
- Create a new PHP file named `tasks.php` to handle the task-related operations (create, read, update, delete)
- Create a new PHP file named `users.php` to handle the user-related operations (create, read, update, delete)

### HTML/CSS setup
- Create a new HTML file named `index.php` to display the to-do list and form to create new tasks
- Use Tailwind CSS to style the HTML elements
- Create a login form for user to login

### JavaScript setup
- Use JavaScript to handle the form submissions and update the to-do list without refreshing the page
- Use JavaScript to handle the completion and deletion of tasks
