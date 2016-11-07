<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <?php echo $__env->make('layouts._includes/_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if(Session::has('flash_message')): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div align='center' class="alert <?php echo e(Session::get('flash_message')['class']); ?>">
                        <?php echo e(Session::get('flash_message')['msg']); ?>

                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
