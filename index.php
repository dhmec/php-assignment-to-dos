<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My To Dos App</title>

     <!-- Style(s) -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Script(s) -->
    <script type="text/JavaScript" src="js/scripts.js" defer></script>
</head>
<body>
    <h1>Welcome to My To-Dos!</h1>
    <h2>Add a To-Do</h2>
    <?php
    
    echo '<pre>';
    var_dump( $_GET );
    var_dump( $_POST ); 
    echo '</pre>';

    ?>
    <form method="GET" action="index.php">
        <label for="task">
            Enter a new task:
            <input
            id="task"
            name="new-task"
            type="text"
            value="">
        </label>
        <input type="submit" value="Add To List">
        <input type="reset" value="reset">
    </form>
    
</body>
</html>