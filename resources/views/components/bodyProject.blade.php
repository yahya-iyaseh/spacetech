@props(['project'])
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        {{-- <div class="container"> --}}

            {{-- <div class="d-flex justify-content-between align-items-center"> --}}
                {{-- <h2>{{ $project->name }}</h2> --}}
                {{-- <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li>Portfolio Details</li>
                </ol> --}}
                {{-- </div> --}}

            {{-- </div> --}}
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row my-5">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center" style="max-height: 720px;">

                            @foreach (json_decode($project->images) as $image)

                            <div class="swiper-slide">
                                <img src="{{ Voyager::image($image) }}" alt="">
                            </div>
                            @endforeach
                            {{-- <div class="swiper-slide">
                                <img src="{{ asset('Regna/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Regna/assets/img/portfolio/portfolio-details-2.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Regna/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div> --}}

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>
                            @if (App::getLocale() == 'ar')
                            {{ $project->ar_name }}
                            @else
                            {{ $project->name }}
                            @endif

                        </h3>
                        <ul>
                            <li><strong>{{ __('Category') }}</strong>: {{ $project->category->name }}</li>
                            <li><strong>{{ __('Client') }}</strong>: {{ $project->client->company }}</li>
                            <li><strong>{{ __('Project date') }}</strong>: {{ \Carbon\Carbon::parse($project->date)->format('M, Y')}}</li>                            <li><strong>{{ __('Project URL') }}</strong>: <a target="_blank"
                                    href="//{{ $project->url }}">{{ $project->url }}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>
                            @if (App::getLocale() == 'ar')
                            {{ $project->ar_title }}
                            @else
                            {{ $project->title }}
                            @endif
                        </h2>
                        <div>
                            @if (App::getLocale() == 'ar')

                            {!! $project->ar_description !!}

                            @else
                            {!! $project->description !!}
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>
