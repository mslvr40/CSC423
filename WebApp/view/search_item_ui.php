<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}



#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
 

<h2>My Customers</h2>

<?php 

  require('../db.inc');
    
  $conn = mysql_connect(DB_SERVER, DB_UN, DB_PWD);
  if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
      exit;
  }

  // Select the database  
  $dbh = mysql_select_db(DB_NAME);
  if (!$dbh){
        echo "Unable to select ".DB_NAME.": " . mysql_error();
    exit;
  }

  $query = "SELECT ItemNumber, ItemDescription, Category, DepartmentName FROM Item";

  $result = mysql_query($query);

?>

<input type="text" id="numberInput" onkeyup="searchNumber()" placeholder="Item Number">
<input type="text" id="desInput" onkeyup="searchDescription()" placeholder="Item Description" >
<input type="text" id="catInput" onkeyup="searchCategory()" placeholder="Category" >
<input type="text" id="depInput" onkeyup="searchDepartment()" placeholder="Department" >

<table id="myTable">
  <tr class="header">
    <th style="width:25%;">Item Number</th>
    <th style="width:25%;">Item Description</th>
    <th style="width:25%;">Item Category</th>
    <th style="width:25%;">Item Department</th>
  </tr>
  <?php

  while($row = mysql_fetch_Array($result))
{
  echo "<tr>";
  echo "<td>" . $row['ItemNumber'] . "</td>";
  echo "<td>" . $row['ItemDescription'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['DepartmentName'] . "</td>";
  echo "</tr>";
  echo "<form>"
}

   
?>
</table>


<script>
function searchNumber() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("numberInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchDescription() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("desInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchCategory() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("catInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchDepartment() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("depInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>
</body>
</html>
