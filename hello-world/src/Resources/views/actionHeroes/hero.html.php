<?php $view->extend('layout.html.php') ?>

<?php
    echo $view['actions']->render(
        new \Symfony\Component\HttpKernel\Controller\ControllerReference(
        'App\Controller\MenuController::menu',
        array(
            'name'  => "tut",
            'color' => 'green',
        )
    ))
?>


<h1><?php echo $heroName?></h1>

<?php echo $heroDescription?>

