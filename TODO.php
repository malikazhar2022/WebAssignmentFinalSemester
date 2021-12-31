<html>
<?php 

session_start();

if(isset($_POST['ADD']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
 
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
}

if(isset($_POST['CLEAR']))
{
    include ("clearSession.php");
}
?>
    <head>
    <title>TODO PAGE</title>
    </head>
    <form method="POST">
    <h3>Enter Task Below in TextBox</h3>
    <div>
    <input class="task" id="textbox" type="text" placeholder="Enter Task " name="taskText" />
    <input class="buttons" type="submit" name="ADD" value="ADD TASK"/>
    <input class="buttons" type="submit" name="CLEAR" value="CLEAR ALL"/>
    </div>
</form>
   
</html>