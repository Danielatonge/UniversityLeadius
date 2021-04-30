<?php

use yii\helpers\Url;

$toImages = Yii::$app->request->baseUrl . '/images';
?>

<!-- Page Header-->
<header class="page-head header-panel-absolute">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-md-device-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-stick-up-offset="210"
             data-xl-stick-up-offset="85" data-lg-auto-height="true" data-auto-height="false"
             data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">

            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                    <h4 class="panel-title d-lg-none">Home</h4>
                    <!-- RD Navbar Right Side Toggle-->
                    <button class="rd-navbar-top-panel-toggle d-lg-none"
                            data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                    <div class="rd-navbar-top-panel">
                        <div class="rd-navbar-top-panel-left-part">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                                        <div class="unit-body"><a href="tel:#">+1-707-654-3561,</a> <a class="d-block d-lg-inline-block"
                            href="tel:#">+1-724-569-6367</a>
                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                                        <div class="unit-body"><a href="#">Sherbrooke-Quebec, Canada</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                                        <div class="unit-body"><a href="mailto:leadius@admin.org">admin@leadius.org</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-top-panel-right-part">
                            <div class="rd-navbar-top-panel-left-part">
                                <div class="unit flex-row align-items-center unit-spacing-xs">
                                    <div class="unit-body"><a href="<?= Url::to(['site/covid-19']) ?>">COVID-19</a></div>
                                    <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
                                    <!--<div class="unit-body"><a href="<?= Url::to(['site/login']) ?>">Login/Register</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-menu-wrap clearfix">
                    <!----------------------Navbar Brand---------------------------------------->

                    <div class="rd-navbar-brand"><a class="d-inline-block" href="<?= Url::to(['site/index']) ?>">
                            <div class="unit align-items-sm-center unit-xl flex-column flex-xxl-row unit-spacing-custom">
                                <div class="unit-left mb-0"><img width='170' height='172' src='<?= $toImages. '/logo.png' ?>' alt='' />
                                </div>
                                <div class="unit-body text-xxl-left">
                                    <div class="rd-navbar-brand-title">Lead International</div>
                                    <div class="rd-navbar-brand-slogan">University Of Sherbrooke</div>
                                </div>
                            </div>
                        </a></div>
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-mobile-scroll">
                            <div class="rd-navbar-mobile-header-wrap">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='136' height='138'
                                                                                              src='<?= $toImages. '/logo.png' ?>' alt='' /></a></div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="<?= Url::to(['site/about']) ?>">About Us</a>
                                </li>
                                <li><a href="#">Admission</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="<?= Url::to(['admission/apply-general']) ?>">Information for Applicants</a>
                        </li>
                                        
                                        <li><a href="<?= Url::to(['admission/transfer-readmission']) ?>">Transfer and Readmission</a>
                                        </li>
                                        <li><a href="<?= Url::to(['admission/testimonial']) ?>">Testimonials</a>
                                        </li>
                                        <li><a href="<?= Url::to(['admission/apply']) ?>">APPLY TO LIUS</a>
                                        </li>
<!--                                        <li><a href="#">Dashboard</a>
                                        </li>-->
                                    </ul>
                                </li>
                                <li><a href="#">Academics</a>
                                    <div class="rd-navbar-megamenu">
                                        <div class="row section-relative">
                                            <ul class="col-lg-3">
                                                <li>
                                                    <h6>Programs</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="<?= Url::to(['academics/program']) ?>">Undergraduate Study</a></li>
                                                        <li><a href="<?= Url::to(['academics/program']) ?>">Graduate &amp; Professional Study</a></li>
                                                        <li><a href="<?= Url::to(['academics/program']) ?>">Non-Degree Offerings</a></li>
                                                        <li><a href="<?= Url::to(['academics/program']) ?>">Online Learning</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-3">
                                                <li>
                                                    <h6>Faculties</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="<?= Url::to(['academics/f-arts']) ?>">Arts</a></li>
                                                        <li><a href="<?= Url::to(['academics/f-science']) ?>">Science</a></li>
                                                        <li><a href="<?= Url::to(['academics/f-engineering']) ?>">Engineering</a></li>
                                                        <li><a href="<?= Url::to(['academics/f-education']) ?>">Education</a></li>
                                                        <li><a href="<?= Url::to(['academics/f-business']) ?>">Business</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-3">
                                                <li>
                                                    <h6>Degrees and cost</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="<?= Url::to(['academics/undergrad-cost']) ?>">Undergraduate</a></li>
                                                        <li><a href="<?= Url::to(['academics/grad-cost']) ?>">Graduate</a></li>
                                                        <li><a href="<?= Url::to(['academics/postgrad-cost']) ?>">Post-doctorate</a></li>
                                                        <li><a href="<?= Url::to(['academics/others-cost']) ?>">Others</a></li>
                                                        <li><a href="<?= Url::to(['academics/financial-aid']) ?>">Financial Aid</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-3">
                                                <li>
                                                    <h6>Additional Experiences</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
<!--                                                        <li><a href="#">News</a></li>-->
                                                        <li><a href="<?= Url::to(['academics/calendar']) ?>">Upcoming Events</a></li>
                                                        <li><a href="<?= Url::to(['academics/internship-jobs']) ?>">Internships &amp; Jobs</a></li>
<!--                                                        <li><a href="#">Resources &amp; Advising</a></li>-->
                                                        <li><a href="<?= Url::to(['academics/beyond']) ?>">Beyond the Classroom</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Campus Life</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="<?= Url::to(['campus-life/health-safety']) ?>">Health, Wellness &amp; Safety</a>
                                        </li>
                                        <li><a href="<?= Url::to(['campus-life/feed-house']) ?>">Feeding & Housing</a>
                                        </li>
                                        <li><a href="<?= Url::to(['campus-life/gallery-general']) ?>">Gallery</a>
                                        </li>
                                        <li><a href="<?= Url::to(['campus-life/activities']) ?>">Activities</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= Url::to(['site/contact']) ?>">Contacts</a>
                                </li>
                            </ul>

                            <!--RD Navbar Mobile Search-->
                            <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html"
                                      method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-mobile-search-form-input">Search...</label>
                                        <input class="rd-navbar-search-form-input form-input form-input-gray-lightest"
                                               id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" />
                                    </div>
                                    <button class="icon fa fa-search rd-navbar-search-button" type="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi"
                                                     data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html"
                              data-search-live="rd-search-results-live" method="GET">
                            <div class="form-wrap">
                                <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                <input class="rd-navbar-search-form-input form-input form-input-gray-lightest"
                                       id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" />
                                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

