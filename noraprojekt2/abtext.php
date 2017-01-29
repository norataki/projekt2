<style>
    form{margin-left: 2%; max-width: 80%; margin-bottom: 5%;}

</style>
  
<?php   
    $db = mysqli_connect('localhost', 'root', 'root', 'norasdb');
    mysqli_query($db, "SET NAMES utf8");

        if(!$db) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

?>

    <?php 
    //updates text

    if(isset($_POST['update1'])) {
        $parag1 = $_POST['paragraf1'];
    $q = "UPDATE pages SET content = '$parag1' WHERE id = 1;";
    mysqli_query($db, $q);
    }

        $query = "SELECT * FROM pages WHERE ID = 1";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
            
        echo "
        <form method='post'>
        <h2>Text :</h2>
        <textarea rows='15' cols='120' name='paragraf1'>{$ord['content']}</textarea>
        <input type='submit' value='Ändra' name='update1'>
        </form>";

    ?>