<script>
    // warning, error, success, info
    <?php if(session('swal')): ?>
        swal({
            title: "<?php echo e(session('title')); ?>",
            text: "<?php echo e(session('message')); ?>",
            icon: "<?php echo e(session('swal')); ?>",
            button: "Ok",
        });
    <?php endif; ?>

    window.addEventListener('swal', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            button: "Ok",
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\Cover-Panel\resources\views/layouts/_scripts.blade.php ENDPATH**/ ?>