<?php $__env->startSection('content'); ?>
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
             <?php echo $__env->make('_publish-tweet-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="border border-gray-300 rounded-lg">
                <?php $__currentLoopData = $tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('_tweet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4" style="max-height: 250px; height:flex">
            <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jbron\tweety\resources\views/home.blade.php ENDPATH**/ ?>