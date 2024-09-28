    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>"Throughout my career, I've had the privilege of working on a diverse range of projects, spanning
                    e-commerce platforms, dynamic blogging websites, and captivating portfolios. These selected few
                    offer just a glimpse into my portfolio, demonstrating my versatility and expertise in crafting
                    engaging and functional digital experiences. Feel free to explore them and see firsthand the quality
                    of work I bring to each project."</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-ecommerce">E-Commerce</li>
                        <li data-filter=".filter-blogging">Blogging</li>
                        <li data-filter=".filter-portfolio">Portfolio</li>
                    </ul>
                </div>
            </div>
            {{-- this is the part--}}
            
            
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                {{-- @foreach ($works as $work)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$work->type}}">
                    <div class="portfolio-wrap">
                        <img src="{{ Storage::url($work->main_image) }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ Storage::url($work->main_image) }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i
                                    class="bx bx-plus"></i></a>
                            <a href="{{$work->link}}" target="_blank"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach --}}
            </div>
        </div>
    </section><!-- End Portfolio Section -->
