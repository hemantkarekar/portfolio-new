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
                                <div class="col-lg-6 col-md-10 col-12">
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quisquam voluptatibus dolorem esse illum, eveniet nemo. Mollitia, ex quod? Quaerat harum molestias dignissimos, itaque facilis asperiores repellat nobis corrupti omnis.
                                        </p>
                                        <a href="" class="btn btn-lg btn-primary btn-w_icon-right">Download CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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