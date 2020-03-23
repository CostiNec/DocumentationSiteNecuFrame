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

<main class="page-content" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">
        <h2>Helper</h2>
        <hr>
        <p>You can use Helper anywhere in your projects, all you have to do is to <mark><a class="orange">use</a> core\Helper</mark></p>
        <p>You have the method vardump and you have to use it like this:</p>
        <p><mark><a class="font-italic">Helper</a>::<a class="yellow">vardump</a>
                (<a class="purple">$whatToDump</a>, <a class="orange">true</a>(if you want the page to die after the dump), <a class="green">'background_color'</a>
                (optional, default white), <a class="green">'text_color'</a>(optional, default black))</mark></p>
        <p>You can also use dd(<a class="purple">$whatToDump</a>) like in Laravel</p>
        <p>And also you have Vardumper from Symfony</p>
        <h2>Device Detect</h2>
        <hr>
        <p>You have integrated the class MobileDetect which is used to detect your device using the User Agent, to check
        if you are on a specific device, etc. <a target="_blank" href="http://mobiledetect.net/">Learn more about Detect Mobile...</a>. For using
        MobileDetect all you have to do is to <mark><a class="orange">use</a> Detection\MobileDetect </mark>.
        In views and controllers you have a predetermined variable <mark><a class="purple">$isDevice</a></mark> for views and
            <mark><a class="purple">$this</a>->isDevice</mark> which is an object of type MobileDetect and you don't have to
            <mark><a class="orange">use</a> Detection\MobileDetect</mark>.
        If you are not in views or controllers you have to instantiate an MobileDetect object, for example <mark><a class="purple">$detect</a> =
            <a class="orange">new</a> MobileDetect()</mark></p>
        <h2>RSS, RSS2, FEED, ATOM created classes</h2>
        <hr>
        <p>All you have to do is to <mark><a class="orange">use </a>FeedWriter\RSS2</mark>, or use other class</p>
        <p><a target="_blank" href="https://mibe.github.io/FeedWriter/namespaces/FeedWriter.html">Learn more about those classes</a></p>
        <h2>Exceptions</h2>
        <hr>
        You can use our Exception class if you are not in CONTROLLER you have to <mark><a class="orange">use</a> core\Exception</mark>. For
        throwing exception you have to use it this way
        <p><mark>
            <a class="orange">throw</a>( <a class="orange">new</a>  <a class="orange">Exception</a>
            (<a class="purple">$message</a>,<a class="purple">$errorCode</a>))</mark></p>
        <h2>Alternative functions for views</h2>
        <hr>
        <p>In public directory you have a php file named functions.php and his scope is to write functions for views if you consider
        that you need to use a function in view and not in controller</p>
        <h2>Other technologies included in project </h2>
        <ul>
            <li>bootstrap 4.4.1</li>
            <li>jquery 3.4.1</li>
            <li>fontawesome</li>
            <li>other classes or libraries installed with composer</li>
        </ul>
    </div>
</main>

</div>
