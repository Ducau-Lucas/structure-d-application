<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php
        include TEMPLATE_PARTS . '/_header.php';

        include $template;

        include TEMPLATE_PARTS . '/_footer.php'; 

    ?>
</body>

</html>