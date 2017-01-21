<dialog class="mdl-dialog" id="modal-example">
  <div class="mdl-dialog__content">

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <img class="article-image" src="<?= base_url() ?>users/vidi.jpg" border="0" alt="">
      </div>

      <div class="mdl-cell mdl-cell--6-col">
        <div class="android-section-title mdl-typography--display-1-color-contrast">Owner</div>

        <div class="demo-list-action mdl-list">
          <div class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-avatar">person</i>
              <span>Vidi Juniarto</span>
            </span>
          </div>
          <div class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-avatar">phone</i>
              <span>Bryan Cranston</span>
            </span>
          </div>
        </div>
      </div>
    </div>





  </div>
  <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
    <button type="button" class="mdl-button">Close</button>
  </div>
</dialog>


<script>
  (function() {
    'use strict';
    var dialog = document.querySelector('#modal-example');
    var closeButton = dialog.querySelector('button');
    var showButton = document.querySelector('#show-modal-example');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    var closeClickHandler = function(event) {
      dialog.close();
    };
    var showClickHandler = function(event) {
      dialog.showModal();
    };
    showButton.addEventListener('click', showClickHandler);
    closeButton.addEventListener('click', closeClickHandler);
  }());
</script>
