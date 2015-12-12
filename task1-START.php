<head>

   <style>
                
                body {
				background-color: #eee;
                    margin:0px;
                    font-family:Verdana, Arial, helvetica, sans-serif;
                    font-size:12px;
                }

                span {
                    font-size:12px;
                }

  </style>
    <title>
      Lab10
    </title>

  </head>
<br><br><br><br>
  <h2>ATTENDANCE MAINTAINACE</h2>
  <div  ng-app="" >
 
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
	User: Enter your Name <br>
	Email: Enter you Email id as password <br><br><br><br><br><br><br>
	Enter user: <input type = "text" name= "text" id = "text" ng-model="name">
	Enter Password: <input type = "tweet" name= "tweet" id = "tweet" ng-model="tweet">
	Submit Button: <input type ="submit" >
</form>
 
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  </div>

	  <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db= "attendance";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);
		//$conn = mysqli_connect ('localhost','root','','attendance');
		// Check connection
		if ($conn->connect_error) {
			die("<h2>Connection failed: </h2>" . $conn->connect_error);
		} 
		echo "<h2>Database Connected successfully</h2>";
		
	
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['text']; 
		$pass = $_POST['tweet']; 
		
		$sql = "select * from user where fullname= '$name' && email = '$pass'";
		if($sql)
			header('location:index.php');
		
		}
		
		
		
		$conn->close();
	?>
	
