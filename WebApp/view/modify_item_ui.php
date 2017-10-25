<html>
<head>
    <title> Add new Item</title>
</head>
<body>
    <center>
        <?php 
            $initNumber = $_POST['itemNumberInput'];
            $initDescription = $_POST['itemDescriptionInput'];
            $initCategory = $_POST['categoryInput'];
            $initDepartment = $_POST['departmentNameInput'];
            $initCost = $_POST['purchaseCostInput'];
            $initRetail = $_POST['retailPriceInput'];
            

        ?>
        <h2>MODIFY THIS ITEM</h2>
        <form action='../model/modify_item.php' method='post'>
            <table>
                 <tr>
                    <td> Item Number: </td>
                    <td><input type = "text" readonly name = "itemNumber" id = "itemNumber" value = "<?php echo htmlspecialchars($initNumber); ?>"></td>
                </tr>
                <tr>
                    <td> Item description: </td>
                    <td><input type = "text" name = "itemDescription" id = "itemDescription" value = "<?php echo htmlspecialchars($initDescription); ?>"></td>
                </tr>
                 <tr>
                    <td> Category:</td>
                    <td> <input type = "text" name = "itemCategory" id = "itemCategory" value = "<?php echo htmlspecialchars($initCategory); ?>"></td>
                </tr>
                 <tr>
                    <td> Department:</td>
                    <td> <input type = "text" name = "itemDepartment" id = "itemDepartment" value = "<?php echo htmlspecialchars($initDepartment); ?>"></td>
                </tr>
                 <tr>
                    <td> Purchased Cost:</td>
                    <td> <input type = "text" name = "itemPurchaseCost" id = "itemPurchaseCost" value = "<?php echo htmlspecialchars($initCost); ?>"></td>
                </tr>
                <tr>
                    <td> Full Retail Price: </td>
                    <td><input type = "text" name = "itemRetailPrice" id = "itemRetailPrice" value = "<?php echo htmlspecialchars($initRetail); ?>"></td>
                </tr>
            </table>
            <input type = "submit" value="submit">
            <input type = "button" onclick="window.location='search_item_ui.php'" value = "back">
        
        </form>
    </center>
    
</body>
</html>