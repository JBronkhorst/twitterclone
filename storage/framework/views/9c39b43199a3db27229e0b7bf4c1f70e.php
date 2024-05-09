<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']); ?>
</head>
<body>
    <div id="app">
        <section class="px-8 py-4">
            <header class="container mx-auto">
                <h1>
                    <img
                        src="/images/logo.svg"
                        alt="Tweety">
                </h1>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <?php if(auth()->check()): ?>
                    <div class="lg:w-32">
                        <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4" style="max-height: 250px; height:flex">
                    <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            </main>
        </section>
    </div>
</body>
</html>
<?php /**PATH C:\Users\jbron\tweety\resources\views/layouts/app.blade.php ENDPATH**/ ?>