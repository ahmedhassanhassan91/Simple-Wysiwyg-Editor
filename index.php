<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>WYSIWYG - Editor</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/> <!-- poppins google font -->

    <link rel="stylesheet" href="assets/css/all.min.css"/> <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/wysiwyg.css"/>
</head>
<body>

    <div class="wrapper">

        <h1 class="header">Editor</h1>
        
        <form action="data.php" method="POST" class="wysiwyg">
            <?php 
                require_once('wysiwyg.php'); // Include Wysiwyg Editor
            ?>
        </form>

    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wysiwyg.js"></script>
</body>
</html>
