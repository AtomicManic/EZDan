<nav class="navbar navbar-light navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" 
             aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    if ($_SESSION['type'] == 1) {
        $home_url = URL . 'parentUserHomePage.php';
    } else if ($_SESSION['type'] == 2) {
        $home_url = URL . 'childUserHomepage.php';
    }
    ?>
    <a class="navbar-brand" href="<?php echo "$home_url" ?>">
        <img src="images/EZDan-logo.png" alt="EZDan-logo">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Destinations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    </div>
    <a href="#">
        <img src="<?php echo $_SESSION['img']; ?>" alt="avatar">
    </a>
  </div>
</nav>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="p-4">
  <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Destinations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
  </div>
</div>


<!-- BOOTSTRAP JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

