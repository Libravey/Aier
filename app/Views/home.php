<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title><?php echo $title ?></title>

</head>

<body>

<div class="article">

    <h1><?php echo $article['name'] ?></h1>

    <div class="content">

        <?php echo $article  ?>

    </div>

</div>

<ul class="msg">

    <h1><?php echo $show_msg ?></h1>

</ul>

</body>

</html>