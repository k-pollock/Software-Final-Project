<html>
<head>
<title>Sys Admin Queue</title>
<center><h1> SYSTEM ADMINISTRATOR QUEUE</h1><br><br>
<?php
//open connection
include ("connection.php");

	$sql = "SELECT number, title, description, email, status, assignee, date FROM Tickets WHERE assignee = 'SysAdmin' ORDER BY date";
	$result = mysqli_query($db, $sql);

	if (!$result){
        echo "Oops! " . $db->error;
      }
      else{
                $table = $result->fetch_all();
        //var_dump($table);
        echo "<table border = '1'>";
        echo "<tr><th>Ticket ID</th><th>Title</th><th>Description</th><th>Contact</th><th>Status</th><th>Assignee</th><th>Date Created</th></tr>";
        foreach($table as $row){
                echo "<tr>";
                foreach($row as $value){
                        echo "<td>$value</td>";
                }
                echo "</tr>";
        }
	}

?>

<input type="button" onclick="location.href='home.php';" value="Log Out" />
<input type="button" onclick="location.href='update.php';" value="Update Description" /><br>

</body>
</html>
