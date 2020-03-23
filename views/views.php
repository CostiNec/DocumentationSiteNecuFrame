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
        <h2>Views</h2>
        <hr>
        <p>If you want to create a view go in your project directory and run <mark class="background-dark color-white">php necu make:view view_directory.viewname</mark></p>
        <p>After you created your view you should have this created in your view file:</p>
        <div class="background-mark">
            <p class="green font-italic">/**</p>
            <p class="green font-italic">* @var $View View</p>
            <p class="green font-italic">* @var $isDevice MobileDetect</p>
            <p class="green font-italic">*/</p>
            <p><a class="orange">use</a> core\Helper;</p>
            <p><a class="orange">use</a> core\View;</p>
            <p><a class="orange">use</a> Detection\MobileDetect;</p>

        </div>
        <p>You can include a subview using the variable <mark><a class="purple">$View</a>-><a class="yellow">includeView</a>(<a class="green">'your_view'</a>,<a class="purple">$parameters</a>)</mark></p>
        <p>You can also see if you are on mobile, desktop or tablet device using the variable <mark class="purple">$isDevice</mark></p>
        <p>Methods of <mark class="purple">$isDevice</mark></p>
        <ul>
            <li><mark><a class="yellow">isMobile</a>()</mark> - returns true if you are on mobile device, else returns false</li>
            <li><mark><a class="yellow">isTablet</a>()</mark> - returns true if you are on mobile tablet, else returns false</li>
        </ul>
        <p>Or <a target="_blank" href="http://mobiledetect.net/">Learn more about Detect Mobile...</a></p>
    </div>
</main>
</body>

</div>