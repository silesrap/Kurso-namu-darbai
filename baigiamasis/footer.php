<?php
  require __DIR__ . '/forma/app.php';
 ?>
<footer>
  <div class="page-name">
    <span id="kontaktai">Contact me</span>
  </div>
  <div class="container">
    <form class="col s12 m12 l12" action="forma/app.php" method="post">
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <input placeholder="Name" id="first_name" name="name" type="text" required class="validate">
        </div>
        <div class="input-field col s12 m6 l6">
          <input  placeholder="Phone" id="last_name" name="phone" type="text" required class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input placeholder="Email" id="email" name="email" type="email" required class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input placeholder="Message" id="message" name="message" type="text" required class="validate">
        </div>
      </div>
      <button class="btn waves-effect waves-light #9e9e9e grey" type="submit" name="action"><i class="material-icons">send</i>
      </button>
    </form>
    <div class="footer">
      <a id="footer-contacts" href="tel:+37061118874">+370 611 18874</a>
      <span class="copyright">
        | &copy <?php echo date("Y"); ?> |
      </span>
      <a id="footer-contacts" href="https://www.facebook.com/Laimonas.foto.lt/">FACEBOOK</a>
    </div>
  </div>
</footer>
<script type="text/javascript" src="js/jquery-3.3.1.js" type="video/"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/javascript.js" charset="utf-8"></script>
</body>
</html>
