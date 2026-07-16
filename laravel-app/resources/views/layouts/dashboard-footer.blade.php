<!-- <div class="d-flex flex-column flex-lg-row footerSec py-3 px-0 hideOnMobile">
    <div class="col-12 col-lg-6 d-flex flex-column flex-lg-row">
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <i class="bi bi-envelope px-2"></i>
            zebrabrain@gmail.com
        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <i class="bi bi-geo-alt px-2"></i>
            Address
        </div>
    </div>
    <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end socialIcons pe-3">
        <i class="bi bi-facebook px-2"></i>
        <i class="bi bi-twitter px-2"></i>
        <i class="bi bi-google px-2"></i>
        <i class="bi bi-instagram px-2"></i>
    </div>
</div> -->

<!-- <div class="d-flex displayOnMobile footerMobileSection text-center align-items-center justify-content-center py-2 px-2">
    <p class="mb-0">Check your brain's potential, it's FREE!</p>
</div> -->

</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
    integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script src="{{ asset('assets/js/scripts.js') }}"></script>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
<script>
    $(document).ready(function() {
    $(".notification-drop .item").on('click',function() {
      $(this).find('ul').toggle();
    });
  });
  
</script>

</html>
@if(Session::has('package-fail'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('toggleMyModal'), {
            keyboard: false
        });
        myModal.show();
    });
</script>
<div class="modal fade" id="toggleMyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="login_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mt-4 mb-4"><?php echo Session::get('package-fail') ?></p>
          <a href="{{url('packages')}}"><button class="btn-yellow">Upgrade</button></a>
        </div>

      </div>
    </div>
</div>
@endif
<script>
function protectVideos() {
    document.querySelectorAll("video").forEach(video => {
        video.controlsList = "nodownload noremoteplayback";
        video.disablePictureInPicture = true;
    });
}

document.addEventListener("DOMContentLoaded", protectVideos);

// Optional: re-run when new content appears
const observer = new MutationObserver(protectVideos);
observer.observe(document.body, { childList: true, subtree: true });
</script>

