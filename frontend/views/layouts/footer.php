<?php

$toImages = Yii::$app->request->baseUrl . '/images';
?>

<!-- Footer Corprorate-->
<!-- Corporate footer-->
<footer class="page-footer">
    <div class="hr bg-gray-light"></div>
    <div class="container section-xs block-after-divider mt-4">
        <div class="row row-50 justify-content-xl-between justify-content-sm-center">
            <div class="col-lg-3 col-xl-2">
                <!--Footer brand--><a class="d-inline-block" href="index.html"><img width='170' height='172'
                                                                                    src='<?= $toImages. '/logo.png' ?>' alt='' />
                    <div>
                        <h6 class="barnd-name font-weight-bold offset-top-25">Lead International</h6>
                    </div>
                    <div>
                        <p class="brand-slogan text-gray font-italic font-accent">University Of Sherbrooke</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
                <h6 class="font-weight-bold">Contact us</h6>
                <div class="text-subline"></div>
                <div class="offset-top-30">
                    <ul class="list-unstyled contact-info list">
                        <li>
                            <div class="unit flex-row align-items-center unit-spacing-xs">
                                <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span>
                                </div>
                                <div class="unit-body"><a class="text-dark" href="tel:#">8-020-618-0645,</a> <a
                                        class="d-block d-lg-inline-block text-dark" href="tel:#">819-493-3499</a>
                                </div>
                            </div>
                        </li>
                        <li class="offset-top-15">
                            <div class="unit flex-row align-items-center unit-spacing-xs">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span>
                                </div>
                                <div class="unit-body text-left"><a class="text-dark" href="#">Sherbrooke-Quebec, Canada</a></div>
                            </div>
                        </li>
                        <li class="offset-top-15">
                            <div class="unit flex-row align-items-center unit-spacing-xs">
                                <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span>
                                </div>
                                <div class="unit-body"><a href="mailto:#">leadius@admin.org</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offset-top-15 text-left">
                    <ul class="list-inline list-inline-xs list-inline-madison">
                        <li><a class="icon icon-xxs fa fa-facebook icon-circle icon-gray-light-filled" href="https://web.facebook.com/lius.university/?modal=composer&notif_id=1615666666996383&notif_t=aymt_simplified_make_page_post&ref=notif"></a>
                        </li>
                        <li><a class="icon icon-xxs fa fa-twitter icon-circle icon-gray-light-filled" href="https://mobile.twitter.com/LeadSherbrook"></a>
                        </li>
                        <li><a class="icon icon-xxs fa fa-google icon-circle icon-gray-light-filled" href="#"></a>
                        </li>
                        <li><a class="icon icon-xxs fa fa-instagram icon-circle icon-gray-light-filled" href="https://www.instagram.com/lius.university/"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
                <h6 class="font-weight-bold">Newsletter</h6>
                <div class="text-subline"></div>
                <div class="offset-top-30 text-left">
                    <p>Enter your email address to get the latest University news, special events and student activities
                        delivered right to your inbox.</p>
                </div>
                <div class="offset-top-10">
                    <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe"
                          method="post" action="https://livedemo00.template-help.com/wt_59029_v3/bat/rd-mailform.php">
                        <div class="form-wrap">
                            <div class="input-group input-group-sm">
                                <input class="form-input" placeholder="Your e-mail" type="email" name="email"
                                       data-constraints="@Required @Email"><span class="input-group-btn">
                    <button class="btn btn-sm button-primary" type="submit">Subscribe</button></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-madison context-dark">
        <div class="container text-lg-left section-5">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>All
            Rights Reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
        </div>
    </div>
</footer>
