<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Fajar Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?">Home</a>
      </li>
      <?php if(isset($_SESSION["is_login"])) {?>
        <li class="nav-item">
            <a class="nav-link" href="?logout">Logout</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="?login">Login</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>