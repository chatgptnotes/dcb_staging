

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">

      </div>

    </div>
  </footer>
  <!-- / Footer -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>



      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>


      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->





    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('backend-assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>



    <!-- Main JS -->
    <script src="{{ asset('backend-assets/js/main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('backend-assets/js/app-logistics-dashboard.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    function configureDataTables(className) {
    var tables = document.getElementsByClassName(className);
    for (var i = 0; i < tables.length; i++) {
        new DataTable(tables[i]);
    }
    }
    configureDataTables('data-table');
</script>
<script>
  /*
   * The bundled template only binds menu-toggle clicks on mobile devices.
   * Bind them here for all Admin screens so expandable navigation remains
   * keyboard and mouse accessible on desktop as well.
   */
  (function () {
    var menu = document.getElementById('layout-menu');

    if (!menu) {
      return;
    }

    function setMenuItemOpen(menuItem, open) {
      menuItem.classList.toggle('open', open);

      var toggle = menuItem.querySelector(':scope > .menu-toggle');
      if (toggle) {
        toggle.setAttribute('aria-expanded', String(open));
      }
    }

    function toggleMenu(toggle) {
      var menuItem = toggle.closest('.menu-item');
      if (!menuItem) {
        return;
      }

      var willOpen = !menuItem.classList.contains('open');
      var siblings = menuItem.parentElement.children;

      for (var index = 0; index < siblings.length; index += 1) {
        if (siblings[index] !== menuItem && siblings[index].classList.contains('menu-item')) {
          setMenuItemOpen(siblings[index], false);
        }
      }

      setMenuItemOpen(menuItem, willOpen);

      if (window.Helpers && window.Helpers.menuPsScroll) {
        window.Helpers.menuPsScroll.update();
      }
    }

    menu.addEventListener('click', function (event) {
      var toggle = event.target.closest('.menu-toggle');
      if (!toggle || !menu.contains(toggle)) {
        return;
      }

      event.preventDefault();
      event.stopImmediatePropagation();
      toggleMenu(toggle);
    }, true);

    menu.addEventListener('keydown', function (event) {
      var toggle = event.target.closest('.menu-toggle');
      if (!toggle || !menu.contains(toggle) || (event.key !== 'Enter' && event.key !== ' ')) {
        return;
      }

      event.preventDefault();
      event.stopImmediatePropagation();
      toggleMenu(toggle);
    }, true);
  }());
</script>
<style>
  .admin-password-control { position: relative; }
  .admin-password-control input { padding-right: 62px; }
  .admin-password-toggle { position: absolute; top: 50%; right: 8px; transform: translateY(-50%); border: 0; background: transparent; color: #696cff; cursor: pointer; font-size: 13px; font-weight: 600; padding: 8px; }
</style>
<script>
  document.querySelectorAll('input[type="password"]').forEach(function (input) {
    if (input.closest('.admin-password-control')) return;

    var wrapper = document.createElement('div');
    var button = document.createElement('button');
    wrapper.className = 'admin-password-control';
    input.parentNode.insertBefore(wrapper, input);
    wrapper.appendChild(input);
    button.type = 'button';
    button.className = 'admin-password-toggle';
    button.textContent = 'Show';
    button.setAttribute('aria-label', 'Show password');
    button.addEventListener('click', function () {
      var visible = input.type === 'text';
      input.type = visible ? 'password' : 'text';
      button.textContent = visible ? 'Show' : 'Hide';
      button.setAttribute('aria-label', visible ? 'Show password' : 'Hide password');
    });
    wrapper.appendChild(button);
  });
</script>
  </body>

</html>

  <!-- beautify ignore:end -->
