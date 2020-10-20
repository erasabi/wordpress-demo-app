<?php 
    function greet($name, $color) {
        echo "<p>Hi, I'm $name and my fav color is $color </p>";
    }

    greet('John', 'Blue');
?>

<h1>
    <?php 
        // bloginfo is predefined function
        // lets us access site info defined in Settings tab of admin panel 
        bloginfo('name'); 
    ?>
</h1>
<p>
    <?php 
        bloginfo('description'); 
    ?>
</p>