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

  <input type="text" id="numberInput" onkeyup="searchAll()" placeholder="Item Number">
  <input type="text" id="desInput" onkeyup="searchAll()" placeholder="Item Description" >
  <input type="text" id="catInput" onkeyup="searchAll()" placeholder="Category" >
  <input type="text" id="depInput" onkeyup="searcAll()" placeholder="Department" >

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

      function searchAll() {
        var i1, i2, i3, i4, table, tr, tds;
        i1 = document.getElementById("numberInput").value.toUpperCase();
        i2 = document.getElementById("desInput").value.toUpperCase();
        i3 = document.getElementById("catInput").value.toUpperCase();
        i4 = document.getElementById("depInput").value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {

          tds = tr[i].getElementsByTagName("td");
          var firstCol, secondCol, thirdCol, fourthCol;
          if(tds[0]){
           firstCol = tds[0].textContent.toUpperCase();
          }
          else {
            firstCol="";
          }
          if(tds[1]){
            secondCol = tds[1].textContent.toUpperCase();
          }
          else {
            secondCol="";
          }
          if(tds[2]){
            thirdCol = tds[2].textContent.toUpperCase();
          }
          else {
            thirdCol="";
          }
          if(tds[3]){
            fourthCol = tds[3].textContent.toUpperCase();
          }
          else {
            fourthCol="";
          }
          if (firstCol.indexOf(i1) > -1 && secondCol.indexOf(i2) > -1 && thirdCol.indexOf(i3) > -1 && fourthCol.indexOf(i4) > -1) {
            tr[i].style.display = "";
          } 
          else {
            tr[i].style.display = "none";
          }
        }   
      }    
    </script>
  </body>
  </html>
