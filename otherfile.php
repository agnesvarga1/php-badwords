<?php  
$paragraph = $_POST["paragraph"];
$secretWrd = $_POST["word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>    
    <span><?php echo str_replace($secretWrd,"***",$paragraph) ?></span>
    <p>The length of the original paragraph:<strong> <?php echo strlen($paragraph) ?></strong></p>
    <p>The length of the modified paragraph:<strong> <?php echo strlen(str_replace($secretWrd,"***",$paragraph)) ?></strong></p>
    <span>The lenth of the secret word:<strong> <?php echo strlen($secretWrd) ?></strong></span>
    
</body>
</html>