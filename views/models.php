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
        <h2>Models</h2>
        <hr>
        <p>First of all we have to connect to our database, in your project directory you have to create a file named config.php, you have an example named config.example.php</p>
        <p>If you want to create a model go in your project directory and run <mark class="background-dark color-white">php necu make:model YourModel</mark></p>
        <p>After you created your model you should have this created in your model file:</p>
        <div class="background-mark">
            <p><a class="orange">namespace</a> models<a class="orange">;</a></p>

            <p><a class="orange">use</a> core\Models<a class="orange">;</a></p>
            <p class="green font-italic">/**</p>
            <p class="green font-italic">* const PRIMARYKEY = 'ID';</p>
            <p class="green font-italic">* const TABLE = 'table_name';(default is strtolower(model_name).'s' ex Article => articles</p>
            <p class="green font-italic">*/</p>
            <p class="mb-0"><a class="orange">class</a> YourModel <a class="orange">extends</a> Model</p>
            <p>{</p>
            <div class="ml-4">
                <p><a class="orange">protected</a> <a class="purple">$columns</a> = [<a class="green">'YOUR_COLUMNS'</a>]<a class="orange">;</a></p>
            </div>
            <p>}</p>
        </div>

        <p>Now in model you can add 2 optional variables : <mark><a class="orange">const</a> <a class="purple font-italic">PRIMARYKEY</a> = <a class="green">'ID'</a><a></a></mark><a class="orange">;</a>
            and <mark><a class="orange">const</a> <a class="purple font-italic">TABLE</a> = <a class="green">'table_name'</a><a>;</a></mark></p>
        <p>The constant <mark><a class="purple font-italic">PRIMARYKEY</a></mark> represents the name of column that is set as primary key in your table,
         if you don't set this variable his default value is "id"(key-sensitive)</p>
        <p>The constant <mark><a class="purple font-italic">TABLE</a></mark> represent the name of your table, if you don't set this constant
         it will be set default this way: the name of model lowercase + 's', example: model Article means articles</p>
        <h2>How to use a model</h2>
        <hr>
        <p>Let's use as example the model Article</p>
        <p>First of all you have to use the model <mark><a class="orange">use</a> models\Article<a class="orange">;</a> </mark>
        <p><strong>The method </strong><mark><a class="yellow">get()</a></mark></p>
        <p>Parameters: <mark><a class="purple">$value</a>,
                <a class="purple">$key</a> = <a class="orange">self</a>::<a class="purple font-italic">PRIMARYKEY</a>,<a class="purple">$columns</a>=[]</mark></p>
        <p>Output: An array of models</p>
        <p>The variable <mark><a class="purple">$value</a></mark> is supposed to be set because is the value of the referenced field</p>
        <p>If you don't set the variable <mark><a class="purple">$key</a></mark> it will be default the constant <mark><a class="purple font-italic">PRIMARYKEY</a></mark></p>
        <p>The variable <mark><a class="purple">$config</a></mark> is an array which represents the columns that you want to select. If you don't set it, you will select all the columns.</p>
        <p>Exmaples:</p>
        <p><mark><a class="font-italic">Article::</a><a class="yellow">get</a>(<a class="blue">4</a>)</mark> will return
        <div class="background-mark">
            array(1) {
            <div class="ml-4">
                [0]=>
                <div class="ml-4">
                object(models\Article)#9 (2) {
                    <div class="ml-4">
                        <p class="my-0">["columns":protected]=></p>
                        <p class="my-0">array(3) {</p>
                        <div class="ml-4">
                            <p class="my-0">[0]=></p>
                            <p class="my-0">string(2) "ID"</p>
                            <p class="my-0">[1]=></p>
                            <p class="my-0">string(7) "content"</p>
                            <p class="my-0">[2]=></p>
                            <p class="my-0">string(11) "description"</p>
                        </div>
                        <p class="my-0">}</p>
                        <p class="my-0">["data":protected]=></p>
                        <p class="my-0">array(3) {</p>
                        <div class="ml-4">
                            <p class="my-0">["id"]=></p>
                            <p class="my-0">string(1) "4"</p>
                            <p class="my-0">["content"]=></p>
                            <p class="my-0">string(11) "Hello there"</p>
                            <p class="my-0">["description"]=></p>
                            <p class="my-0">string(8) "I'm Necu"</p>
                        </div>
                        <p class="my-0">}</p>
                    </div>
                }
                </div>
            </div>
            }
        </div>
        <p class="mt-4"><strong>The method </strong><mark class="yellow">insert()</mark></p>
        <p>Usage: let's take the variable <mark><a class="purple">$model</a> = <a class="orange">new</a> Artice() </mark></p>
        <p class="ml-4"><mark><a class="purple">$model</a>->content = <a class="green">'I'm content here!'</a></mark> </p>
        <p class="ml-4"><mark><a class="purple">$model</a>->description = <a class="green">'I'm description here!'</a></mark> </p>
        <p class="ml-4"><mark><a class="purple">$model</a>->insert()</mark></p>
        <p>This will insert a new row in your table with set values in model.</p>

        <p class="mt-4"><strong>The method </strong><mark class="yellow">update()</mark></p>
        <p>Usage: let's take the variable <mark><a class="purple">$model</a> = <a class="font-italic">Article::</a><a class="yellow">get</a>(<a class="blue">4</a>)[<a class="blue">0</a>] </mark></p>
        <p class="ml-4"><mark><a class="purple">$model</a>->content = <a class="green">'I'm new content here!'</a></mark> </p>
        <p class="ml-4"><mark><a class="purple">$model</a>->description = <a class="green">'I'm new description here!'</a></mark> </p>
        <p class="ml-4"><mark><a class="purple">$model</a>->update()</mark></p>
        <p>The corresponding database row will be updated.</p>

        <p class="mt-4"><strong>The method </strong><mark class="yellow">save()</mark></p>
        <p>This method will insert the model if the model doesn't exist, else it will update the model</p>

        <p class="mt-4"><strong>The method </strong><mark class="yellow">customQuery(<a class="purple">$query</a>)</mark></p>
        <p>This method will return the PDO object of a normal query</p>
        <p>Usage: <mark><a class="font-italic">Article</a>::<a class="yellow">customQuery</a>(<a class="green">'SELECT * FROM articles'</a>)</a></mark></p>

        <p class="mt-4"><strong>The method </strong><mark class="yellow">customPrepareQuery(<a class="purple">$query</a>,<a class="purple">$parameters</a>)</mark></p>
        <p>This method will also return the PDO object of a prepared statement query.</p>
        <p>Usage: <mark><a class="font-italic">Article</a>::<a class="yellow">customPrepareQuery</a>(<a class="green">'INSERT INTO articles (content, description) VALUES (?, ?)'</a>, [ <a class="green">'insert me'</a>, <a class="green">'me too' </a>])</a></mark></p>

</main>
</body>

</div>