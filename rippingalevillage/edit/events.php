<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0045)http://www.rippingalevillage.co.uk/Events.htm -->
<html><!-- InstanceBegin template="/Templates/default.dwt" codeOutsideHTMLIsLocked="false" --><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="SHORTCUT ICON" href="http://www.rippingalevillage.co.uk/Rippingale.ico">

 <!-- InstanceBeginEditable name="Title" -->
<title>Rippingale Village - What's On</title>
  <!-- InstanceEndEditable -->


<meta name="Title" content="Rippingale Village Website">
<meta name="Author" content="John Warman, Di Powell, Andrew Martin">
<meta name="Subject" content="Rippingale Village">
<meta name="Description" content="Rippingale - birthplace of the Archers. Rippingale is a small picturesque village sitting in open farmland East of the A15, 5 miles North of Bourne, Lincolnshire, England. ">
<meta name="Keywords" content="Rippingale,Village,Rippingale Village,Parish Council,Bourne,South Kesteven,Lincolnshire,The Bull,Village Hall,Post Office,General Store,School,Public House, Country Eye, Archers">
<meta name="Language" content="English">
<meta name="Distribution" content="Global">
<meta name="Robots" content="All">

 <!-- InstanceBeginEditable name="Style" -->


<link rel="stylesheet" href="./events_files/Rippingale.css" type="text/css">


  <!-- InstanceEndEditable -->


   <!-- InstanceBeginEditable name="Script" -->

  <!-- InstanceEndEditable -->




<!--[if IE]>
<script src="js/IEHoverCSS.js" language="javascript"></script>
<![endif]-->

<script language="JavaScript" type="text/javascript">
img1=new Image()
img1.src="Images/transparent.gif"
img2=new Image()
img2.src="Images/transparent.gif"
ns6_index=0
function change(e){
if(!document.all&&!document.getElementById)
return
if (!document.all&&document.getElementById)
ns6_index=1
var span=document.getElementById&&!document.all? e.target:event.srcElement
if (span.className=="folding"){
var source2=document.getElementById&&!document.all? source.parentNode.childNodes:span.parentElement.all
if (source2[2+ns6_index].style.display=="none"){
source2[0].src="Images/transparent.gif"
source2[2+ns6_index].style.display=''
}
else{
source2[0].src="Images/transparent.gif"
source2[2+ns6_index].style.display="none"
}
}
}
document.onclick=change
//-->
</script>

</head>
<body bgcolor="">

<!-- Start Wrapper  -->
<div id="wrapper">
  <table width="99%" border="0" bgcolor="#ffffff" height="111">
    <tbody><tr>
      <td width="172"><a href="http://www.rippingalevillage.co.uk/index.htm"><img src="./events_files/PCLogo.gif" alt="Rippingale Parish Council Crest" width="124" height="108" border="0"></a></td>
      <td width="675" align="center"><a href="http://www.rippingalevillage.co.uk/index.htm"><img src="./events_files/header.gif" alt="Rippingale Village" border="0"></a></td>
      <td width="172" align="right"><a href="http://www.rippingalevillage.co.uk/index.htm"><img src="./events_files/Sign1.gif" alt="Rippingale Village Sign" width="79" height="108" border="0" align="right"></a></td>
    </tr>
  </tbody></table>
  <div id="topofwindow"></div>
  <div>
    <script type="text/javascript" src="./events_files/menu.js"></script>
  </div>
  <div>
    <script type="text/Javascript" src="./events_files/menu_com.js"></script>
  </div>
  <div>
    <script type="text/Javascript">
function Go(){return}
</script>
  </div>
  <noscript>
  Your browser does not support script - please enable ActiveX and/or Javascript
  </noscript>
  <!-- InstanceBeginEditable name="MainBody" -->
  <p>&nbsp;</p>
  <div class="breadcrumb"><a href="http://www.rippingalevillage.co.uk/index.htm">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;News
    and Events&nbsp;&nbsp;|&nbsp;&nbsp;Events<br>
  </div>
  <a name="Top"></a>
  <div class="maintext">
    <div id="middlecolumnwide">
      <h2>What's happening in Rippingale</h2>
      <p class="highlighted"> <strong>For regular events see the&nbsp;<a href="http://www.rippingalevillage.co.uk/HallDiary.htm">Village
        Hall Diary</a></strong>&nbsp;<br>
        <br>
        Also visit <a href="http://www.rippingalevillage.co.uk/RF-Home.htm">Village Feast</a>,&nbsp;<a href="http://www.rippingalevillage.co.uk/WomensInstitute.htm">Women's
        Institute</a>,&nbsp;<a href="http://www.rippingalevillage.co.uk/GardeningClub.htm">Gardening Club</a>, and&nbsp;<a href="http://www.rippingalevillage.co.uk/FriendshipClub.htm">Friendship
        Club</a> for more details.<br>
        <br>
        If you would like to add an event to this page please <a href="http://www.rippingalevillage.co.uk/ContactUs.htm">click
        here to email us</a> or contact a member of the <a href="http://www.rippingalevillage.co.uk/AboutUs.htm">website
        committee.</a></p>
      <script type="text/Javascript" src="./events_files/Date.js"></script><font color="#336699"><font size="1"><b>Last updated:&nbsp;&nbsp;2/10/2015</b></font></font>
      <br>
      <p>&nbsp;</p>

      <!-- START OF EVENTS CODE GOES HERE -->
      <form action="events.php" method='get'>
        <h1>How would you like to filter the search</h1><br>
        Location: <select name="locationFilter">
                    <option value=""> -- </option>
                    <option value="Village Hall, Rippingale">Village Hall, Rippingale</option>
                    <option value="Rippingale Village">Rippingale Village</option>
                    <option value="Visit">Visit</option>
                  </select><br>
        <input type="submit" value="Filter search"><br>
      </form>


<!-- php code goes here -->
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

  // querying for all events from 5 days ago or later
  $dateToCheck = date("Y\-m\-d",strtotime("-15 days"));
  $sql = "SELECT * FROM events WHERE date>'" . $dateToCheck . "'";

  // can filter the search based on values in the GET method
  if(isset($_GET["locationFilter"]) and $_GET["locationFilter"] != ""){
    $sql = $sql . " AND location=" . $_GET["locationFilter"];
  }

  $result = $conn->query("$sql" . " ORDER BY date DESC");

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        // changes the result data to a better string format
        $dateAsReadString = date("l d F Y",strtotime($row["date"]));
        $timeAsReadString = date("h:i A",strtotime($row["time"]));

        // prints the event information to the webpage as a table
        echo "</br></br>";
        echo "<table style='FONT-SIZE:10pt;font-family:Ariel;'>";
        echo "<tr>";
        echo "<td style='width:100px'><b>" . $dateAsReadString . "  </b></td>";
        echo "<td style='width:80px'>" . $timeAsReadString . "  </td>";
        echo "<td style='width:350px'><b> " . $row["title"] . "</b></td>";
        echo "</tr><tr>";
        echo "<td colspan='2'></td>";
        echo "<td style='color:#800000;'><i>" . $row["location"] . "</i></td>";
        echo "</tr><tr>";
        echo "<td colspan='2'></td>";
        echo "<td style='width:350px'>" . $row["description"] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
  }else{
    echo "<h3>No events were retrieved from the database</h3>";
  }

?>


      <!-- END Paste -->
      <a href="http://www.rippingalevillage.co.uk/Events.htm#Top">Back to top</a> </div>
  </div>
  <p>&nbsp;</p>
  <!-- InstanceEndEditable -->
  <div id="footer">
    <hr>
    <div align="center"><font size="-2"><a href="http://www.rippingalevillage.co.uk/AboutUs.htm">About Us</a>&nbsp;|&nbsp;<a href="http://www.rippingalevillage.co.uk/ContactUs.htm">Contact
      Us</a>&nbsp;|&nbsp;<a href="http://www.rippingalevillage.co.uk/Accessibility.htm">Accessibility</a>&nbsp;|&nbsp;<a href="http://www.rippingalevillage.co.uk/SiteIndex.htm">A
      to Z Site Index</a><br>
      �<i>The contents of this website are copyright.&nbsp;&nbsp;&nbsp;&nbsp;Nb:
      This website leaves cookies to help us monitor how the site is being viewed.</i></font></div>
    <!-- Start of StatCounter Code -->
    <script type="text/javascript" language="javascript">
var sc_project=416178;
var sc_partition=2;
		</script>
    <script type="text/javascript" language="javascript" src="./events_files/counter.js"></script><span class="statcounter"><a class="statcounter" href="http://www.statcounter.com/" target="_blank"><img src="./events_files/t.php" alt="StatCounter - Free Web Tracker and Counter" border="0"></a></span>

    <noscript>
    &lt;a href="http://www.statcounter.com/" target="_blank"&gt;&lt;img src="http://c3.statcounter.com/counter.php?sc_project=416178&amp;amp;java=0" alt="free counter" border="0"&gt;&lt;/a&gt;
    </noscript>
    <!-- End of StatCounter Code -->
    <!--end div footer -->
  </div>
  <!-- end wrapper  -->
</div>


<!--   <a href="http://www.countryeye.org.uk">www.CountryEye.org.uk</a> -->
<!-- InstanceEnd -->
<div style="position: absolute; visibility: visible; width: 705px; height: 22px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 101; top: 135px; left: 330.5px; background-color: rgb(255, 255, 255);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 42px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: rgb(255, 255, 255);">Home</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 72px; height: 18px; padding-left: 3px; padding-top: 2px; left: 47px; top: 1px; background-color: rgb(255, 255, 255);">Rippingale</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 92px; height: 18px; padding-left: 3px; padding-top: 2px; left: 123px; top: 1px; background-color: rgb(255, 255, 255);">Parish Council</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 87px; height: 18px; padding-left: 3px; padding-top: 2px; left: 219px; top: 1px; background-color: rgb(255, 255, 255);">Village Affairs</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 112px; height: 18px; padding-left: 3px; padding-top: 2px; left: 310px; top: 1px; background-color: rgb(255, 255, 255);">Activities &amp; Groups</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 57px; height: 18px; padding-left: 3px; padding-top: 2px; left: 426px; top: 1px; background-color: rgb(255, 255, 255);">Services</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 107px; height: 18px; padding-left: 3px; padding-top: 2px; left: 487px; top: 1px; background-color: rgb(255, 255, 255);">News and Events</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 37px; height: 18px; padding-left: 3px; padding-top: 2px; left: 598px; top: 1px; background-color: rgb(255, 255, 255);">Links</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 62px; height: 18px; padding-left: 3px; padding-top: 2px; left: 639px; top: 1px; background-color: rgb(255, 255, 255);">About Us</div></div><div style="position: absolute; visibility: hidden; width: 202px; height: 190px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">Rippingale Village</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Early History of Rippingale</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Recent History of Rippingale</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">History of Rippingale Allotments</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">Rippingale Past and Present</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">School</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 127px; background-color: white;">Photo Gallery</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 148px; background-color: white;">Village Archives</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 197px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 169px; background-color: white;">Country Eye</div></div><div style="position: absolute; visibility: hidden; width: 192px; height: 169px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">About the Council</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Your Councillors</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Minutes</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">Planning Applications</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">Annual Reports</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">Audit &amp; Accounts</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 127px; background-color: white;">Statutory &amp; Policy Documents</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 187px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 148px; background-color: white;">Archives</div></div><div style="position: absolute; visibility: hidden; width: 182px; height: 169px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">St Andrew's Church</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Village Hall</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Neighbourhood Watch</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">Village Design Committee</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">Rippingale News</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">Oil Consortium</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 127px; background-color: white;">Rippingale Feast</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 177px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 148px; background-color: white;">Birth of the Archers</div></div><div style="position: absolute; visibility: hidden; width: 152px; height: 232px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">Women's Institute</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Rippingale Junior Football</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Gardening Club</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">Allotment Group</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">Friendship Group</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">Cribbage Team</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 127px; background-color: white;">Bourne to Linedance</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 148px; background-color: white;">Rippingale Feast</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 169px; background-color: white;">Bunting Babes</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 190px; background-color: white;">Painting Group</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 211px; background-color: white;">Cheeky Monkeys</div></div><div style="position: absolute; visibility: hidden; width: 152px; height: 274px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">Rippingale Surgery</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Hospital Car Service</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Mobile Library</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">The Shop</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">The Bull</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">Recycling</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 127px; background-color: white;">Bus Services</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 148px; background-color: white;">Local Businesses</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 169px; background-color: white;">Small Ads</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 190px; background-color: white;">Local Search</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 211px; background-color: white;">LIVES</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 232px; background-color: white;">Local Weather</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 253px; background-color: white;">Police 101</div></div><div style="position: absolute; visibility: hidden; width: 152px; height: 127px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">Rippingale News</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">News Clips</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">General Notices</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">Announcements</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 85px; background-color: white;">Events Calendar</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 106px; background-color: white;">Past Events (Photos)</div></div><div style="position: absolute; visibility: hidden; width: 82px; height: 22px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 77px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">Links</div></div><div style="position: absolute; visibility: hidden; width: 152px; height: 85px; font-family: arial, verdana, tahoma, &#39;Times New Roman&#39;; font-weight: normal; font-style: normal; font-size: 9pt; z-index: 102; top: 0px; left: 0px; background-color: rgb(225, 225, 244);"><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 1px; background-color: white;">About Us</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 22px; background-color: white;">Terms &amp; Condiditons</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 43px; background-color: white;">Accessibility</div><div style="position: absolute; visibility: inherit; overflow: hidden; cursor: default; color: rgb(51, 102, 153); text-align: left; width: 147px; height: 18px; padding-left: 3px; padding-top: 2px; left: 1px; top: 64px; background-color: white;">Contact Us</div></div></body></html>
