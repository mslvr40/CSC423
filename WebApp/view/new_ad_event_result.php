<?php
function show_adevent_result($message, $adCode, $adName, $adName, $adStart, $adEnd, $adDesc, $adEventType)
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
	onClick="window.location='../view/index.html#start'"/>
  </center>
UPTOEND;
 echo "</BODY>";
 echo "</HTML>";
}
?>
