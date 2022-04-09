<footer class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-muted">
                <p>Made With <i class="fas fa-heart fa-fw"></i> By M Arya Anggara Gustiana</p>
                <p>Copyright &copy; <?= date('Y') ?></p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>

<!-- Jquery -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.6.0.min.js" type="text/javascript">
</script>

<!-- Datatables JS -->
<script src="<?= base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/dataTables.bootstrap5.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/dataTables.buttons.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/buttons.bootstrap5.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/jszip.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/pdfmake.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/vfs_fonts.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/buttons.html5.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/vendor/datatables/js/buttons.print.min.js" type="text/javascript">
</script>

<!-- Sweetalert2 Script -->
<script src="<?= base_url(); ?>assets/vendor/sweetalert2/package/dist/sweetalert2.all.min.js"></script>

<!-- paho-mqtt -->
<script src="<?= base_url(); ?>assets/vendor/paho-mqtt/mqttws31.js" type="text/javascript">
</script>

<!-- My paho-mqtt Script -->
<script src="<?= base_url(); ?>assets/js/paho-mqtt-script.js" type="text/javascript">
</script>

<script>
    MQTTconnect();
</script>


<!-- Sweetalert2 Script -->
<?php if ($this->session->flashdata('flash') == 'delete-failed') : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Failed To Delete Data!'
        });
    </script>
<?php elseif ($this->session->flashdata('flash') == 'delete-success') : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Data Has Been Deleted!'
        });
    </script>
<?php elseif ($this->session->flashdata('flash') == 'edit-failed') : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Failed To Edit Data!'
        });
    </script>
<?php elseif ($this->session->flashdata('flash') == 'edit-success') : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Data Has Beed Edited!'
        });
    </script>
<?php elseif ($this->session->flashdata('flash') == 'wrong-password') : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'You Entered The Wrong Password!'
        });
    </script>
<?php elseif ($this->session->flashdata('flash') == 'truncate-success') : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Table Has Been Truncated!'
        });
    </script>
<?php endif; ?>

<!-- My Script -->
<script src="<?= base_url(); ?>assets/js/script.js" type="text/javascript">
</script>
</body>

</html>