<?php session_start(); ?>
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
    

    if ( !isset( $_SESSION['activeToDos'] ) )
    {
        $_SESSION['activeToDos'] = array();
    }

    
    $result = FALSE;
    if ( !empty( $_POST ) ) // Check if there are any values in our array!
    { 
    // Add this result to the activeToDos array!
    array_push(
        $_SESSION['activeToDos'],
        "{$_POST['new-to-do']}"
    );
    }


     
   

    ?>
    <form method="POST" action="index.php">
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
    <?php
    echo '<pre>';    
    var_dump( $_POST ); 
    var_dump($_SESSION['activeToDos']);
    echo '</pre>';
    ?>

    <!---------------Active to-do start ----------->   

    
    <?php if ( isset( $_SESSION['activeToDos'] ) ) :  ?>
        <h2>Active To-Dos</h2>
        <ul>
            <?php foreach ( $_SESSION['activeToDos'] as $activeToDo ) : ?>
            <li>
                <input type="checkbox" id="active-task" name="active-to-do" value="">
                <label for="active-task">
                     <?php echo $activeToDo; // Output the value from our ActiveToDos array! ?> 
                </label>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    

    <!---------------Active to-do end ------------->

    <!---------------completed to-do start -------->
    <h2>Completed To-Dos</h2>

     <!---------------completed to-do end ---------->
    
</body>
</html>