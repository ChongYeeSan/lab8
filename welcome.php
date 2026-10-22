    <?php
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: login.php');
        }
        include 'header.inc';
    ?>
        <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>
    <?php include 'footer.inc'; ?>
