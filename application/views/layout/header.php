<nav class="navbar navbar-inverse top-menu no-margin-bottom">
        <span class="top-center-text">
           <?php if ($this->session->is_logged_admin) {

               echo "<h1> Admin Portal - Faculty </h1>";
           } else {
               echo "<h1> Please Login </h1>";
           } ?>
            </span>
    </div>
</nav>

