<?php 
   

    require_once 'function/upload.php';
    require_once 'function/config.php';

    $belgesor = $db->prepare("select * from dosya");
    $belgesor -> execute();
?>
 
        
<?php require_once 'modal.php'; ?>

        <div id='menuFull'>
<?php require_once 'api/login.php'; ?>


</div>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mina Ecer</title>
</head>
<body>

<div class='row'>
    <div  class='table'>
                <table   class='table align-middle table-nowrap mb-0' border = '2' id="tb">
                    <thead class='table-light'>
                    <tr >
                
                <th>Task</th>
            <th>Title</th>
            <th>Description</th>
            <th>colorCode</th>
                    <?php require_once 'api/table.php'; ?>
                   
         </div>
       <script src="js/search.js"></script>
            
    

</body>
</html>