<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$toImages = Yii::$app->request->baseUrl . '/images';
$toFile = Yii::$app->request->baseUrl . '/files';
?>

<!-- Classic Breadcrumbs-->
<?= $this->render('breadcrumb', ["viewName" => "Apply"]) ?>

<!--A Meeting of Minds-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-4 order-lg-2 text-lg-left"><img class="img-responsive d-inline-block"
                                                               src="<?= $toImages . '/apply-01-370x370.jpg' ?>" width="370" height="370" alt=""></div>
            <div class="col-lg-8 order-lg-1 text-lg-left">
                <div class="inset-lg-right-30">
                    <h2 class="font-weight-bold">How to Apply</h2>
                    <hr class="divider bg-madison divider-lg-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>To apply for admission at LIUS, please download  and fill the admission form <a href="<?= $toFile . '/ADMISSION-FORM.docx' ?>" download="admission-form.docx"><b>here</b></a> and upload the filled application form, including all required documentation and fees in one pdf file </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fill in the Form-->
<section class="section bg-madison">
    <div class="container">
        <div class="row justify-content-sm-center justify-content-md-end offset-top-0">
            <div class="col-sm-10 col-md-8 col-lg-6 section-image-aside section-image-aside-left text-md-left">
                <div class="section-image-aside-img d-none d-md-block section-image-aside-2-img"
                     style="background-image: url(<?= $toImages . '/apply-02-948x987.jpg' ?>)"></div>
                <div class="section-image-aside-body section-xl inset-md-left-70 inset-xl-left-100">
                    <h2 class="font-weight-bold text-white">Upload admission form</h2>
                    <hr class="divider divider-md-0 bg-default">
                    <div class="offset-top-60">
                        <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact"
                              method="post" action="">

                            <div class="offset-top-35">
                                <div class="form-wrap">
                                    <!-- RD Filepicker-->
                                    <div class="rd-file-picker" id="fill-form-file">
                                        <input name="file" type="file" multiple>
                                        <div class="rd-file-picker-meta"></div>
                                        <div class="rd-file-picker-btn btn text-left"><span>Select a File</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-xl-left offset-top-30 context-dark">
                                <button class="btn button-primary" type="submit">Apply Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

