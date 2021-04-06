<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    <!-- Classic Breadcrumbs-->
    <section class="section breadcrumb-classic context-dark">
        <div class="container">
            <h1>Contacts</h1>
            <div class="offset-top-10 offset-md-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.html">Home</a></li>
                    <li>Contacts
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-50 justify-content-sm-center">
                <div class="col-sm-10 col-lg-8 text-lg-left">
                    <h2 class="font-weight-bold">Get in Touch</h2>
                    <hr class="divider bg-madison divider-lg-0">
                    <div class="offset-top-30 offset-md-top-60">
                        <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                    </div>
                    <div class="offset-top-30">
                        <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_59029_v3/bat/rd-mailform.php">
                            <div class="row row-12">
                                <div class="col-xl-6">
                                    <div class="form-wrap">
                                        <label class="form-label form-label-outside" for="contact-me-name">First name</label>
                                        <input class="form-input" id="contact-me-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-wrap">
                                        <label class="form-label form-label-outside" for="contact-me-last-name">Last name</label>
                                        <input class="form-input" id="contact-me-last-name" type="text" name="last-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-wrap">
                                        <label class="form-label form-label-outside" for="contact-me-email">E-mail</label>
                                        <input class="form-input" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-wrap">
                                        <label class="form-label form-label-outside" for="contact-me-phone">Phone</label>
                                        <input class="form-input" id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-wrap">
                                        <label class="form-label form-label-outside" for="contact-me-message">Message</label>
                                        <textarea class="form-input" id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-xl-left offset-top-20">
                                <button class="btn button-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-4 text-left">
                    <div class="inset-lg-left-30">
                        <h6 class="font-weight-bold">Socials</h6>
                        <div class="hr bg-gray-light offset-top-10"></div>
                        <ul class="list-inline list-inline-xs list-inline-madison">
                            <li><a class="icon novi-icon icon-xxs fa fa-facebook icon-circle icon-gray-light-filled" href="contacts.html#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa fa-twitter icon-circle icon-gray-light-filled" href="contacts.html#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa fa-google icon-circle icon-gray-light-filled" href="contacts.html#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa fa-instagram icon-circle icon-gray-light-filled" href="contacts.html#"></a></li>
                        </ul>
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="font-weight-bold">Phones</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-1234-567">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-6547-321">1-800-6547-321</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="font-weight-bold">E-mail</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a class="text-primary text-middle inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="font-weight-bold">Address</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <div class="unit flex-row unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                                    <div class="unit-body">
                                        <p><a class="text-dark" href="contacts.html#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-30 offset-md-top-65">
                            <h6 class="font-weight-bold">Opening Hours</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <div class="unit flex-row unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                                    <div class="unit-body">
                                        <div>
                                            <p>Mon-Fri: 8:00am-8:00pm</p>
                                        </div>
                                        <div>
                                            <p>Sat: 8:00am-3:00pm</p>
                                        </div>
                                        <div>
                                            <p>Sun: Closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Google Map-->
    <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
        </div>
    </section>

</div>
