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
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>