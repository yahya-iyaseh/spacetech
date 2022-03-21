   <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 text-center">
            <h2 class="title mx-3">{{ __('WHO WE ARE') }}</h2>
            <span>
              &nbsp;&nbsp;
              {{ __('We are a digital development StartUp that provides custom software development and IT services.') }}
            </span>
            <p class="mt-2">&nbsp;&nbsp;{{ __('Our developers build custom software for individuals, startups, and small to medium business.') }}</p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon">
                <svg style="width: 3rem" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 85 84" viewBox="0 0 85 84" class="offer-image replaced-svg">
                  <g fill="none">
                    <g stroke="#505050">
                      <path d="m49.2 67.2-4.7 4.6 4.7 4.7"></path>
                      <path d="m44.5 71.8h26.3c2.6 0 4.6-2.1 4.6-4.7v-27.9"></path>
                      <path d="m36.8 14.4 4.7-4.6-4.7-4.7"></path>
                      <path d="m41.5 9.8h-26.3c-2.6 0-4.6 2.1-4.6 4.7v27.9"></path>
                    </g>
                    <path d="m19.8 61h46.4v-40.4h-46.4z" stroke="#1476f2"></path>
                    <path d="m24.5 25.3h3.1m1.5 0h3.1m-12.4 4.6h46.4" stroke="#1476f2"></path>
                    <path d="m26 54.8h15.5v-18.7h-15.5z" stroke="#505050"></path>
                    <path d="m46.1 36.1h15.5m-15.5 6.3h15.5m-15.5 6.2h9.3m20.1-12.5v-3.1m0-3.1v-3.1m-65 28v-3.1m0-3.1v-3.1" stroke="#505050"></path>
                  </g>
                </svg>

              </div>
              <h4 class="title"><a href="">{{ __('Web Platform') }}</a></h4>
              <ul class="skills">
                <li>{{ __('Laravel') }}</li>
                <li>{{ __('Vue.js') }}</li>
                <li>{{ __('React.js') }}</li>
                <li>{{ __('NodeJs') }}</li>
                <li>{{ __('ASP.NET Core') }}</li>
              </ul>
              {{-- <p class="description">{{ __('We deliver comprehensive web development services with clear results and a clear development process.') }}</p> --}}
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon">
                {{-- <i class="bi bi-card-checklist"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="54" viewBox="0 0 85 71" class="offer-image replaced-svg">
                  <defs>
                    <filter id="a" width="104.3%" height="113.3%" x="-2.1%" y="-5.8%" filterUnits="objectBoundingBox">
                      <feOffset dy="3" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                      <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="7.5"></feGaussianBlur>
                      <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0"></feColorMatrix>
                      <feMerge>
                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                      </feMerge>
                    </filter>
                  </defs>
                  <g fill="none" fill-rule="evenodd" filter="url(#a)" transform="translate(-754 -39)">
                    <path stroke="#494946"
                      d="M798.174 74.455v7.09a2.355 2.355 0 0 0 2.348 2.364h16.435a2.355 2.355 0 0 0 2.347-2.364v-20.09a2.355 2.355 0 0 0-2.347-2.364h-16.435a2.355 2.355 0 0 0-2.348 2.364v5.909m3.522 16.545V91h14.087v-7.09m0-24.82V52h-14.087v7.09">
                    </path>
                    <path stroke="#494946" d="M808.74 70.91h-28.175m3.522 3.545l-3.522-3.546 3.522-3.545m21.13 7.09l3.522-3.545-3.522-3.545m16.435 0h1.174c.648 0 1.174.53 1.174 1.181v4.728c0 .652-.526 1.182-1.174 1.182h-1.174"></path>
                    <path stroke="#1476F2" stroke-linejoin="round" d="M770 83.91h22.304m0-26H770m9.391 29.545h3.522"></path>
                    <path stroke="#1476F2" d="M792.304 74.455v14.181A2.355 2.355 0 0 1 789.957 91h-17.61A2.355 2.355 0 0 1 770 88.636V54.364A2.355 2.355 0 0 1 772.348 52h17.609a2.355 2.355 0 0 1 2.347 2.364v13"></path>
                  </g>
                </svg>
              </div>
              <h4 class="title"><a href="">{{ __('Mobile Development') }}</a></h4>
              <ul class="skills">
                <li>{{ __('IOS') }}</li>
                <li>{{ __('Android') }}</li>
                <li>{{ __('Flutter') }}</li>
                <li>{{ __('ReactNative') }}</li>
              </ul>
              {{-- <p class="description">{{ __('Create an impactful mobile app that fits your brand and industry within a shorter time frame.') }}</p> --}}
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#42C2FF">
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z" />
                </svg>
              </div>
              <h4 class="title"><a href="#">{{ __('Programming Languages') }}</a></h4>
              <ul class="skills">
                <li>{{ __('PHP') }}</li>
                <li>{{ __('C#') }}</li>
                <li>{{ __('HTML, Css, JS') }}</li>
                <li>{{ __('Swift') }}</li>
                <li>{{ __('Java') }}</li>
                <li>{{ __('Kotlin') }}</li>
              </ul>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section>
