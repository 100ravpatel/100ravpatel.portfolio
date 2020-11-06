<?php
session_start();
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>welcome <?php echo $_SESSION['username'];?> </h2>
</body>
</html>


