

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('panel')->html();
} elseif ($_instance->childHasBeenRendered('ZDzxY8h')) {
    $componentId = $_instance->getRenderedChildComponentId('ZDzxY8h');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZDzxY8h');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZDzxY8h');
} else {
    $response = \Livewire\Livewire::mount('panel');
    $html = $response->html();
    $_instance->logRenderedChild('ZDzxY8h', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cover-Panel\resources\views/panel.blade.php ENDPATH**/ ?>