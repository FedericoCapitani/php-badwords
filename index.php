<?php
$title = "Brutte parole";
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis nemo nam nisi libero optio laboriosam? Error, ipsa non? Veritatis, a quia incidunt velit 
    quos rerum voluptatem doloribus obcaecati? Saepe, dolorem est recusandae labore rem mollitia deserunt ullam sed distinctio maxime.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, voluptatum! Eligendi dolor, debitis sint reiciendis, possimus nisi quod unde soluta consequatur dolore, at vitae corrupti ullam excepturi earum blanditiis maiores tempore nesciunt ipsum! Repellendus odit consectetur, maiores provident distinctio libero.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sed a, ut blanditiis deleniti distinctio debitis. Aspernatur delectus quod dignissimos consequatur impedit! Laborum quo nihil quod id enim illum minus itaque, eos ad expedita consectetur assumenda laudantium, dolor in reiciendis?";
$_GET["word"];
var_dump($_GET["word"]);
$new_text = str_replace($_GET["word"], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad_words</title>
</head>
<body>
    
    <h1><?php echo $title;?></h1>
    <p><?php echo $text;?></p>
    <p><?php echo $new_text;?></p>
    
</body>
</html>