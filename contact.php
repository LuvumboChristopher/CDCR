<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="./images/logos/favicon.png"/>
    <title>Contact & Acces - Cabinet de chirurgie dentaire 108 Bd Croix Rousse</title>
    <link rel="stylesheet" href="./css/style.css">  
</head>
<body>
    <!-- Header Content-->
    <header class="header">
        <?php include_once 'views/partials/header/nav.php' ?>  
        <?php include_once 'views/partials/header/responsive_nav.php' ?>  
    </header>
    <!-- Main Content-->
    <?php include_once 'views/partials/menu/responsive_nav_menu.php' ?>
    <div class="container">
        <main class="main"> 
            <div class="scroll">
                <?php include_once 'views/pages/contact.php' ?>
            </div>
        </main>    
    </div>
    <!-- Footer Content-->
    <?php include_once 'views/partials/footer/footer.php' ?>   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type = "text/javascript" src="./js/script.js"></script>
</body>
</html>
