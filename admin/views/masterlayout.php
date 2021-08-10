<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/asm/public/admin.css">
</head>

<body>
    <div class="container">
        <div class="overlayer"></div>
        <?php require_once "block/header.php" ?>

        <main>
            <?php require_once "page/" . $data["page"] . ".php" ?>

        </main>
        <?php require_once "block/footer.php" ?>

    </div>
    <script src="/asm/public/script.js"></script>



</body>

</html>