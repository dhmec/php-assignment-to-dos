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
    // Check if there are any values in our array!
    if ( empty( $_POST['add-task'] ) )
    {
       $errorMsg = 'Please enter new task';
    }
    else 
    { 
    // Add this result to the activeToDos array!
    array_push(
        $_SESSION['activeToDos'],
        "{$_POST['add-task']}"
    );
    }


    if ( !isset( $_SESSION['completedToDo'] ) )
    {
        $_SESSION['completedToDo'] = array();
    }

    if ( !empty($_POST['active-to-do']) )
    {
        array_push(
            $_SESSION['completedToDo'],
            "{$_POST['add-task']}"
        );
    }

    // reset button for all session reset
    if( isset($_POST['reset']))
    {
        unset($_SESSION['activeToDos']);
    }


     
   

    ?>
    <form method="POST" action="index.php">
        <label for="new-task">
            Enter a new task:
            <input
            id="new-task"
            name="add-task"
            type="text"
            value="">
        </label>
        <input type="submit" value="Add To List">        
        <input type="submit" name="reset" value="reset">       
        <p><?php echo $errorMsg ?> </p>
    </form>
    <!-------------Add to-do completed ----------->
    

    <!---------------Active to-do start ----------->   

    
    <?php if ( isset( $_SESSION['activeToDos'] ) ) :  ?>
        <h2>Active To-Dos</h2>
        <ul>
            <?php foreach ( $_SESSION['activeToDos'] as $activeToDo ) : ?>
            <li>
                <input type="checkbox" id="active-task" name="active-to-do" value="<?php $activeToDo?>">
                <label for="active-task">
                     <?php echo $activeToDo; // Output the value from our ActiveToDos array! ?> 
                </label>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    

    <!---------------Active to-do end ------------->

    <!---------------completed to-do start -------->    
    <!---------------completed to-do end ---------->
     <?php
    echo '<pre>';    
    var_dump( $_POST ); 
    var_dump($_SESSION['activeToDos']);
    var_dump( empty($_POST['add-task']) );
    var_dump( $_POST['reset'] );
    echo '</pre>';
    ?>
</body>
</html>