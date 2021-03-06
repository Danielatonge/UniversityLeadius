<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Welcome to LIUS';
$toImages = Yii::$app->request->baseUrl . '/images';
?>

<div class="">
    <section class="section">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-2" data-autoplay="true" data-height="42.1875%"
             data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-slide-bg="<?= $toImages . '/slider-1.jpg' ?>" style="background-position: 80% center">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-sm-center justify-content-xl-start">
                                <div class="col-lg-9 text-lg-left col-sm-10">
                                    <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                        <h1 class="font-weight-bold"><a href="academics.html">Inspiration, Innovation and Discovery</a>
                                        </h1>
                                    </div>
                                    <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100"
                                         data-caption-animate="fadeInUp" data-caption-delay="150">
                                        <h5>Any successful career starts with good education. Together with us you will have deeper
                                            knowledge of the subjects that will be especially useful for you when climbing the career
                                            ladder.</h5>
                                    </div>
                                    <div class="offset-top-20 offset-xl-top-40" data-caption-animate="fadeInUp"
                                         data-caption-delay="400"><a class="btn button-primary" href="<?= Url::to(['admission/apply']) ?>">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="<?= $toImages . '/slider-2.jpg' ?>" style="background-position: 80% center">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-sm-center justify-content-xl-start">
                                <div class="col-lg-9 text-lg-left col-sm-10">
                                    <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                        <h1 class="font-weight-bold"><a href="academics.html">Investing in Knowledge</a></h1>
                                    </div>
                                    <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100"
                                         data-caption-animate="fadeInUp" data-caption-delay="150">
                                        <h5>At Lead International University, you can succeed in lots of research areas and benefit from
                                            investing in your education and knowledge that will help you in becoming an experienced
                                            specialist.</h5>
                                    </div>
                                    <div class="offset-top-20 offset-xl-top-40" data-caption-animate="fadeInUp"
                                         data-caption-delay="400"><a class="btn button-primary" href="<?= Url::to(['admission/apply-general']) ?>">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="<?= $toImages . '/slider-3.jpg' ?>" style="background-position: 80% center">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-sm-center justify-content-xl-start">
                                <div class="col-lg-9 text-lg-left col-sm-10">
                                    <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                        <h1 class="font-weight-bold"><a href="academics.html">Open Minds,
                                                <br class="d-none d-lg-inline-block"> Creating Future,
                                                <br class="d-none d-lg-inline-block">And Infinite Opportunities</a></h1>
                                    </div>
                                    <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100"
                                         data-caption-animate="fadeInUp" data-caption-delay="150">
                                        <h5>Build your future with us! The educational programs of our University will give you necessary
                                            skills, training, and knowledge to make everything you learned here work for you in the future.
                                        </h5>
                                    </div>
                                    <div class="offset-top-20 offset-xl-top-40"><a class="btn button-default"
                                                                                   href="<?= Url::to(['site/about']) ?>">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>

    </section>
    <!-- Setion About Us-->
    <!-- A Few Words About the University-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-50 text-md-left align-items-md-center justify-content-md-between">
                <div class="col-md-5 col-lg-4 order-md-2"><a href="index.html"><img class="img-responsive d-inline-block"
                                                                                    src="<?= $toImages . '/logo.png' ?>" width="326" height="329" alt=""></a></div>
                <div class="col-md-7 col-lg-7 order-md-1">
                    <h2 class="font-weight-bold">A Few Words <br class="d-none d-xl-inline-block"> About the University</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-35 offset-lg-top-60">
                        <p> LIUS is a bilingual university. It is located at the heart of the francophone community. It is a
                            historic campus in a vibrant rural community with an intimate residential learning environment. It
                            contains extensive land for agricultural research and is home to several recreational facilities.</p>
                    </div>
                    <div class="offset-top-30"><a class="btn btn-icon btn-icon-right button-default" href="<?= Url::to(['site/about']) ?>"><span
                                class="icon fa fa-arrow-right"></span><span>Learn More</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Featured Courses-->
    <section class="section bg-madison context-dark">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-end offset-top-0">
                <div class="col-sm-10 col-md-7 section-image-aside section-image-aside-left text-md-left">
                    <div class="section-image-aside-img d-none d-md-block"
                         style="background-image: url(<?= $toImages . '/home-01-846x1002.jpg' ?>)"></div>
                    <div class="section-image-aside-body section-xl inset-md-left-70 inset-xl-left-110">
                        <h2 class="font-weight-bold">Our Featured Courses</h2>
                        <hr class="divider divider-md-0 bg-default">
                        <div class="offset-top-35 offset-lg-top-60 text-light">Our Featured Courses are selected through a
                            rigorous process and uniquely created for each semester.</div>
                        <div class="text-left">
                            <div class="offset-top-60">
                                <article class="post-vacation"><a class="post-vacation-img-wrap bg-image" href="<?= Url::to(['academics/program']) ?>"
                                                                  style="background-image: url(<?= $toImages . '/course-01-150x120.jpg' ?>)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="<?= Url::to(['academics/program']) ?>">Financial Analyst Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Charles Banks</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10">
                                            <time class="text-dark" datetime="2019-01-01">June 3, 2019</time>
                                            <ul class="list-inline list-unstyled list-inline-primary">
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-timer-sand" data-toggle="tooltip"
                                                          data-placement="top" title="Part time"></span></li>
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-star" data-toggle="tooltip"
                                                          data-placement="top" title="Certified"></span></li>
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-laptop-chromebook"
                                                          data-toggle="tooltip" data-placement="top" title="Online Course"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="offset-top-30">
                                <article class="post-vacation"><a class="post-vacation-img-wrap bg-image" href="<?= Url::to(['academics/program']) ?>"
                                                                  style="background-image: url(<?= $toImages . '/course-02-150x120.jpg' ?>)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="<?= Url::to(['academics/program']) ?>">Digital Marketing Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Maria Howard</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10">
                                            <time class="text-dark" datetime="2019-01-01">June 3, 2019</time>
                                            <ul class="list-inline list-unstyled list-inline-primary">
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-battery-50" data-toggle="tooltip"
                                                          data-placement="top" title="Facultative"></span></li>
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-star" data-toggle="tooltip"
                                                          data-placement="top" title="Certified"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="offset-top-30">
                                <article class="post-vacation"><a class="post-vacation-img-wrap bg-image" href="<?= Url::to(['academics/program']) ?>"
                                                                  style="background-image: url(<?= $toImages . '/course-03-150x120.jpg' ?>)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="<?= Url::to(['academics/program']) ?>">Graphic Design Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Steven Carter</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10">
                                            <time class="text-dark" datetime="2019-01-01">June 3, 2019</time>
                                            <ul class="list-inline list-unstyled list-inline-primary">
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-battery-50" data-toggle="tooltip"
                                                          data-placement="top" title="Facultative"></span></li>
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-star" data-toggle="tooltip"
                                                          data-placement="top" title="Certified"></span></li>
                                                <li><span class="text-hover-custom icon icon-xxs mdi mdi-laptop-chromebook"
                                                          data-toggle="tooltip" data-placement="top" title="Online Course"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!--                    <div class="offset-top-60"><a class="btn button-primary" href="academics.html">View All Courses</a></div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counters-->
    <section class="section section-xl bg-default">
        <div class="container">
            <h2 class="font-weight-bold">Statistics</h2>
            <hr class="divider bg-madison">
            <div class="row justify-content-sm-center offset-top-60">
                <div class="col-sm-10 col-md-8">
                    <p>Lead International University was founded on the principle that by pursuing big ideas and sharing what we
                        learn, we make the world a better place. For over 16 years, we haven???t strayed from that vision.</p>
                </div>
            </div>
            <div class="row row-50 row-lg-65 justify-content-sm-center justify-content-lg-start offset-top-65 counters">
                <div class="col-md-6 col-lg-3">
                    <!-- Counter type 1-->
                    <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-school"></span>
                        <div class="h3 font-weight-bold text-primary offset-top-15"><span class="counter"
                                                                                          data-speed="1300">97</span><span>%</span></div>
                        <hr class="divider bg-gray-light divider-sm" />
                        <div class="offset-top-21">
                            <h6 class="text-black font-accent">Graduates</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- Counter type 1-->
                    <div class="counter-type-1"><span
                            class="icon icon-lg icon-outlined text-madison mdi mdi-wallet-travel"></span>
                        <div class="h3 font-weight-bold text-primary offset-top-15"><span class="counter"
                                                                                          data-speed="1250">30</span><span>+</span></div>
                        <hr class="divider bg-gray-light divider-sm" />
                        <div class="offset-top-21">
                            <h6 class="text-black font-accent">Certified Teachers</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- Counter type 1-->
                    <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-domain"></span>
                        <div class="h3 font-weight-bold text-primary offset-top-15"><span class="counter" data-step="1500">8</span>
                        </div>
                        <hr class="divider bg-gray-light divider-sm" />
                        <div class="offset-top-21">
                            <h6 class="text-black font-accent">Student Campuses</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- Counter type 1-->
                    <div class="counter-type-1"><span
                            class="icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"></span>
                        <div class="h3 font-weight-bold text-primary offset-top-15"><span class="counter"
                                                                                          data-step="1500">17000</span></div>
                        <hr class="divider bg-gray-light divider-sm" />
                        <div class="offset-top-21">
                            <h6 class="text-black font-accent">Students</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events-->
    <section class="section bg-catskill section-xl">
        <div class="container container-wide">
            <h2 class="font-weight-bold">Events</h2>
            <hr class="divider bg-madison">
            <div class="row row-50 offset-top-60 justify-content-sm-center">
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="<?= $toImages . '/blog/events-03-420x420.jpg' ?>"
                                                                 width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark"><a class="btn button-primary" href="#">Book
                                    Now</a>
                                <div class="offset-top-20"><a class="btn button-default" href="#">Learn More</a></div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">15</div>
                                    <p class="d-inline-block d-xl-block">May</p><span
                                        class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href="#">Graphic Design Workshop</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="#"><span
                                                    class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span
                                                    class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="<?= $toImages . '/blog/events-04-420x420.jpg' ?>"
                                                                 width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark"><a class="btn button-primary" href="#">Book
                                    Now</a>
                                <div class="offset-top-20"><a class="btn button-default" href="#">Learn More</a></div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">5</div>
                                    <p class="d-inline-block d-xl-block">May</p><span
                                        class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href=#">History of Art</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="#"><span
                                                    class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span
                                                    class="inset-left-10 text-dark text-middle">Danielle Garza</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="offset-top-50 offset-lg-top-56"><a class="btn btn-icon btn-icon-right button-primary"
                                                           href="<?= Url::to(['academics/calendar']) ?>"><span class="icon fa fa-arrow-right"></span><span>View Event Calendar</span></a></div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="section bg-madison context-dark position-relative">
        <div class="owl-carousel owl-carousel-default owl-carousel-nav-xl" data-items="1" data-nav="true" data-dots="true"
             data-autoplay="true"
             data-nav-class="[&quot;owl-prev fa fa-angle-left&quot;, &quot;owl-next fa fa-angle-right&quot;]">
            <div>
                <div class="container section-70 section-xl-100 section-xl-bottom-114">
                    <div class="row justify-content-sm-center align-items-sm-center">
                        <div class="col-md-3 text-md-right order-md-2"><img class="img-responsive d-inline-block rounded-circle"
                                                                            src="<?= $toImages . '/staff/gallery-8.jpeg' ?>" width="230" height="230" alt=""></div>
                        <div class="col-md-9 order-md-1">
                            <div class="quote-classic-boxed text-left">
                                <div class="quote-body">
                                    <q>At the end of January 2018 I moved to Canada to commence my postgraduate studies in my Master in
                                        Business Wine at LIUS. During my first year living in Sherbrooke, I served in the Cellar Doors at
                                        Penfolds Magill Estate, Canadian???s iconic wine producer, and Scott and La Prova Wines, a small
                                        boutique producer.</q>
                                    <div class="offset-top-30 text-right">
                                        <cite class="font-accent">Jokinen Nancy</cite>
                                        <div class="offset-top-5">
                                            <p class="text-dark font-italic">Master of Business Administration (MBA)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container section-70 section-xl-100 section-xl-bottom-114">
                    <div class="row justify-content-sm-center align-items-sm-center">
                        <div class="col-md-3 text-md-right order-md-2"><img class="img-responsive d-inline-block rounded-circle"
                                                                            src="<?= $toImages . '/staff/gallery-9.jpeg' ?>" width="230" height="230" alt=""></div>
                        <div class="col-md-9 order-md-1">
                            <div class="quote-classic-boxed text-left">
                                <div class="quote-body">
                                    <q>At the end of January 2018 I moved to Canada to commence my postgraduate studies in my Master in
                                        Business Wine at LIUS. During my first year living in Sherbrooke, I served in the Cellar Doors at
                                        Penfolds Magill Estate, Canadian???s iconic wine producer, and Scott and La Prova Wines, a small
                                        boutique producer.</q>
                                    <div class="offset-top-30 text-right">
                                        <cite class="font-accent">Emily Zegar</cite>
                                        <div class="offset-top-5">
                                            <p class="text-dark font-italic">Master of Wine Business</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-top-20 offset-lg-top-20 row-50">
            <a class="btn button-default"
               href="<?= Url::to(['admission/testimonial']) ?>"><span>More</span>
            </a>
        </div>
    </section>
    <!-- Latest news-->
    <section class="section bg-catskill section-xl">
        <div class="container">
            <h2 class="font-weight-bold">News Updates</h2>
            <hr class="divider bg-madison">
            <div class="row row-30 offset-top-60 text-left justify-content-sm-center">
                <div class="col-md-6 col-lg-4">
                    <article class="post-news"><a href="#"><img class="img-responsive"
                                                                             src="<?= $toImages . '/blog/news-04-370x240.jpg' ?>" width="370" height="240" alt=""></a>
                        <div class="post-news-body">
                            <h6><a href="#">
                                    Ways Parents and Counselors Can
                                    Help Students Earn Scholarships</a></h6>
                            <div class="offset-top-20">
                                <p>Securing scholarships can be stressful, but parents and counselors can serve as a resource.</p>
                            </div>
                            <div class="post-news-meta offset-top-20"><span
                                    class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span
                                    class="text-middle inset-left-10 font-italic text-black">2 days ago</span></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="post-news"><a href="#"><img class="img-responsive"
                                                                             src="<?= $toImages . '/blog/news-05-370x240.jpg' ?>" width="370" height="240" alt=""></a>
                        <div class="post-news-body">
                            <h6><a href="#">
                                    Consider MBA Programs That
                                    Offer Summer Prep</a></h6>
                            <div class="offset-top-20">
                                <p>Summer preparatory programs offered through schools allow students to get a head start on making
                                    connections and building skills.</p>
                            </div>
                            <div class="post-news-meta offset-top-20"><span
                                    class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span
                                    class="text-middle inset-left-10 font-italic text-black">2 days ago</span></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="post-news"><a href="#"><img class="img-responsive"
                                                                             src="<?= $toImages . '/blog/news-06-370x240.jpg' ?>" width="370" height="240" alt=""></a>
                        <div class="post-news-body">
                            <h6><a href="#">Studying in the United States</a></h6>
                            <div class="offset-top-20">
                                <p>International students increasingly want to come to the United States for college or graduate
                                    school.</p>
                            </div>
                            <div class="post-news-meta offset-top-20"><span
                                    class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span
                                    class="text-middle inset-left-10 font-italic text-black">2 days ago</span></div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="offset-top-50"><a class="btn button-primary" href="modern-news.html">View All News Posts</a></div>
        </div>
    </section>

    <!-- Gallery Simple-->
    <!-- Gallery-->
    <section class="section">
        <div class="owl-carousel flickr owl-carousel-fullheight" data-items="2" data-sm-items="2" data-autoplay="true"
             data-md-items="4" data-xxl-items="6" data-nav="false" data-dots="false" data-mouse-drag="true"
             data-lightgallery="group" data-stage-padding="0" data-xl-stage-padding="0"><a class="thumbnail-default"
                                                                                      data-lightgallery="item" href="images/gallery-simple-1-677x677.jpg"><img width="320" height="320"
                                                                                     data-title="alt" src="<?= $toImages . '/gallery-simple-1-677x677.jpg' ?>" alt=""><span
                                                                                     class="icon fa fa-search-plus"></span></a><a class="thumbnail-default" data-lightgallery="item"
                                                         href="images/gallery-simple-2-677x677.jpg"><img width="320" height="320"
                                                            src="<?= $toImages . '/gallery-simple-2-677x677.jpg' ?>" alt=""><span class="icon fa fa-search-plus"></span></a><a
                class="thumbnail-default" data-lightgallery="item" href="images/gallery-simple-3-677x677.jpg"><img width="320"
                                                                                                               height="320" src="<?= $toImages . '/gallery-simple-3-677x677.jpg' ?>" alt=""><span
                                                                                                               class="icon fa fa-search-plus"></span></a><a class="thumbnail-default" data-lightgallery="item"
                                                         href="images/gallery-simple-4-677x677.jpg"><img width="320" height="320"
                                                            src="<?= $toImages . '/gallery-simple-4-677x677.jpg' ?>" alt=""><span class="icon fa fa-search-plus"></span></a><a
                class="thumbnail-default" data-lightgallery="item" href="images/gallery-simple-5-677x677.jpg"><img width="320"
                                                                                                               height="320" src="<?= $toImages . '/gallery-simple-5-677x677.jpg' ?>" alt=""><span
                                                                                                               class="icon fa fa-search-plus"></span></a><a class="thumbnail-default" data-lightgallery="item"
                                                         href="images/gallery-simple-6-677x677.jpg"><img width="320" height="320"
                                                            src="<?= $toImages . '/gallery-simple-6-677x677.jpg' ?>" alt=""><span class="icon fa fa-search-plus"></span></a></div>
    </section>

</div>
