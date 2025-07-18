<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All About Echo</title>
</head>
<body>
    <h1>All about echo in PHP</h1>
    <h4>Agenda For this Program</h4>
    <ul>
        <li>What is echo?</li>
        <li>Use of echo?</li>
        <li>Multiple Echo in a Single line</li>
        <li>Line break in Echo</li>
        <li>Interview Question</li>
    </ul>
    <hr>

    <h3>What is echo?</h3>
    <p>In PHP, echo is a commonly used language construct that is used to display output to the browser or the command line. It's not a function, meaning you don't have to use parentheses with it, but you can if you prefer.</p>
    
    Here's a breakdown of how echo works and its key characteristics in PHP:<br><br>
    <strong>Displaying Content:</strong> echo is primarily used to output various types of data, including:<br>
    <br>
    <strong>Strings:</strong> You can display simple text by enclosing it in single or double quotes.
    <pre>
    &lt;?php
    echo "Hello, world!";
    echo 'This is a single-quoted string.';
    ?&gt;
    </pre>    
    <strong>Output:</strong><br>
    <code>
    <?php
    echo "Hello, world!";
    echo 'This is a single-quoted string.';
    ?> 
    </code>
    <br><br>

    <strong>Variables:</strong> echo can output the values stored in variables.
    php
    <pre>
    &lt;?php
    $name = "John";
    echo "Hello, " . $name . "!"; // Concatenation
    echo "Welcome, $name!"; // Variable interpolation with double quotes
    ?&gt;
    </pre>
    <strong>Output:</strong><br>
    <code>
    <?php
    $name = "John";
    echo "Hello, " . $name . "!"; // Concatenation
    echo "Welcome, $name!"; // Variable interpolation with double quotes
    ?>
    </code>
    <br><br>

    <strong>HTML Code:</strong> You can embed HTML tags directly within the echo statement to format the output in the browser.
    <pre>
    &lt;?php
    echo "&lt;h1&gt;Welcome to my website!&lt;/h1&gt;";
    echo "&lt;p&gt;This is a paragraph.&lt;/p&gt;";
    ?&gt;
    </pre>
    <strong>Output: </strong><br>
    <code>
    <?php
    echo "<h1>Welcome to my website!</h1>";
    echo "<p>This is a paragraph.</p>";
    ?>
    </code>
    <br>

    <strong>Expressions:</strong> The results of expressions can also be outputted.
    <pre>
    &lt;?php
    $x = 10;
    $y = 5;
    echo "The sum is: " . ($x + $y);
    ?&gt;
    </pre>
    <strong>Output: </strong><br>
    <code>
    <?php
    $x = 10;
    $y = 5;
    echo "The sum is: " . ($x + $y);
    ?>
    </code>
    <br><br>

    <Strong>Multiple Arguments:</strong> One notable feature of echo is that it can output multiple arguments (strings or variables) separated by commas, which get concatenated together without additional newlines or spaces between them.
    <pre>
    &lt;?php
    echo "Hello", " ", "World", "!";
    ?&gt;
    </pre>
    <strong>Output:</strong> <br>
    <code>
    <?php
    echo "Hello", " ", "World", "!";
    ?>
    </code>
    <br> <br>

    <strong>Performance:</strong> echo is generally considered slightly faster than print because it doesn't return a value, while print returns a value of 1 upon successful execution. In high-traffic environments, this slight difference in performance can be beneficial.
    <br><br>
    <strong>No Return Value:</strong> Unlike some functions, echo does not return a value. This means it cannot be used in expressions where a return value is expected.
    <br><br>
    <strong>Short Tags:</strong> PHP offers a shorthand for echo using the <code>&lt;?= ... ?&gt;</code> syntax, which is equivalent to <code>&lt;?php echo ... ?&gt;</code>. This can be a more concise way to output data, especially when embedding PHP within HTML. According to GeeksforGeeks however, using the full echo construct is advisable for better readability and compatibility.
    <br><br>
    <strong>Echo vs. print</strong>
    <br>
    While both echo and print are used for displaying output in PHP, there are some key differences: 
    Differences between echo and print in PHP include that echo does not return a value while print returns a value of 1. echo can take multiple parameters while print takes only one. Additionally, echo is generally faster than print. 
    The full comparison of echo and print in PHP can be found on <a href="https://www.naukri.com/code360/library/difference-between-echo-and-print-in-php">Naukri Code 360</a>.
    <hr>

    <h3>Use of echo?</h3>
    <p>Use of echo is discussed thoroughly in previous section. It can be used to print expressions, variables, strings and multiple arguments, etc.</p>
    Popular uses of echo are: 
    <ul>
        <li>To display <strong>strings</strong></li>
        <li>To display <strong>variables</strong></li>
        <li>Due to its performance over <b>print</b></li>
        <li>To display <b>dynamic content</b> with HTML</li>
        <li>It is case insensitive</li>
    </ul>
    <hr>

    <h3>Multiple echo in Single line</h3>
    <p>Multiple echo statements can be written in a single line.</p>
    <pre>
    &lt;?php
        echo "Hello"; echo 20+20; echo "Sunshine";
    ?&gt;
    </pre>
    <strong>Output:</strong><br>
    <code>
    <?php 
        echo "Hello"; echo 20+20; echo "Sunshine";
    ?>
    </code>
    <hr>

    <h3>Line break in echo</h3>
    <p>Multiple echo statements can be written in a single line.</p>
    <pre>
    &lt;?php
        echo "Hello Meenakshi &lt;br/&gt;"; echo 20+20; echo "&lt;br/&gt;"; echo "Sunshine";
    ?&gt;
    </pre>
    <strong>Output:</strong><br>
    <code>
    <?php 
        echo "Hello Meenakshi<br/>"; echo 20+20; echo "<br/>"; echo "Sunshine";
    ?>
    </code>
    <hr>

    <h3>Echo with parenthesis</h3>
    <pre>
        &lt;?php
        echo("Hello Sunshine!");
        &gt;
    </pre>
    <strong>Output:</strong><br>
    <code>
    <?php 
        echo("Hello Sunshine!");
    ?>
    </code>
    

</body>
</html>