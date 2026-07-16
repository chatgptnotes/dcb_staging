<!-- <footer>
    <div class="container pt-3 pb-3">
        <div class="row align-items-center">
            <div class="col-md-4 col-lg-3">
                <h3 class="small-link text-white" ><i class="fa-regular fa-envelope" style="margin-right: 10px;"></i>zabrabrain@gmail.com</h3>
            </div>
            <div class="col-md-4">
                <h3 class="small-link text-white" ><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i>Address</h3>
            </div>
            <div class="col-md-4 col-lg-5 d-flex justify-content-end">
                <i class="fa-brands fa-facebook-f social-icon" ></i>
                <i class="fa-brands fa-twitter social-icon" ></i>
                <i class="fa-brands fa-google-plus-g social-icon" ></i>
                <i class="fa-brands fa-instagram social-icon" ></i>
            </div>
        </div>
    </div>
</footer> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</body>
</html>

<div class="modal fade" id="login_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="login_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>Welcome Back</h1>
          <p class="mt-4 mb-4">Welcome back to Zebra Brain. Please Continue.</p>
          <a href="{{url('sign-up')}}"><button class="btn-yellow">Sign Up</button></a><br>
            <a href="{{url('sign-in')}}"><button class="btn-yellow">Sign In</button></a>
        </div>

      </div>
    </div>
</div>
