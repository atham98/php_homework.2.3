<?php
    error_reporting(E_ALL);
    $allFiles = scandir(__DIR__ . '/json');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список тестов</title>
    <link rel=" stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <?php foreach($allFiles as $id => $file):
        if($file == '.' || $file == '..'){
            continue;
        }
        ?>
        <p>
            <a href="test.php?id=<?php echo $id ?>">
                <h3><?php  echo $file?></h3>
            </a>
        </p>
    <?php endforeach ?>
</div>
</body>
</html>