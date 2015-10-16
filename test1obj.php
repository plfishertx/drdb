<html>
<head><title>PHP Test 1</title></head>

<body>

<p>An HTML line</p>
<?php

  print "Instantiate a mysqli connection.";
  $cxn = new mysqli("localhost", "root", "Tt0Aph03n1ch1", "ncp");
  print "Successfully (?) instantiated object.";
  print "<p>Error msg should follow.</p>";
  print($cxn->errno);
  print "<p>Try to connect to MySQL server:</p>";

  $q = "SELECT * FROM tutSession ";
  print "Constructed query string.\n";

  $result = $cxn->query($q) or die("Query failed! Ahhhh!");
  print "Got result.\n";

  if($result) {
     print "<p>Result is valid.</p>";
     print " ";
     print "<h2>Appointments</h2>";
     //print "<table> <tr><th>Time</th><th>Code</th></tr>";
    
     while( $row = $result->fetch_row())
     {
//       print "<p>";
//       print "{$row['apptGMT']} session code:  {$row['sessionID']}";
 //      print "\n";
//       print "</p>";
//         print "<tr>\n";
         foreach($row as $data)
              print $data;
//            print "\t <td>{$data}</td>";
//         Finish the row.
//         print "</tr>";
     }  //end while loop.
     //Finish the table.
//    print "</table>";
}    //End of if-result 
  else print "No result.";

?>
</body>
</html>
