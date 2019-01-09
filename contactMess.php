<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anca's Beauty Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="background">
        <h1>Anca's Beauty Blog</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutMe.html">About Me</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="beauty-image background">
        <main>
        <?php 
		    //prepare variables for db connection

                $serverName="localhost:3307";
                $userName="root";
                $password="";
                $dbName="admin";

			//create connection

				$conn=new mysqli($serverName,$userName,$password,$dbName);

			//check connection

				if ($conn->connect_error) {
					die("conection faild".$conn->connect_error);
				}

				$query= mysqli_query($conn,"SELECT * FROM contact");
	    ?>
	        <table id="students">
	           	<tr>
	           		<th>ID</th>
	           		<th>Name</th>
	           		<th>Email</th>
	           		<th>Subject</th>
	           		<th>Message</th>
	           	</tr>
	    <?php 
	        while($row=mysqli_fetch_array($query)){
	           	echo"<tr>";
	           	echo "<td>".$row['id']."</td>";
	           	echo "<td>".$row['name']."</td>";
	           	echo "<td>".$row['email']."</td>";
	           	echo "<td>".$row['subject']."</td>";
	           	echo "<td>".$row['message']."</td>";
	           	echo"<tr>";
	        }
	           	mysqli_close($conn);

	        ?>

	           </table>
        </main>
    </div>
</body>
</html>