<?php if (isset($component)) { $__componentOriginal7ae6b45c011e855a5545a671a7f3568e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt=""
                class="mb-2"
            >

            <img
                src="<?php echo e($user->avatar); ?>"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left:50%"
                width="150"
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-0"><?php echo e($user->name); ?></h2>
                <p class="text-sm">Joined <?php echo e($user->created_at->diffForHumans()); ?></p>
            </div>

            <div class="flex">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
                    <a 
                        href="<?php echo e($user->path('edit')); ?>" 
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                        >
                            Edit profile
                    </a>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3c5e4bb2282318dbf916fb29eca58196 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c5e4bb2282318dbf916fb29eca58196 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.follow-button','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('follow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c5e4bb2282318dbf916fb29eca58196)): ?>
<?php $attributes = $__attributesOriginal3c5e4bb2282318dbf916fb29eca58196; ?>
<?php unset($__attributesOriginal3c5e4bb2282318dbf916fb29eca58196); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c5e4bb2282318dbf916fb29eca58196)): ?>
<?php $component = $__componentOriginal3c5e4bb2282318dbf916fb29eca58196; ?>
<?php unset($__componentOriginal3c5e4bb2282318dbf916fb29eca58196); ?>
<?php endif; ?>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat.
        </p>

        
    </header>

    <?php echo $__env->make('_timeline', [
        'tweets' => $tweets
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $attributes = $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $component = $__componentOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?><?php /**PATH C:\Users\jbron\tweety\resources\views/profiles/show.blade.php ENDPATH**/ ?>