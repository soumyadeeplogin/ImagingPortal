<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Imaging Viewer's Assistant</title>
	<link rel="icon" href="./res/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include '.\php\dbhandler.php';
    $dbObj = new dbhandler();
    $dbObj->connect();//Checking for dbConnection
    //echo '<br><br><br>STATUS CODE :: '.$dbObj->status.'<br><br><br>';
    
    
    if ($dbObj->status == 1)// On Connection
    {
        if ($dbObj->searchTable() == 0)// Checking for table
        {
            $dbObj->createTable();//Creating Table if not found
            $dbObj->createTableS();
        } 
        else 
        {
            include '.\php\home.php';
            
        }
    } 
    else 
    {
        die("<h1>Lot of errors in the db. Nothing to do</h1>");
        
    }
?>
</body>
</html>