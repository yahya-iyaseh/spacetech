@props(['employees'])
<section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">{{ __('Our Team') }}</h3>
            <p class="section-description">{{ __('We aim for innovation not only in our development organization but
                also in the way we approach every aspect of our business.') }}</p>
        </div>
        <div class="row">
            @foreach ($employees as $employee)
            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src="{{ Voyager::image($employee->image) }}" alt=""></div>
                    <h4>{{ $employee->name }}</h4>
                    <span>{{ $employee->title }}</span>
                    <div class="social">

                        @foreach ($employee->links()->orderBy('icon')->get()
                        as $link)
                        <a target="_blank" href="{{ $link->link }}"><i class="bi bi-{{ $link->icon }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src="{{ asset('Regna/assets/img/team-2.jpg') }}" alt=""></div>
                    <h4>Sarah Jhinson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                        <a href=""><i class="bi bi-github"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src="{{ asset('Regna/assets/img/team-3.jpg') }}" alt=""></div>
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="pic"><img src="{{ asset('Regna/assets/img/team-4.jpg') }}" alt=""></div>
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</section>
