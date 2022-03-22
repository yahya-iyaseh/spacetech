
   <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">{{ __('Contact With Us') }}</h3>
          <p class="section-description">{{ __('Contact us to inquire about anything') }}<i class='bx bx-happy-alt'></i></p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1700.7679348312577!2d35.07451886618047!3d31.50943899808853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0e427a55310e246!2zMzHCsDMwJzM0LjAiTiAzNcKwMDQnMzAuOCJF!5e0!3m2!1sen!2s!4v1647801710732!5m2!1sen!2s"
        width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>{{ __('Al-houzee Al-Thany, Hebrorn - WestBank, Palestine') }}</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>{{ __('info@example.com') }}</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>{{ __('00972594367643') }}</p>
              </div>
            </div>

            {{-- <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div> --}}

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="{{ route('create.user.message') }}" method="post" role="form" class="php-email-form">
                @csrf
                @method('POST')
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Your Name') }}" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Your Email') }}" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="{{ __('Your Phone') }}">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('Subject') }}" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="{{ _('Message') }}" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message">
                    @if ($errors->any())
                      @foreach ($errors->all() as $error)
                        <span class="d-block invalid-feedback">{{ $error }}</span>
                      @endforeach
                    @endif
                  </div>
                  {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                </div>
                <div class="text-center"><button type="submit">{{ __('Send Message') }}</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>
