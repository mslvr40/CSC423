<?php

function show_promo_result($output, $name, $description, $amount, $type)
{

  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";
    
    
    if ($output)
    {
      if ($output != "")
      {
        echo '<center><font color="blue">'.$output.'</font></center><br />';
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

