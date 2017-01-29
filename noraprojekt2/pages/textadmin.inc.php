<?php include 'functions.php' ?>

<?php session_start(); ?>

    <style>
       
        .entry {
		  	border: 2px solid grey;
			margin: 2%;
			padding: 1%;
			max-width: 50%;
			margin-top: 7%;
			min-width: 50%;
		}
        #logout{
        	margin-left: 2%;
        	margin-top: -1%;
        }
        .formis {
			width:30%;
			max-width: 50%;
			margin: 2%;
			margin-bottom: 1%;
			display: block;
        }
        h3 {
        	float: left;
        	padding: 2%;
        	margin-bottom: 1%;
        }
        .search {
        	margin:1%;
        	margin-top: 
        }
    </style>

    <h3>CV</h3>

    <form method='post' action='' class="formis">
    <textarea name='message' class="form-control" required></textarea><br>
    <input type='text' name='sender' class="form-control"/> <br>
    <input type='submit' value='Lägg till ny +' class="btn btn-info pull-left"/>
    </form>
 
    <?php
        if( isset($_POST['password']) ){ // Om ett formulär med ett fält som heter 'password' skickats
            if($_POST['password'] == "noris"){ 
                $_SESSION['admin'] = TRUE; 
            }
        }
 
        if( isset($_POST['logout']) ){ // Om ett formulär med en knapp som heter 'logout' skickats
            $_SESSION['admin'] = FALSE; 
        }
 
    // *************** Logged in  ***********  //

        
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE){ // if logged in
            echo "
                <form method='post' action=''>
                    <input type='submit' value='Logga ut' name='logout' id='logout' class='btn btn-danger pull-left'>
                </form>
            ";
 
            echo " 
                <form method='get' action=''>
                <input type='text' name='search' class='search'>
                <input type='submit' value='Sök'>
                </form>
            ";
 
            $db = mysqli_connect('localhost', 'root', 'root', 'norasdb'); 
 
            if( isset($_POST['id']) ){
 
                $id = $_POST['id'];
 
                $query = "
                    DELETE FROM activs
                    WHERE id = $id
                "; // Removes posts with a certain id
 
                mysqli_query($db, $query); // Här skickas en SQL-fråga vi skapade till databasen så att inlägget försvinner
            }
 
            if( isset($_GET['search']) ){ // Om vi får en GET-variabel via URL:en som heter 'search'
 
                $search = $_GET['search'];
                 
                $search_query = "
                    WHERE message LIKE '%$search%'
                    OR sender LIKE '%$search%'
                "; // shows matches to the search
             
            }else{
                $search_query = ""; 
            }
 
            $query = "
                SELECT * 
                FROM activs
                $search_query
                ORDER BY date DESC "; 
 
            $result = mysqli_query($db, $query); // här skickar vi frågan för att hämta inläggen till databasen
 
            while( $row = mysqli_fetch_assoc($result) ){ // tar en rad i taget och lägger i $row som då blir en array med alla värden i den raden där nycklarna har samma namn som kolumnerna i tabellen i databasen
                echo "
                    <div class='entry'>
                        <p>{$row['date']}</p>
                        <p>{$row['message']}</p>
                        <p>{$row['sender']}</p>
                        <form method='post' action=''>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <input type='submit' value='Ta bort'>
                        </form>
                    </div>
                "; 
            }
 

    if( isset($_POST['message']) && isset($_POST['sender']) ){ // om vi fått ett formulär med fälten 'message' och 'sender skickat'
         
        $sender = $_POST['sender'];
        $message = $_POST['message'];
 
        $query = "
            INSERT INTO activs 
            (date, sender, message) 
            VALUES 
            (NOW(), '$sender', '$message')
        "; // adds new post into the database
 
        mysqli_query($db, $query); // Ställ frågan som vi skapade ovan i $query till dabatsen
 
        echo "Skickat!";
    }
    // *************** logged out  ************* //
        }else{ //echo log in form
            echo "
                <form method='post' action=''>
                    <input type='password' name='password'>
                    <input type='submit' value='Logga in'>
                </form>
            ";
        }
    ?>
 <?php include 'abtext.php' ?>

