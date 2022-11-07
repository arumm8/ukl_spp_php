<?php
    session_start();
    session_destroy();
    $_SESSION['status_login'] = false;
    echo '<script>alert("Anda berhasil logout!");location.href="home.php"</script>';
?>