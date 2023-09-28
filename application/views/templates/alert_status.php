<div class="alert-status">
    <?php if ($this->session->has_userdata('success')) : ?>
        <?php if ($this->session->success['status']) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Registration Successful
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php else : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Registration Failed, <?= $this->session->success['message'] ?>, <a href="<?= base_url('register-now') ?>">Try again!</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
    <?php endif ?>
</div>