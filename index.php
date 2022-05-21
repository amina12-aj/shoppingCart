
 <?php 
require_once('./php/classdb.php');
require_once('./php/component.php');

//create an instance of classdb
$database = new classdb("productdb", "producttb");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <div class="container">
        <div class="row text-center py-5"></div>
        <?php
        component("Safari Dress", 500, "for plus size", "" );
        component("Safari Dress",800, "for plus size","" );
        component("Safari Dress", 500, "for plus size", "" );
        component("Safari Dress",800, "for plus size","" );
        ?>
          
        </h5>
    </div>

</body>
</html>