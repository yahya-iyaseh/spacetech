<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; @lang('Copyright') <strong>{{ __('Space Tech') }}</strong>. {{ __('All Rights Reserved') }}
    </div>
    <div class="credits">
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('Regna/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('Regna/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('Regna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Regna/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('Regna/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('Regna/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
{{-- <script src="{{ asset('Regna/assets/vendor/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
<script src="{{ asset('Regna/assets/js/main.js') }}"></script>
{{ $slot }}
</body>

</html>
