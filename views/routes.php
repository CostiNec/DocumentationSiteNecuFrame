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
        <h2>Routes</h2>
        <hr>
        <p>The routes system is pretty simple, you can have 2 kind of routes: post and get</p>
        <p>We have an object instantiated Route <mark> <a class="purple"> $routes </a> = <a class="orange" > new </a> Route() ;</mark></p>
        <p>If you want a get route all you have to do is to call method get from our class <mark> <a class="purple"> $routes </a> -> <a class="yellow">get</a>(<a class="green">'/your_route'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark> </p>
        <p>If you want a get route all you have to do is to call method get from our class <mark> <a class="purple"> $routes </a> -> <a class="yellow">post</a>(<a class="green">'/your_route'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark> </p>
        <p>You can also have variables in link  <mark> <a class="purple"> $routes </a> -> <a class="yellow">get</a>(<a class="green">'/{your_var}'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark> </p>
        <p>You can also have multiple variables in link  <mark> <a class="purple"> $routes </a> -> <a class="yellow">get</a>(<a class="green">'/{your_var}/{your_var2}'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark> </p>
        <p>An very important thing, the order of your routes MATTER because we can have the following example:</p>
        <div class="background-mark">
            <p class="ml-3"><mark> <a class="purple"> $routes </a> -> <a class="yellow">get</a>(<a class="green">'/test1/test2'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark></p>
            <p class="ml-3"><mark> <a class="purple"> $routes </a> -> <a class="yellow">get</a>(<a class="green">'/{your_var}/{your_var2}'</a>, <a class="green">'YourController'</a>, <a class="green">'YourMethodFromController'</a>);</mark></p>
        </div>
        <p>In this case you will go on '/test1/test2' because the first route is the valid one</p>
        <p>We can also have 2 routes, one get and one post with the same name.</p>
    </div>
</main>
</body>

</div>
