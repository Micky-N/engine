<?php

require_once './vendor/autoload.php';
defined('TEST_VIEW') or define('TEST_VIEW', __DIR__ . '/test/views/');

if(!$_REQUEST){
    $_REQUEST['p'] = 'default';
}

if(!empty($_REQUEST['p'])){
    $page = $_REQUEST['p'];
    $viewRenderer = new \MkyEngine\Test\ViewRenderer(TEST_VIEW);
    $environment = $viewRenderer->getEnvironment();
    $environment->loader()->setComponentDir('components');
    if(!$environment->fileExists($page)){
        $page = 'default';
    }
    $v = $viewRenderer->render($page);
    echo $v->render();
}