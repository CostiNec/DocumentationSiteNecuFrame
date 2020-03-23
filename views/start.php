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
        <h2>Getting started</h2>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <p>What you need to start:</p>
                <ul>
                    <li>php (at least 7.2)</li>
                    <li>composer</li>
                    <li>mysql(optional)</li>
                </ul>
                <h5>Step 1</h5>
                <p>&nbsp;&nbsp;&nbsp; Go on <a href="https://github.com/CostiNec/NecuFrame" target="_blank">Github</a> and download the project </p>
                <h5>Step 2</h5>
                <p>&nbsp;&nbsp;&nbsp;Run in terminal "composer install"</p>
                <h5>Step 3</h5>
                <p> &nbsp;&nbsp;&nbsp;Go in public directory and start server (php -S 127.0.0.1:8000)</p>
                <h5>Step 4</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Voilà, that's all, now you can start :)</p>
            </div>
        </div>
    </div>
</main>
</body>
</div>
