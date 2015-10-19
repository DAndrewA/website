<!DOCTYPE html>
<html>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Please log in to the cms</h1>
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
  </form>
  <?php
    // establishing a connection to the mysql server
    $host = "mysql1.000webhost.com";
    $username = "a7488538_visitor";
    $password = "passw0rd";
    $dbname = "a7488538_rEvents";

    $conn = new mysqli($host,$username,$password,$dbname);

    //checking the connection to the database
    if($conn->connect_error){
      exit("Connection to the database failed: " . $conn->connect_error);
    }

    // querying the database for any users that match the username and password
    $sql = "SELECT * FROM users WHERE username=" . $_POST["username"] . " AND password=" . $_POST["password"] . ";";
    $result = $conn->query("$sql");

    // if the user logged in correctly, the cms is displayed to them
    if($result->num_rows > 0){
      echo "<h1>Upload event</h1>";
      echo "<form action=" . htmlspecialchars($_SERVER["PHP_SELF"]) . " method='post'>";
      echo "<input type='hidden' value='true' name='event'>";
      echo "AUTHOR: <input type='text' value=" . $_POST["username"] . " name='eventAuthor'>";
      echo "TITLE: <input type='text' name='eventTitle'>";
      echo "LOCATION: <input type='text' value=" . $row["location"] . " name='eventLocation'>";
      echo "DATE: <input type='date' name='eventDate'>";
      echo "TIME: <input type='time' name='eventTime'>";
      echo "DESCRIPTION: <textarea rows='10' cols='100' name='eventDescription'></textarea>";
      echo "<input type='submit'>";
      echo "</form>";
    }
    // if there are no returned values from the query, the user is told they have used incorrect login credentials
    else{
      echo "<p style='color: #FF0000;'>The username or password was incorrect</p>";
    }

    // adds the event passed into the page to the events database
    if($_POST["event"] == "true"){
      // setting up the boilerplate for the query
      $query = "INSERT INTO events(author,title,location,dateAsText,timeAsText,date";
      // adding a description field if it isnt null as it isnt required
      if($_POST["description"] != ""){
        $query = $query . ",description";
      }
      // creating the query with all not null values
      $query = $query . ") VALUES(" . $_POST["eventAuthor"] . "," . $_POST["eventTitle"] . "," . $_POST["eventLocation"] . "," . $_POST["dateAsText"] . "," . $_POST["timeAsText"] . "," . $_POST["date"];
      // adding description if it isn't null
      if($_POST["eventDescription"] != ""){
        $query = $query . "," . $_POST["description"];
      }
      // finishing the query
      $query = $query . ");"

      $result = $conn->query($query);

      if($result){
        echo "<p style='color: #FF0000'>The event was succesfully added to the databse</p>";
      }
      else{
        echo "There was an error " . $result->error;
      }
    }

  ?>
</body>
</html>
