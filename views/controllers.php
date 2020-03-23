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
    <div class="container-fluid" id="main">
        <h2>Controllers</h2>
        <hr>
        <p>If you want to create a controller go in your project directory and run <mark class="background-dark color-white">php necu make:controller YourController</mark></p>
        <p>After you created your controller you should have this created in your controller file:</p>
        <div class="background-mark">
            <p><a class="orange">namespace</a> controllers<a class="orange">;</a></p>

            <p><a class="orange">use</a> core\Controller<a class="orange">;</a></p>
            <p><a class="orange">use</a> core\Helper<a class="orange">;</a></p>

            <p class="mb-0"><a class="orange">class</a> NecuController <a class="orange">extends</a> Controller</p>
            <p>{</p>
            <div class="ml-4">
                <p class="mb-0"><a class="orange">public function</a> <a class="yellow">__construct</a>(<a class="purple">$request</a>)</p>
            <p>{</p>
                <p class="ml-4"><a class="orange">parent</a>::<a class="yellow">__construct</a>(<a class="purple">$request</a>)<a class="orange">;</a></p>
            <p>}</p>
            </div>
            <p>}</p>
        </div>

        <p>Now in your controller create the method that you defined in route</p>
        <div class="background-mark">
            <p><a class="orange">namespace</a> controllers<a class="orange">;</a></p>

            <p><a class="orange">use</a> core\Controller<a class="orange">;</a></p>
            <p><a class="orange">use</a> core\Helper<a class="orange">;</a></p>

            <p class="mb-0"><a class="orange">class</a> NecuController <a class="orange">extends</a> Controller</p>
            <p>{</p>
            <div class="ml-4">
                <p class="mb-0"><a class="orange">public function</a> <a class="yellow">__construct</a>(<a class="purple">$request</a>)</p>
                <p>{</p>
                <p class="ml-4"><a class="orange">parent</a>::<a class="yellow">__construct</a>(<a class="purple">$request</a>)<a class="orange">;</a></p>
                <p>}</p>
            </div>
            <div class="ml-4">
                <p class="mb-0"><a class="orange">public function</a> <a class="yellow">yourmethod</a>(<a class="purple">$request</a>)</p>
                <p class="mb-4">{</p>
                <p>}</p>
            </div>
            <p>}</p>
        </div>
        <p>Parameter <mark><a class="purple">$request</a></mark>(you can name it whatever you want) will
        be an associative array from your routes. Let's get an example:</p>
        <p>The routes <mark>/necu/value1/value2</mark> is a match for <mark>/necu/{variable1}/{variable2}</mark>, in
        this case your parameter <mark><a class="purple">$request</a></mark> will be: </p>
        <div class="background-mark">
            <p>array(2) {</p>
            <div class="ml-4">
                <p class="my-0">["variable1"]=></p>
                <p class="my-0">string(6) "value1"</p>
                <p class="my-0">["variable2"]=></p>
                <p>string(6) "value2"</p>
            </div>
            <p>}</p>
        </div>
        <p>In your method you can return a view by using <mark><a class="purple">$this</a>-><a class="yellow">render</a>(<a class="green">'view_directory.your_views'</a>)</a></mark>,
        you can redirect by using <mark><a class="purple">$this</a>-><a class="yellow">redirect</a>(<a class="green">'your_url'</a>)</a></mark> or
        you can redirect 301 (permanent) by using <mark><a class="purple">$this</a>-><a class="yellow">permanentRedirect</a>(<a class="green">'your_views'</a>)</a></mark>
        </p>
        <p>
            You can also pass parameters in your view by giving an associative array <mark><a class="purple">$this</a>-><a class="yellow">render</a>(<a class="green">'your_view'</a>,<a class="purple">$parameters</a>)</a></mark> . For example if you have the following associative array
        </p>
        <div class="background-mark">
            <p>$parameters array(2) {</p>
            <div class="ml-4">
                <p class="my-0">["variable1"]=></p>
                <p class="my-0">string(6) "value1"</p>
                <p class="my-0">["variable2"]=></p>
                <p>string(6) "value2"</p>
            </div>
            <p>}</p>
        </div>
        <p>In your view you can use variables <mark><a class="purple">$variable1</a>,<a class="purple">$variable2</a></mark></p>
    </div>
</main>
</body>

</div>

<script>
    $('#main').addClass('animated bounceOutLeft');
</script>