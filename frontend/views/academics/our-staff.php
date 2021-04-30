<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$toImages = Yii::$app->request->baseUrl . '/images';
?>
<?= $this->render('breadcrumb', ["viewName" => "Our Staff"]) ?>

<!-- Boxed Grid System-->
<section class="section section-grid-demonstration section-xl bg-default">
    <div class="container">
        <div class="row row-30 offset-top-60 text-md-left">
            <div class="col-md-6 col-xl-4 mb-5">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-13.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="#">Prof. Booth
                                Annie</a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-800-6732-863</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:">provost@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Professor in the Graduate School of Public and International Affairs and Director of the
                        Center...</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-4.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="#">Bleiker
                                Katherine</a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-800-6352-392</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:">b.katherine@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Professor of Graphic Design and Visual Animation Faculty, Coordinator of Graphic Design
                        Courses.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-12.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Dr. Ed
                                Andrews</a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-800-8467-722</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:registrar@leadius.org">registrar@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Director of Graduate Studies at LIUS, Professor of Political Economy and Applied
                        Economics.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-5.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="#">Greg Zuch, Ph.D
                            </a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-800-9382-432</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:">g.zuch@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Academic Advisor</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-2.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="#">Dr. Muweh
                                Emanuel
                            </a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-810-7863-343</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:">emuweh.emanuel@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Director of Finance, LIUS</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                    <div class="unit-left"><img class="img-responsive d-inline-block img-rounded"
                                                src="<?= $toImages. '/staff/gallery-6.jpeg' ?>" width="110" height="110" alt=""></div>
                    <div class="unit-body">
                        <h6 class="font-weight-bold text-primary"><a href="#">Nhora Delgado</a></h6>
                        <div class="offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block text-black inset-left-10"
                                          href="tel:#">1-900-7621-832</a></li>
                                <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray"
                                          style="font-size: 24px; line-height: 24px"></span><a
                                          class="d-inline-block inset-left-10"
                                          href="mailto:">n.delgado@leadius.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-top-20">
                    <p>Administrative Assistant, Art + Design</p>
                </div>
            </div>
        </div>
        <div class="offset-top-60 text-lg-left">
            <!--Bootstrap Pagination-->
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-custom">
                    <li class="page-item page-item-control disabled"><a class="page-link"
                                                                        aria-label="Previous"><span class="icon fa fa-chevron-left"
                                                    aria-hidden="true"></span></a></li>
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item page-item-control"><a class="page-link" aria-label="Next"><span
                                class="icon fa fa-chevron-right" aria-hidden="true"></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
