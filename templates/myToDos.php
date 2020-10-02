<?php
    session_start();  
    

    if ( !isset( $_SESSION['activeToDos'] ) )
    {
        $_SESSION['activeToDos'] = array();
    }

    echo '<pre>';    
    var_dump( $_POST ); 
    echo '</pre>';

    $result = FALSE;
    if ( !empty( $_POST ) ) // Check if there are any values in our array!
    { 
    // Add this result to the activeToDos array!
    array_push(
        $_SESSION['activeToDos'],
        "{$_POST['new-to-do']}"
    );
    }


     
    var_dump($_POST['new-to-do']);

    ?>
    <!---------------Add to-do start ------------->
    <h2>Add a To-Do</h2>
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


    <!---------------Active to-do start ----------->
    <h2>Active To-Dos</h2>

    <ul>
        <li>
            <input type="checkbox" id="active-task" name="active-to-do" value="">
            <label for="active-task">
                <?php echo $_SESSION['activeToDos']?>
            </label>
        </li>
    </ul>
    

    <!---------------Active to-do end ------------->

    <!---------------completed to-do start -------->
    <h2>Completed To-Dos</h2>

     <!---------------completed to-do end ---------->