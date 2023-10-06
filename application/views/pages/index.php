<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= APP_NAME . " • " .  $page['title'] ?></title>
</head>

<body>
    <?php $this->load->view('components/_nav') ?>
    <main>
        <section id="hero">
            <div class="container">
                <div class="row m-0 flex-row-reverse align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="media-content">
                            <div class="portfolio__img">
                                <picture>
                                    <source media="(min-width: )" srcset="">
                                    <img class="w-100" src="<?= base_url() ?>assets/media/banner_img_1.png" alt="Persona Image">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-6">
                        <div class="text-content">
                            <div class="row m-0">
                                <div class="col-12">
                                    <div class="page-title">
                                        <h1>
                                            Hi, I am <span class="text-neon-green">Hemant</span>! <br>
                                            Creative <span class="text-neon-green">Developer</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-10 col-12">
                                    <div class="content">
                                        <div class="desc mb-5">
                                            <p>
                                                I am a Full Stack Engineer by profession and also a postgrad student in IT with a major in Information Security.
                                            </p>                                            
                                            <p>
                                                As an individual, I am an Enthusiastic Learner. I am always ready for challenges that make me think out of the box. Other than that, I do keep an interest in illustrations, and digital arts. I have a noticeable performance in the same.
                                            </p>
                                        </div>
                                        <button type="button" class="btn btn-lg btn-primary btn-w_icon-right" id="cvEnquiryModalBtn">Download CV<i class="ti ti-download icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="cvEnquiryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cvEnquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <!-- <form action="" method="post"> -->
                <?= form_open("api/download/cv", ["id" => "", "class" => ""]) ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="cvEnquiryModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">Your Full Name</label>
                            <input type="text" class="form-control" name="" id="" placeholder="Your Name">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Your Email Address</label>
                            <input type="email" class="form-control" name="" id="" placeholder="Your Email Address">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-w_icon-right">Download CV<i class="ti ti-download icon"></i></button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <?php if ($this->input->cookie('cvConsentUserToken') != NULL) : ?>
            <script>
                $(function() {
                    $('#cvEnquiryModalBtn').click(function() {
                        // AJAX Code to Update DB Count
                        alert("Welcome Again");
                    })
                })
            </script>
        <?php else : ?>
            <script>
                $(function() {
                    $('#cvEnquiryModalBtn').click(function() {
                        $("#cvEnquiryModal").modal('show');
                    })
                })
            </script>
        <?php endif ?>

        <section id="experience">
            <div class="container">
                <div class="text-center section-title">
                    <p class="title">Experiences & Top Skills</p>
                    <h2 class="subtitle">Showcasing the talent</h2>
                </div>
                <div class="row m-0">
                    <?php foreach ($skills as $skill) : ?>
                        <?php if ($skill['priority'] == 1) : ?>
                            <div class="col-md-6 mb-3 mb-md-4">
                                <div class="skill">
                                    <div class="skill_name">
                                        <h4><?= $skill['name'] ?></h4>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic" aria-valuenow="<?= $skill['points'] ?>" aria-valuemax="100" aria-valuemin="0" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: <?= $skill['points'] ?>%;"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                    <div class="col-12">
                        <a href="" class="btn btn-primary btn-w_icon-right disabled">Show Complete Skillset<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>