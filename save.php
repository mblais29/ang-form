<html>
	<body>
	
		<?php
		   /*
		   * Collect all Details from Angular HTTP Request.
		   */ 
		    $postdata = file_get_contents("php://input");
		    $request = json_decode($postdata);
		    @$email = $request->email;
		    @$body = $request->body;
			@$star = $request->star;


			//Connect to MySQL Database
			if($_SERVER['REQUEST_METHOD'] == "POST") {
				include 'connection.php';
				try {
				    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
					//creates the new record
	
					$sql="INSERT INTO $database.ratings (rating, description, email)
					VALUES
					('$star','$body','$email')";
					
				    if(!$sql) {
				      	echo 'a activity against this project already exists...';
				      }
				      else{
						$conn->exec($sql);
					}
							    
				    // use exec() because no results are returned
			
					
					echo "New Record Created Successfully";
	
			    }
				//catch error if exists
				catch(PDOException $e)
				    {
				    echo $sql . "<br>" . $e->getMessage();
				    }
				
				$conn = null;
			}
		?>							
	</body>
</html>