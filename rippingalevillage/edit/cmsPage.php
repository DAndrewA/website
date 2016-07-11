<!DOCTYPE html>
<html>
<body>
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

    if($result->num_rows > 0 or $_POST["logIn"] == true){
      $logIn = true;
    }

    // LOGGING IN TO THE CMS
    echo "<form action=" . htmlspecialchars($_SERVER["PHP_SELF"]) . " method='post'>";

    echo "<div";
    if($logIn == true){
      echo "style='hidden:true;'";
    }
    echo ">";

    echo "<h1>Please log in to the cms</h1><br>";
    echo "Username: <input type='text' name='usrnm' value='". $_POST["usrnm"] ."'><br>";
    echo "Password: <input type='password' name='pswrd' value='". $_POST["pswrd"] ."'><br>";
    echo "<input type='submit' value='Log In'><br>";
    echo "</div>";

    // link to log out of the cms
    echo "<a href='cmsPage.php'>Log out</a>";

    // MAKING THE EVENTS
    // if the user logged in correctly, the cms is displayed to them
    if($logIn == true){
      echo "<h1>Upload event</h1>";
      echo "<input type='hidden' value='true' name='event'>";
      echo "<input type='hidden' value='true' name='logIn'>";
      echo "AUTHOR: <input type='text' name='eventAuthor'><br>";
      echo "TITLE: <input type='text' name='eventTitle'><br>";
      echo "LOCATION: <input type='text' name='eventLocation'><br>";
      echo "DATE: <input type='date' name='eventDate'><br>";
      echo "TIME: <input type='time' name='eventTime'><br>";
      echo "DESCRIPTION: <textarea rows='10' cols='100' name='eventDescription'></textarea><br>";
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
      $sql = "INSERT INTO events(author,title,location,`date`,`time`";
      // adding a description field if it isnt null as it isnt required
      if($_POST["eventDescription"] != ""){
        $sql = $sql . ",description";
      }
      // creating the query with all not null values
      $sql = $sql . ") VALUES('" . $_POST["eventAuthor"] . "','" . $_POST["eventTitle"] . "','" . $_POST["eventLocation"] . "','" . $_POST["eventDate"] . "','" . $_POST["eventTime"] . "'";
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
    }

  ?>
</body>
</html>
