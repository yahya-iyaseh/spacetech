 @props(['projects'])
 <section id="portfolio" class="portfolio">
   <div class="container" data-aos="fade-up">
     <div class="section-header">
       <h3 class="section-title">{{ __('OUR PROJECTS') }}</h3>
       {{-- <p class="section-description">{{ __('Some of Our Projects') }}</p> --}}
     </div>

     <div class="row" data-aos="fade-up" data-aos-delay="100">
       <div class="col-lg-12 d-flex justify-content-center">
         <ul id="portfolio-flters">
           <li data-filter="*" class="filter-active">

             {{ __('All') }}

           </li>

           @foreach (App\Models\Category::all() as $category)
             <li data-filter=".filter-{{ $category->name }}">
               @if (App::getLocale() == 'ar')
                 {{ $category->ar_name }}
               @else
                 {{ $category->name }}
               @endif
               {{-- {{ $category->name }} --}}

             </li>
           @endforeach
           {{-- <li data-filter=".filter-app">{{ __('App') }}</li>
           <li data-filter=".filter-card">{{ __('Card') }}</li>
           <li data-filter=".filter-web">{{ __('Web') }}</li> --}}
         </ul>
       </div>
     </div>

     <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
       @foreach ($projects as $project)
         <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->category->name }}">
           @foreach (json_decode($project->images) as $image)
             @if ($loop->first)
               <img src="{{ Voyager::image($image) }}" class="img-fluid" alt="">
             @endif
           @endforeach
           <div class="portfolio-info">
             <h4>
               @if (App::getLocale() == 'ar')
                 {{ $project->ar_name }}
               @else
                 {{ $project->name }}
               @endif
             </h4>
             <p>
               @if (App::getLocale() == 'ar')
                 {{ $project->category->ar_name }}
               @else
                 {{ $project->category->name }}
               @endif
             </p>

             @foreach (json_decode($project->images) as $image)
               @continue($loop->first)
               <a href="{{ Voyager::image($image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ App::getLocale() == 'ar' ? $project->ar_title : $project->title }}"><i class="bx bx-plus"></i></a>
             @endforeach
             <a href="{{ route('show.project', $project->id) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
           </div>
         </div>
       @endforeach
       {{-- {{ $projects }} --}}
       {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Web 3</h4>
           <p>Web</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-app">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>App 2</h4>
           <p>App</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-card">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Card 2</h4>
           <p>Card</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-web">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Web 2</h4>
           <p>Web</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-app">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>App 3</h4>
           <p>App</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-card">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Card 1</h4>
           <p>Card</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-card">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Card 3</h4>
           <p>Card</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 portfolio-item filter-web">
         <img src="{{ asset('Regna/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
         <div class="portfolio-info">
           <h4>Web 3</h4>
           <p>Web</p>
           <a href="{{ asset('Regna/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
           <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
         </div>
       </div> --}}

     </div>

   </div>
 </section>
