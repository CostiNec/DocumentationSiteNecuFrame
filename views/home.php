<?php
/**
 * @var $View View
 * @var $isDevice MobileDetect
 */

use core\Helper;
use core\View;
use Detection\MobileDetect;

$View->includeView('template.head');
$View->includeView('template.sidenav');
?>

<body id="page-top">

<main class="page-content">
    <div class="container-fluid">
        <h2>NecuFramework</h2>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <p>NecuFramework is a custom MVC that is easy to use. This framework was developed for personal projects and it can be used for a lot of things and will probably be perfect for your project</p>
                <p> You can find the complete code on <a href="https://github.com/CostiNec/NecuFrame" target="_blank">
                        Github</a></p>
            </div>
        </div>
        <h2>What NecuFrame offers</h2>
        <hr>
        <div class="row">
            <ul>
                <li>easy usage of route system</li>
                <li>MVC principles</li>
                <li>integrated options like detect mobile devices, bootstrap, FEED RSS classes, jquery, fontawesome</li>
            </ul>
        </div>
        <h5>GitHub</h5>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="card rounded-0 p-0 shadow-sm">
                    <img src="/assets/img/logo.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
                    <div class="card-body text-center">
                        <h6 class="card-title">Custom MVC NecuFrame</h6>
                        <a href="https://github.com/CostiNec/NecuFrame" target="_blank" class="btn btn-primary btn-sm">Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</div>