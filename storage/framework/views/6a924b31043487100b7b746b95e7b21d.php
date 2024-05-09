<div class="flex p-4 <?php echo e($loop->last ? '' : 'border-b border-b gray-400'); ?>">
    <div class="mr-2 flex-shrink-0">
        <a href="<?php echo e(route('profile', $tweet->user->name)); ?>">
            <img 
                src="<?php echo e($tweet->user->avatar); ?>" 
                alt="" 
                class="rounded-full mr-2"
                width="50"
                height="50"
            >  
        </a>   
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="<?php echo e(route('profile', $tweet->user->name)); ?>">
                <?php echo e($tweet->user->name); ?>

            </a>
        </h5>
        <p class="text-sm">
            <?php echo e($tweet->body); ?>

        </p>
        
        <?php if(auth()->guard()->check()): ?>
            <?php if (isset($component)) { $__componentOriginala7f180e9f668b1e5cb1c8b68dc816dc3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7f180e9f668b1e5cb1c8b68dc816dc3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.like-buttons','data' => ['tweet' => $tweet]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('like-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tweet' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7f180e9f668b1e5cb1c8b68dc816dc3)): ?>
<?php $attributes = $__attributesOriginala7f180e9f668b1e5cb1c8b68dc816dc3; ?>
<?php unset($__attributesOriginala7f180e9f668b1e5cb1c8b68dc816dc3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f180e9f668b1e5cb1c8b68dc816dc3)): ?>
<?php $component = $__componentOriginala7f180e9f668b1e5cb1c8b68dc816dc3; ?>
<?php unset($__componentOriginala7f180e9f668b1e5cb1c8b68dc816dc3); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>   
</div>
<?php /**PATH C:\Users\jbron\tweety\resources\views/_tweet.blade.php ENDPATH**/ ?>