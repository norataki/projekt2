	<style>
		.newi {
		  border: 2px solid grey;
		  margin: 2%;
		  padding: 1%;
		  max-width: 50%;
		  margin-top: 7%;
		  min-width: 50%;
}
	</style>
	<div class="about" id="content">

	<img src="bild.jpg" width="250" height="250" class="img-responsive" align="right" id="piccu">
	
	<?php  

            $db = mysqli_connect('localhost', 'root', 'root', 'norasdb');
            	mysqli_query($db, "SET NAMES utf8");
            $query = "
                SELECT * 
                FROM pages
            "; 
            $result = mysqli_query($db, $query); // här skickas frågan för att hämta inläggen till databasen
 
            while( $row = mysqli_fetch_assoc($result) ){  //skriver ut innehållet i kolumnen content mellan p taggar

                echo "
                    <div class='about'>
                        <p>{$row['content']}</p>
                    </div>
                "; 
            }


		 function load_page($page){

			$db = mysqli_connect("localhost","root","root","norasdb");

			mysqli_query($db, "SET NAMES utf8");

			$page = mysqli_real_escape_string($db, $page);

			if($page == "") $page = 'start'; 

			$query = "SELECT * FROM pages WHERE name = '$page'";

			$result = mysqli_query($db, $query);

			if($page = mysqli_fetch_assoc($result)){
				echo $page['content'];
			
            } else {
				echo "<h1>Sidan finns inte</h1>";
	}					
}
?>
<hr>
    <?php
    $db = mysqli_connect('localhost', 'root', 'root', 'norasdb'); 
 
    $query = "
        SELECT * 
        FROM activs
        ORDER BY date DESC
    "; // En SQL-fråga som hämtar alla inläggen i activs från databasen med (senaste inlägget först..)
 
    $result = mysqli_query($db, $query); 
 
    while( $row = mysqli_fetch_assoc($result) ){ 
        echo "
            <div class='newi'>
                <p>{$row['date']}</p>
                <p>{$row['message']}</p>
                <p>{$row['sender']}</p>
            </div>
        "; 
    }
     
    ?>

    <div class="cv">
            <p>2016-12-02</p>
			<p>Twilfit AB</p>
	</div>
