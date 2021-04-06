<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$toImages = Yii::$app->request->baseUrl . '/images';
?>
<div class="site-about">
    <!-- Classic Breadcrumbs-->
    <section class="section breadcrumb-classic context-dark">
        <div class="container">
            <h1>About Us</h1>
            <div class="offset-top-10 offset-md-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--A Meeting of Minds-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-4 order-md-2 text-md-left">
                    <div class="inset-md-left-30"><img class="img-responsive d-inline-block img-rounded" src="" width="340" height="300" alt="">
                        <div class="offset-top-20">
                            <h6 class="text-primary font-weight-bold">Dr. </h6>
                        </div>
                        <p>President of the Lead International University of Sherbrooke, served from 2020 to current.</p>
                    </div>
                </div>
                <div class="col-md-8 order-md-1 text-md-left">
                    <h2 class="font-weight-bold">How it all started</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p> LIUS operates a purely Canada based curriculum providing infinite quality opportunity and Managerial Human Capacity targeted for Africa,
                            Asia, Europe, America, Antarctica and Australia, LIUS is a vibrant institution which aims at imposing itself as premier destination for research,
                            innovation and training. The University imparts knowledge in all academic disciplines.

                        </p>
                    </div>
                    <p> LIUS is a bilingual university. It is located at the heart of the francophone community. It is a historic campus in a vibrant rural community with
                        an intimate residential learning environment. It contains extensive land for agricultural research and is home to several recreational facilities.
                        Learners at all stages of life and for entrepreneurs creating businesses out of new research
                        LIUS is an accredited private university located in Sherbrooke-Quebec, Canada since 2005 and it currently serves more than 17,000 students through
                        on-site and online programs around the world. The University develops productive and plethora relevant Bachelors, Masters and Doctorate level scholars
                        to utilize their research and training in solving the substantial problems in their countries. The University offers a dynamic and flexible learning
                        environment that inspires innovation and creativity and places on student access.
                    </p>
                    <p> LIUS prides itself on offering an intimate, cutting edge campus environment disposing of all resource essential for producing tomorrow’s leading petroleum
                        engineer, technopreneurs, ICT experts, renewable energy engineers, and business managers. The University has also created collaborations, partnerships and
                        exchange agreement with Canada and other international institutions that further enrich the academic, social and cultural diversity of our campus.
                        Our students have quite a unique experience with the set of clubs and social activities for recreational purposes and community engagement work, seminars,
                        and a whole lot of other activities vital in LIUS core value assimilation.
                        LIUS operates within a board of trustees’ governance system.</p>
                    <p>LIUS was founded as a private university in 1990, LIUS (The Canadian curriculum-based university serving all nations), has multiples campuses of the LIUS
                        Foundation, LIUS Foundation is registered and chartered in the Quebec Province of Canada (chartered number: 60215381N) and LIUS recognized by the government
                        and our programs are accredited by independent and international accreditation bodies to provide excellent learning experiences for our students and allowing
                        our graduates to secure residencies in Canada, United State and other countries in the world. The Foundation is the funding organ of all LIUS Campuses.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Images-->
    <section>
        <div class="container container-wide">
            <div class="row row-30">
                <div class="col-md-4"><img class="img-responsive d-inline-block" src="<?= $toImages. '/history-01-570x370.jpg' ?>" width="570" height="370" alt=""></div>
                <div class="col-md-4"><img class="img-responsive d-inline-block" src="<?= $toImages. '/history-02-570x370.jpg' ?>" width="570" height="370" alt=""></div>
                <div class="col-md-4"><img class="img-responsive d-inline-block" src="<?= $toImages. '/history-03-570x370.jpg' ?>" width="570" height="370" alt=""></div>
            </div>
        </div>
    </section>
    <!--A Meeting of Minds-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-md-8 text-md-left">
                    <h2 class="font-weight-bold">Our Mission</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>LIUS was founded as a private university in 1990 holds as its mission to improve the quality of life in its region, the province, and beyond,
                            by attaining the highest standards of undergraduate and graduate teaching, learning, and research. LIUS is committed to serving a vast region
                            by building partnerships and by being innovative, resourceful, and responsive to student and community needs. LIUS celebrates diversity and
                            intends to reflect and to foster the rich cultural diversity. LIUS recognizes that the strength of the University is its people and that the
                            most important measure of its success is the educational enrichment of its students. </p>
                    </div>
                    <p>The University strives to offer all its people, students,
                        staff and faculty, a healthy, safe, open, friendly, supportive, consultative and stimulating environment conducive to individual intellectual
                        growth, personal fulfillment and career progress. LIUS embraces the principles of academic freedom and responsibility, education for its own
                        sake, integrity, inclusion, respect for others, equity, fairness, operational efficiency, and public accountability.
                    </p>
                    <p>Within a vibrant and supportive learning environment, LIUS discovers, disseminates and applies new knowledge through teaching and learning,
                        research and creative activity, community involvement and partnerships. LIUS gives a national and international voice to innovation in our province,
                        taking a lead role in placing Canada at the global forefront.</p>
                    <p>Also, LIUS strives to provide a safe and challenging learning environment where students gain leadership skills and stretch their boundaries,
                        not only through academic discussion and debate but also through opportunities to work closely with faculty and staff on research projects and
                        a wide range of initiatives that improve student life or contribute to a need in the community, the region or far beyond</p>
                </div>
            </div>
        </div>
    </section>

    <!--Vision-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-md-8 text-md-left">
                    <h2 class="font-weight-bold">Our vision</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>Our new strategic vision celebrates our past and looks to the future with goals and actions crafted
                            to ensure we continue to deliver life-changing education – creating leaders who change the world.
                            Our vision is inspiring people with the courage to transform the world.
                            To inspire the human spirit through outstanding achievements in learning, discovery and citizenship in a creative community,
                            building one of the world’s great universities for the public good. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Goals-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-md-8 text-md-left">
                    <h2 class="font-weight-bold">Our Goals</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <ul class="list list-unstyled list-marked">
                            <li> <div class="font-weight-bold"> Any age, any stage, any place:</div> We are an engine of lifelong learning for students
                                no matter where they are in the world, their careers and their lives.
                            </li>
                            <li> <div class="font-weight-bold">Explore, share, and advance:</div> We support interdisciplinary research that pushes
                                boundaries, removes barriers and finds solutions to today critical issues.
                            </li>
                            <li> <div class="font-weight-bold">Invite in, venture out:</div> We engage communities locally, nationally and globally –
                                learning into partnerships, learning from others and warmly welcoming all people.
                            </li>
                            <li> <div class="font-weight-bold">Vibrant and sustainable:</div> We champion a sustainable campus with leading – edge infrastructure and online platforms – one that is a top workplace in Canada and
                                takes action on reconciliation, diversity, equity and inclusion.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--values-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-md-8 text-md-left">
                    <h2 class="font-weight-bold">Our Values</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>In our workplace, relationships and communications, we are committed to positive and productive work and learning environment:</p>
                        <ul class="list list-unstyled list-marked">
                            <li> <div class="font-weight-bold"> CARING: </div> A diverse and supportive community for our students, faculty and staff.
                            </li>
                            <li> <div class="font-weight-bold">CREATIVE: </div> Innovation in all we do; we continually seek new and better ways to do things. LIUS, as a new university, approaches the complexities of its time with responsive and innovative approaches to education. LIUS offers a modern curriculum and utilizes advanced technologies and the most innovative pedagogical methods in teaching. Much of the University’s research is at the intellectual
                                frontier, with the ultimate goal of generating tangible returns to society.
                            </li>
                            <li> <div class="font-weight-bold">COURAGEOUS: </div> Bold in our actions; we welcome challenges and take thoughtful risks.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Commitment-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-md-8 text-md-left">
                    <h2 class="font-weight-bold">Our Commitment</h2>
                    <hr class="divider bg-madison divider-md-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <ul class="list list-unstyled list-marked">
                            <li> <strong class="font-weight-bold"> Build</strong> on our strengths in applied and professional programming, inter- and
                                transdisciplinarity, and innovative delivery.
                            </li>
                            <li> <strong class="font-weight-bold">Grow</strong> our innovative and entrepreneurial culture, and respond quickly to changes in
                                the workplace and society.
                            </li>
                            <li> <strong class="font-weight-bold">Enhance</strong> the inclusion and engagement of people of diverse backgrounds and ideas
                                in all aspects of university life
                            </li>
                            <li> <strong class="font-weight-bold">Implement</strong> the recommendation of the truth and Reconciliation Commission and
                                honor the UN Declaration on the Right of indigenous Peoples.
                            </li>
                            <li> <strong class="font-weight-bold">Advance</strong> sustainability in all our academic programs and operations, with a focus
                                on the UN Sustainable development goals.
                            </li>
                            <li> <strong class="font-weight-bold">Promote </strong> research and education to tackle the climate crisis rapid advances in
                                technology and interconnected social, economic and political challenges.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--3 Columns Layout-->
    <section class="section section-xl bg-catskill">
        <div class="container">
            <h2 class="font-weight-bold">Our Staff</h2>
            <hr class="divider bg-madison text-md-left">
            <div class="row row-50 text-md-left offset-top-60">
                <div class="col-md-6 col-xl-4">
                    <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                        <div class="unit-left"><img class="img-responsive d-inline-block img-rounded" src="<?= $toImages. '/users/user-kathy-gibson-110x110.jpg' ?>" width="110" height="110" alt=""></div>
                        <div class="unit-body">
                            <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Kathy Gibson</a></h6>
                            <div class="offset-sm-top-30">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block text-black inset-left-10" href="tel:#">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-20">
                        <p>Professor of Experimental & Social Psychology, Senior Scientist, President of American Psychology Association.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                        <div class="unit-left"><img class="img-responsive d-inline-block img-rounded" src="<?= $toImages. '/users/user-walter-myers-110x110.jpg' ?>" width="110" height="110" alt=""></div>
                        <div class="unit-body">
                            <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Walter Myers</a></h6>
                            <div class="offset-sm-top-30">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block text-black inset-left-10" href="tel:#">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-20">
                        <p>Professor of Graphic Design and Visual Animation Faculty, Coordinator of Graphic Design Courses.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="unit unit-sm flex-column flex-md-row unit-spacing-lg">
                        <div class="unit-left"><img class="img-responsive d-inline-block img-rounded" src="<?= $toImages. '/users/user-kathleen-mendoza-110x110.jpg' ?>" width="110" height="110" alt=""></div>
                        <div class="unit-body">
                            <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Kathleen Mendoza</a></h6>
                            <div class="offset-sm-top-30">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs mdi mdi-phone text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block text-black inset-left-10" href="tel:#">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xs mdi mdi-email-outline text-middle text-gray" style="font-size: 24px; line-height: 24px"></span><a class="d-inline-block inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-20">
                        <p>Director of Graduate Studies at JCU, Professor of Political Economy and Applied Economics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
