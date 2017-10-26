<?php

function show_item_result($message)
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
      onClick="window.location='../view/search_item_ui.php'"/>
    </center>
    UPTOEND;

  echo "</BODY>";
echo "</HTML>";
}
?>
