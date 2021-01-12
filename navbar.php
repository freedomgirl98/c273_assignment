<!-- Lek Qiu Rong 19036308 -->
<!-- Navigational Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav a">
    <a class="navbar-brand" href="#">Yishun Community Hospital</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <?php if (isset($_SESSION['username'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="exercises.php">Exercises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="signUp.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php } ?>

        </ul>
    </div>
</nav>
<br/>
<div align="center">
<?php
if (isset($_SESSION['username'])) {
    echo "<h5><b>Welcome " . $_SESSION['username'] . "!</b></h5>";
}
?>
</div>
<!-- Lek Qiu Rong 19036308 -->