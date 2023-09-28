<div class="modal" id="admissionModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <div class="d-flex gap-3 align-items-center">
                        <img src="<?= base_url() ?>assets/media/nhss_logo.png" alt="Logo" class="d-inline-block" height="60">
                        <?= APP_NAME ?>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $data = [
                    'page_source' => "Register Page"
                ];
                $this->load->view('forms/admission-form', $data);
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        setTimeout(() => {
            $('#admissionModal').modal('show');
        }, 3000);
    });
</script>