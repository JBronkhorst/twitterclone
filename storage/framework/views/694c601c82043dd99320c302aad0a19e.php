<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <?php if(auth()->check()): ?>
                    <div class="lg:w-32">
                        <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
                <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width:700px">
                    <?php echo e($slot); ?>

                </div>
                <div class="lg:w-1/6">
                    <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </main>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?><?php /**PATH C:\Users\jbron\tweety\resources\views/components/app.blade.php ENDPATH**/ ?>