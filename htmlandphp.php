<?php
//section 8 intégrer PHP dans le code
//12-include et require et lesdeux_once
/*those two functions are used to include and execute the content of
  one php file into another (reuse and organize ur project)*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
     include "header.php"; 
     include "page_content.php";
     include "footer.php";
    ?>

    
</body>
</html>
