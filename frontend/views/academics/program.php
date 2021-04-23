<?php
$toImages = Yii::$app->request->baseUrl . '/images';
?>

<?= $this->render('breadcrumb', ["viewName" => "Programs"]) ?>

<section class="section section-xl bg-default">
    <div class="container text-justify">
        <div class="row row justify-content-sm-center">
            <div class="col-sm-10 col-md-8">
                <div class="row row-60">
                    <div class="col-12">
                        <h6 class="font-weight-bold">General Information</h6>
                        <p>LIUS provides outstanding undergraduate and graduate learning opportunities that explore excellence
                            across humanities,
                            sciences, creative arts, business, engineering, cultures, health, economies, sciences and the
                            environment. As one of the research-intensive universities,
                            we bring the excitement of new knowledge to our students, and the outcomes of our teaching and
                            research to the world. In addition to fostering and celebrating
                            academic excellence, LIUS is a welcoming place, with a learning environment that is friendly,
                            inclusive, and supportive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- vertical link Tabs-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="tabs-custom tabs-vertical tabs-line tabs-line-1" id="tabs-7">
            <!--Nav tabs-->
            <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-1" data-toggle="tab"
                                                            aria-expanded="false" aria-controls="tabs-7-1">Undergraduate Study</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab"
                                                            aria-expanded="false" aria-controls="tabs-7-2">Graduate & Professional Study</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab"
                                                            aria-expanded="false" aria-controls="tabs-7-3">Non-Degree Offerings</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-4" data-toggle="tab"
                                                            aria-expanded="false" aria-controls="tabs-7-4">Online Learning</a></li>
            </ul>
            <!--Tab panes-->
            <div class="tab-content inset-lg-left-60">
                <div class="tab-pane fade" id="tabs-7-1">
                    <h2 class="font-weight-bold">Undergraduate Study</h2>
                    <div class="hr divider bg-madison divider-md-0"></div>
                    <div class="offset-lg-top-60">
                        <p>The undergraduate degree either a bachelor’s or associate degree is considered a baseline educational
                            requirement in many professions.
                            As such, the pursuit of this degree has become commonplace among high school graduates. Many students
                            chose to complete their undergraduate
                            degree immediately after earning their high school diploma.</p>
                        <p>Therefore, undergraduate programs at LIUS seek to provide students with an understanding of the
                            scientific methodologies by which knowledge
                            is based, critical thinking skills and skeptical inquiry necessary to evaluate scientific and popular
                            claims. Students may earn their bachelor’s
                            degree on campus or online at the speed that works for their lifestyle.</p>
                        <p>Our professors bring real-world experience to the classroom so students graduate with more than just
                            their bachelor’s degree and have tangible strategies for succeeding in the workplace.
                            Programs of study in the Humanities, the Natural Sciences, Physical Science and the Social Sciences
                            lead to the degree of Bachelor.</p>
                    </div>

                    <div class="offset-top-30"><img class="img-responsive d-inline-block"
                                                    src="<?= $toImages. '/academics-01-770x480.jpg' ?>" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                        <h6 class="font-weight-bold">Bachelor programs</h6>
                        <div class="text-subline"></div>
                        <div class="row row-10 offset-top-20">
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>English (ENGL)</li>
                                    <li>History (HIST)</li>
                                    <li>Philosophy (PHIL)</li>
                                    <li>Women's Studies (WMST)</li>
                                    <li>Biology (BIOL)</li>
                                    <li>Geography (GEOG)</li>
                                    <li>Environmental Science (ENSC)</li>
                                    <li>Environmental Studies (ENVS)</li>
                                    <li>Sociology (SOCI)</li>
                                    <li>Politics (POLI)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>Health and Human Science (HHSC)</li>
                                    <li>Natural Resources Ecosystem Management (NREM)</li>
                                    <li>Anthropology (ANTH)</li>
                                    <li>Commerce (COMM)</li>
                                    <li>Economics (ECON)</li>
                                    <li>Education (EDUC)</li>
                                    <li>Environmental Planning (ENPL)</li>
                                    <li>First Nations Studies (FNST)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>Global and International Studies (INTS)</li>
                                    <li>Outdoor Recreation and Tourism Managment (ORTM)</li>
                                    <li>Political Science (POLS)</li>
                                    <li>Psychology (PSYC)</li>
                                    <li>Resource Recreation and Tourism (RRT)</li>
                                    <li>Computer Science (COMS)</li>
                                    <li>Economics (ECON)</li>
                                    <li>French (FREN)</li>
                                    <li>Religion Studies (RELS)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-lg-top-20">
                            <p>Within each degree program, a common core of courses provides a solid foundation for work in the
                                field.
                                This core is complemented by a series of courses in specialized areas to enable each student to
                                pursue a program of studies
                                that provides enhanced professional and personal growth.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-7-2">
                    <h2 class="font-weight-bold">Graduate & Professional Study</h2>
                    <div class="hr divider bg-madison divider-md-0"></div>
                    <div class="offset-lg-top-60">
                        <p>A graduate degree in LIUS includes master’s degrees, doctorates, and PhDs provides an advanced
                            understanding of a specific topic or field, and demonstrates a commitment to lifelong learning that
                            many employers value.
                            Those who choose to enroll in graduate school often do so with a series of focus, career-oriented
                            goals in mind, which sets the stage for a substantially different types of learning environment than
                            one might experience during an undergraduate career.
                        </p>
                        <p>Students embarking on graduate program begin by determining if an academic or professional degree is
                            right for them. Students who desire a career in a specific field may opt to pursue a professional
                            degree.
                            These programs emphasize hands-on learning and often require students to obtain substantial real-world
                            experience prior to graduation. </p>
                        <p>Academic or research degree align with a single specific area of study or field. Students in pursuit
                            of these degrees are required to develop an in-depth understanding of their subject area and complete
                            a thesis or capstone project to demonstrate their knowledge.
                            Although master’s degrees are the most common form of graduate study, there are various professional
                            and academic graduate-level degrees that students consider.</p>
                    </div>
                    <div class="offset-top-30"><img class="img-responsive d-inline-block"
                                                    src="<?= $toImages. '/academics-02-770x480.jpg' ?>" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                        <h6 class="font-weight-bold">Master programs</h6>
                        <div class="text-subline"></div>
                        <div class="row row-10 offset-top-20">
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>Business Administration (MBA)</li>
                                    <li>Business Administration (MScBA)</li>
                                    <li>Development Economics (MA)</li>
                                    <li>Disability Management (MA)</li>
                                    <li>Education (MEd – Counselling Specialization)</li>
                                    <li>Education (MEd – Multidisciplinary Leadership Specialization)</li>
                                    <li>Education (MEd – Special Education Specialization)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>English (MA)</li>
                                    <li>Gender Studies (MA)</li>
                                    <li>Health Sciences (MSc)</li>
                                    <li>History (MA)</li>
                                    <li>Integrated Wood Design (MEng)</li>
                                    <li>Interdisciplinary Studies (MA and MSc)</li>
                                    <li>International Studies (MA)</li>
                                    <li>Mathematical, Computer, Physical, & Molecular Sciences (MSc)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list list-unstyled list-marked">
                                    <li>Nursing (MScN)</li>
                                    <li>Nursing (MScN(FNP))</li>
                                    <li>Political Science (MA)</li>
                                    <li>Psychology (MSc)</li>
                                    <li>Social Work (MSW)</li>
                                    <li>Natural Resources and Environmental Studies (MA)</li>
                                    <li>Natural Resources and Environmental Studies (MNRES)</li>
                                    <li>Natural Resources and Environmental Studies (MSc)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-lg-top-30">
                            <h6 class="font-weight-bold">Professional Doctorate</h6>
                            <div class="text-subline"></div>
                            <p>A professional doctorate at LIUS focuses on the advanced practice of knowledge and skills, making
                                it a degree for those
                                who are more professionally oriented. While these programs also help to develop research skills, the
                                main focus is to apply
                                knowledge to industry to solve new and emerging problems such as: Juris Doctor (JD), Doctor of
                                Education (EdD), Doctor of
                                Medicine (MD), Doctor of Pharmacy (PharmD), etc...</p>
                        </div>
                        <div class="offset-lg-top-30">
                            <h6 class="font-weight-bold">Doctor of Philosophy (PhD)</h6>
                            <div class="text-subline"></div>
                            <p>LIUS offers 33 doctoral programs in emerging field within the sciences, humanities, social sciences,
                                and engineering.
                                A PhD, a postgraduate doctoral degree based on extensive research in a given field. Students earn a
                                PhD in areas such as technology, humanities, social sciences, and more. Individuals who complete their PhDs pursue a career in
                                academia, though some may continue on to complete similar research for the remainder of their career.
                            </p>
                            <p> Some common PhD programs LIUS offers include: Computer Engineering (PhDCE), Counseling Psychology, Bioengineering, and Pharmacology, PhD in Computer Sciences, PhD in Industrial
                                Engineering, Cybersecurity, Electrical Engineering, Network Science, Personal Health Informatics, PhDs are not to be confused with
                                professional/clinical doctorates, which are designed to provide students with the practical skills needed to excel in their career.
                            </p>
                        </div>
                        <div class="offset-lg-top-30">
                            <h6 class="font-weight-bold">Professional Development and Continuing Education</h6>
                            <div class="text-subline"></div>
                            <p>Expand your knowledge and create opportunities. Move your career forward or in a different direction.
                                Enhance your ability to work with others. Explore new ways of thinking.
                                Do it all with flexibility and support from our expert faculty and staff.
                            </p>
                            <p> Our programs are designed to help your pursue professional and lifelong learning through workshops, lectures, seminar, courses, in- training service, and conferences across a range of subjects.
                                Our certificate programs for educators, artists, and mental health professionals can help you expand your skills and knowledge and advance in your career without committing to a full degree program.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-7-3">
                    <h2 class="font-weight-bold">Non-Degree Offerings</h2>
                    <div class="hr divider bg-madison divider-md-0"></div>
                    <div class="offset-lg-top-60">
                        <p>LIUS’ mission makes clear the University’s dedication not only to serving the community and
                            the nation, but also the world. We recognize that understanding global issues is essential to
                            citizenship in a changing world.
                            LIUS experience is inherently global in nature. Students and scholars from LIUS routinely advance
                            knowledge and understanding on issues of global significance. Members of LIUS community travel across
                            the world for research and educational experiences. And international perspectives infuse
                            academic, life on campus every day, in classrooms, laboratories, events and activities.</p>
                        <p>Global education at LIUS offers students orientation programs, community-building opportunities and
                            many other initiatives, empowering international
                            students to thrive in all aspects of their lives at LIUS. Through initiatives such as peer-based
                            international program center
                            creates a home away from home for international students, ensuring the opportunity to embrace and
                            celebrate international identities, w
                            hile also recognizing and appreciating the diversity of students’ experiences.</p>
                        <p>From online courses to on-campus experiences, there are a range of learning opportunities available
                            for non-degree seekers.</p>
                    </div>
                    <div class="offset-top-30"><img class="img-responsive d-inline-block"
                                                    src="<?= $toImages. '/academics-06-770x480.jpg' ?>" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                        <h6 class="font-weight-bold">Lead International University</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-20">
                            <p>Visit a class or take courses for credit without matriculating as a Lead International University
                                undergraduate.</p>
                        </div>
                    </div>
                    <div class="offset-top-30">
                        <h6 class="font-weight-bold">Graduate & Professional Schools</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-20">
                            <p>The schools of JCU offer non-degree programs ranging from research opportunities to continuing
                                education.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-7-4">
                    <h2 class="font-weight-bold">Online Learning</h2>
                    <div class="hr divider bg-madison divider-md-0"></div>
                    <div class="offset-lg-top-60">
                        <p>At LIUS, follow your passion and expand your career possibilities with an online bachelor’ degree, master’s degree,
                            graduate certificate, or doctoral/PhD degree. Our online courses provide you with flexibility, convenience, and quality
                            while still earning the same world-renowned LIUS education. In recent years, education has changed significantly. </p>
                        <p>The focus has shifted from the lecturer to the students. The lecturer has had to change from the sage on the stage,
                            distributing gems of wisdom, to become the guide on the side, coming alongside the learner to partner with them to discover knowledge together.</p>
                        <p>Empowered by the amazing advances with IT and the changing lifestyles of the learners, there has been an increasing demand
                            for learning and teaching to be delivered flexible (the learner manages their own time and space) by using electronic tools,
                            as the world wide web, internet chat, and most recently the life e-learning virtual classroom, the face to face experience is
                            able to be greatly enhanced and strengthened as lifelong learning.</p>
                    </div>
                    <div class="offset-top-30"><img class="img-responsive d-inline-block"
                                                    src="<?= $toImages. '/academics-07-770x480.jpg' ?>" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                        <h6 class="font-weight-bold">Programs List</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-20">
                            <ul class="list list-unstyled list-marked">
                                <li>Introduction to Psychology</li>
                                <li>Mental Lives of Babies and Animals</li>
                                <li>Causes and Consequences of Corruption</li>
                                <li>Capital Punishment: Race, Poverty, & Disadvantage</li>
                                <li>Moral Foundations of Politics</li>
                                <li>Introduction to Classical Music</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
