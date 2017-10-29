<html>
<head>
    <title> Add new Item</title>
    <meta charset="UTF-8">
    <script src="../Validate Regex for Item (Modify and New).js"></script>
    <script>
        function verifItems(){
        console.log("function);
        validatePurchasedCost();
        validateRetailPrice();
        validateItemID();
        validateItemDescription();
        }
    </script>
</head>
<body>
    <center>
        <h2>ADD A NEW ITEM</h2>
        <form action='../model/new_item.php' method='post'>
            <table>
                <tr>
                    <td> Item description: </td>
                    <td><input type = "text" name = "itemDescription" id = "itemDescription"></td>
                </tr>
                 <tr>
                    <td> Category:</td>
                    <td> <input type = "text" name = "itemCategory" id = "itemCategory"></td>
                </tr>
                 <tr>
                    <td> Department:</td>
                    <td> <input type = "text" name = "itemDepartment" id = "itemDepartment"></td>
                </tr>
                 <tr>
                    <td> Purchased Cost:</td>
                    <td> <input type = "text" name = "itemPurchaseCost" id = "itemPurchaseCost"></td>
                </tr>
                <tr>
                    <td> Full Retail Price: </td>
                    <td><input type = "text" name = "itemRetailPrice" id = "itemRetailPrice"></td>
                </tr>
            </table>
            <input type = "submit" value="submit">
            <input type = "button" onclick="window.location='index.html'" value = "back">
        
        </form>
    </center>
    
</body>
</html>
