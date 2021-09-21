<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo pariatur doloremque inventore et reiciendis totam nulla modi cum voluptas! Cupiditate libero sapiente doloribus asperiores, deserunt nesciunt quas quis optio assumenda?';
    echo $paragraph;
    ?>
    </p>
    <div><?php echo strlen($paragraph) ?></div>
    <p><?php
    $paragraph = str_replace('elit', '***', $paragraph);
    $paragraph = str_replace('doloremque', '***', $paragraph);
    $paragraph = str_replace('doloribus', '***', $paragraph);
    $paragraph = str_replace('dolor', '***', $paragraph);
    echo $paragraph;
    ?></p>
    <div><?php echo strlen($paragraph) ?></div>
</body>
</html>