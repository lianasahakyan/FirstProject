<?php
if(isset($_POST['submit']))
{
    $bgcolor=$_POST['bg'];
    $textcolor=$_POST['tt'];
    echo"<body style='background-color:$bgcolor'>";
    echo"<p style='color:$textcolor'>";
    echo"User has submited form and entered this name:<b> $bgcolor $textcolor </b></p>";
}

echo"<form method='post' action=".$_SERVER['PHP_SELF'].">";
echo"Background Color <input type='text' name='bg'><br>";
echo"Text Color <input type='text' name='tt'><br>";
echo"<input type='submit' name='submit' value='Submit Form'><br>";
echo"</form></body>";
