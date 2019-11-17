<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css" media="screen">
      .card.bg-dark {margin: 15px 0px;}
    </style>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Qbudega</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body style="background: rgb(230,230,230);">
<div class="flex-wrap">
      <!-- Menu superior -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
        <a class="navbar-brand text-white" href="<?php echo e(url('/')); ?>">QBudega</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white px-4" href="#" data-toggle="modal" data-target="#about">Sobre</a>
            </li>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item active">
                    <a class="nav-link text-white px-4" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
            
            <?php if(Route::has('register')): ?>
                <li class="nav-item active">
                    <a class="nav-link text-white px-4" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php endif; ?>

            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white px-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /var/www/html/ProjetoBudega/projetoBudega/resources/views/layouts/app.blade.php ENDPATH**/ ?>