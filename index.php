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
    
    <!---------------Add to-do start ------------->
    
    
    <h2>Add a To-Do</h2>
    <?php
    
    echo '<pre>';
    var_dump( $_GET );
    var_dump( $_POST ); 
    echo '</pre>';


     
    var_dump($_GET['new-to-do']);

    ?>
    <form method="GET" action="index.php">
        <label for="new-task">
            Enter a new task:
            <input
            id="new-task"
            name="new-to-do"
            type="text"
            value="">
        </label>
        <input type="submit" value="Add To List">
        <input type="reset" value="reset">
    </form>
    <!-------------Add to-do completed ----------->


    <!---------------Active to-do start ----------->
    <h2>Active To-Dos</h2>

    <ul>
        <li>
            <input type="checkbox" id="active-task" name="active-to-do" value="">
            <label for="active-task">
                <?php echo $_GET['new-to-do']?>
            </label>
        </li>
    </ul>
    

    <!---------------Active to-do end ------------->

    <!---------------completed to-do start -------->
    <h2>Completed To-Dos</h2>

     <!---------------completed to-do end ---------->
    
</body>
</html>