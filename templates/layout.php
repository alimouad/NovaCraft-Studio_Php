<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? "NovaCraft Studio - Accueil" ?></title>
</head>
<body>

    <?php require_once 'templates/header.php'; ?>

    <main class="min-h-screen">
        <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/' . $view;
        ?>
    </main>

    <?php require_once 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>