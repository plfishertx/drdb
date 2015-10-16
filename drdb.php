<html>
<head><title>PHP Test 1</title></head>

<body>

<p>An HTML line</p>

<?php
// This program puts data into the local Data Reduction Staus database.
  require_once 'pfisher.conf';

  print "<p>Instantiate a mysqli connection.</p>";
  $cxn = new mysqli($db_hn, $db_us, $db_pw, $db_db);
  print "<p>Successfully (?) instantiated object.</p>";
  print "<p>Error msg should follow.</p>" ;
  print($cxn->errno);

  print "<p>Try to connect to MySQL server:</p>";
  $q = "SELECT * FROM Project";

  $result = $cxn->query($q) or die("Query failed! Ahhhh!");
  print "Got result.\n";

  if($result) {
     print "<p>Result is valid.</p>";
     while( $row = $result->fetch_row())
     {
       print "<p>";
       print "{$row[0]}";
       print "</p>";
         foreach($row as $data)
              print $data;
     }  //end while loop.
}    //End of if-result
  else print "No result.";



?>
</body>
</html>
