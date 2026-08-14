<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'AVIGRO' ?></title>


    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- CSS -->

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/style.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/navbar.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/hero.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/about.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/stats.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/differentials.css">

    <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/chicken-map.css">

        <link rel="stylesheet" href="/Site_Avigro_MVC/public/assets/css/receitas.css">



    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >

</head>


<body>


    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>


    <main>

        <?= $content ?>

    </main>


    <?php require_once __DIR__ . '/../partials/footer.php'; ?>


    <!-- JavaScript -->

<script src="/Site_Avigro_MVC/public/assets/js/chicken-map.js?v=2"></script>
<script src="/Site_Avigro_MVC/public/assets/js/navbar.js"></script>

</body>

</html>