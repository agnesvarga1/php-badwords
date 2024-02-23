<?php  
$paragraph = $_GET["paragraph"];
$secretWrd = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <p><?php echo $paragraph?></p>
    <p>The length of the paragraph above:<em> <?php echo strlen($paragraph) ?></em></p>
    <span>Secret word: <?php echo str_replace($secretWrd,"***",$secretWrd) ?></span><br>
    <span>The lenth of the secret word:<strong> <?php echo strlen($secretWrd) ?></strong></span>
    
</body>
</html>