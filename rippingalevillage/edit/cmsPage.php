<!DOCTYPE html>
<html>
<body>
  <form action="cmsPage.php" method='post'>
    <h1>Please log in to the cms</h1><br>
    Username: <input type="text" name="usrnm"><br>
    Password: <input type="password" name="pswrd"><br>
    <input type="submit" value="Log In"><br>
  </form>
  <?php
    // establishing a connection to the mysql server
    $host = "mysql1.000webhost.com";
    $username = "a7488538_user";
    $password = "Passw0rd";
    $dbname = "a7488538_eventDB";

    $conn = new mysqli($host,$username,$password,$dbname);

    //checking the connection to the database
    if($conn->connect_error){
      exit("Connection to the database failed: " . $conn->connect_error);
    }

    // querying the database for any users that match the username and password
    $sql = "SELECT * FROM users WHERE username='" . $_POST["usrnm"] . "' AND password='" . $_POST["pswrd"] . "';";
    $result = $conn->query("$sql");

    // if the user logged in correctly, the cms is displayed to them
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<h1>Upload event</h1>";
        echo "<form action=" . htmlspecialchars($_SERVER["PHP_SELF"]) . " method='post'>";
        echo "<input type='hidden' value='true' name='event'>";
        echo "AUTHOR: <input type='text' value='" . $row["username"] . "' name='eventAuthor'><br>";
        echo "TITLE: <input type='text' name='eventTitle'><br>";
        echo "LOCATION: <input type='text' value='" . $row["location"] . "' name='eventLocation'><br>";
        echo "DATE: <input type='date' name='eventDate'><br>";
        echo "TIME: <input type='time' name='eventTime'><br>";
        echo "DESCRIPTION: <textarea rows='10' cols='100' name='eventDescription'></textarea><br>";
        echo "<input type='submit'>";
        echo "</form>";
      }
    }
    // if there are no returned values from the query, the user is told they have used incorrect login credentials
    else{
      echo "<p style='color: #FF0000;'>The username or password was incorrect</p>";
    }

    // adds the event passed into the page to the events database
    if($_POST["event"] == "true"){
      // setting up the boilerplate for the query
      $sql = "INSERT INTO events(author,title,location,`date`,`time`";
      // adding a description field if it isnt null as it isnt required
      if($_POST["eventDescription"] != ""){
        $sql = $sql . ",description";
      }
      // creating the query with all not null values
      $sql = $sql . ") VALUES('AMart','" . $_POST["eventTitle"] . "','" . $_POST["eventLocation"] . "','" . $_POST["eventDate"] . "','" . $_POST["eventTime"] . "'";
      // adding description if it isn't null
      if($_POST["eventDescription"] != ""){
        $sql = $sql . ",'" . $_POST["eventDescription"] . "'";
      }
      // finishing the query
      $sql = $sql . ");";

      $result = $conn->query("$sql");

      if($result){
        echo "<p style='color: #FF0000'>The event was succesfully added to the databse</p>";
      }
      else{
        echo "There was an error " . $result->error;
      }
      echo $sql;
    }

  ?>
</body>
</html>
