<!DOCTYPE html>
<html>
<head>
  <style>
  {
    box-sizing: border-box;
  }



  #myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 16px;
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

  $query = "SELECT * FROM Item";

  $result = mysql_query($query);

  ?>

  <input type="text" id="numberInput" onkeyup="searchNumber()" placeholder="Item Number">
  <input type="text" id="desInput" onkeyup="searchDescription()" placeholder="Item Description" >
  <input type="text" id="catInput" onkeyup="searchCategory()" placeholder="Category" >
  <input type="text" id="depInput" onkeyup="searchDepartment()" placeholder="Department" >

  <table id="myTable">
    <tr class="header">
      <th style="width:15.83%;">Item Number</th>
      <th style="width:15.83%;">Item Description</th>
      <th style="width:15.83%;">Item Category</th>
      <th style="width:15.83%;">Item Department</th>
      <th style="width:15.83%;">Purchase Cost</th>
      <th style="width:15.83%;">Retail Price</th>
      <th style="width:5%;"></th>
    </tr>
    <?php

    while($row = mysql_fetch_Array($result)) {
      ?>
      <form action='modify_item_ui.php' method='POST'>
        <tr>
          <td>  <input type="hidden" name="itemNumberInput" value="<?php echo htmlspecialchars($row['ItemNumber']); ?>"> <?php echo $row['ItemNumber']; ?> </td>

          <td>  <input type="hidden" name="itemDescriptionInput" value="<?php echo htmlspecialchars($row['ItemDescription']); ?>"> <?php echo $row['ItemDescription']; ?> </td>

          <td>  <input type="hidden" name="categoryInput" value="<?php echo htmlspecialchars($row['Category']); ?>"> <?php echo $row['Category']; ?> </td>

          <td>  <input type="hidden" name="departmentNameInput" value="<?php echo htmlspecialchars($row['DepartmentName']); ?>"> <?php echo $row['DepartmentName']; ?> </td>

          <td>  <input type="hidden" name="purchaseCostInput" value="<?php echo htmlspecialchars($row['PurchaseCost']); ?>"> <?php echo $row['PurchaseCost']; ?> </td>

          <td>  <input type="hidden" name="retailPriceInput" value="<?php echo htmlspecialchars($row['FullRetailPrice']); ?>"> <?php echo $row['FullRetailPrice']; ?> </td>

          <td> <input type = 'submit' value='Modify'></td>
        </tr>
      </form>
      <?php } ?>


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
