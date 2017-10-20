<?php

function show_item_result($message, $description, $category, $department, $purchaseCost, $retailPrice)
{

  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";

  
  if ($message)
  {
    if ($message != "")
       {
	 echo '<center><font color="blue">'.$message.'</font></center><br />';
       }
  }

echo <<<UPTOEND
  <BR/><BR/>
  <center>
  <input type="button" value="Return to Main Menu" 
	onClick="window.location='../view/index.html'"/>
  </center>
UPTOEND;

 echo "</BODY>";
 echo "</HTML>";
}
?>
