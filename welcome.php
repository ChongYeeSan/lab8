<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['user'])) {
            header('Location: login.html');
        }
        include 'header.inc';
    ?>
        <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>
    <?php include 'footer.inc'; ?>
</body>
</html>