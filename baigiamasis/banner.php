<div class="banner">
  <div class="banner-image">
    <img src="images/avatar.png" height="200px" alt="">
  </div>
  <div class="banner-text">
    Lorem ipsum dolor sit amet
  </div>
  <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn-large #757575 grey darken-1 modal-trigger" href="#modal1">Hire me!</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
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
      </div>
    </div>
</div>
