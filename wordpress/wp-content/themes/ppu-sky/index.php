<?php 
    function greet($name, $color) {
        echo "<p>Hi my name is $name. $color</p>";  # code...
    }
    
    greet('Jone', 'Blue');
    greet('Jame', 'green');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php

    $names = array("Brad", "Johe", "Jane");

?>

<h2><?php echo $names[0]; ?></h2>
