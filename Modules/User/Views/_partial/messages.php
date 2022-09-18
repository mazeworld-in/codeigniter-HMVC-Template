<?php
if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
        <?php echo session()->getFlashdata('success') ?>
    </div>
<?php elseif (session()->getFlashdata('failed')) : ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
        <?php echo session()->getFlashdata('failed') ?>
    </div>
<?php endif; ?>
