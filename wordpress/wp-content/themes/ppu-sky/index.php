<?php

    $names = array("Brad", "Johe", "Jane");

    $count = 0;

    while($count < count($names)){
        echo "<li>Hi, my name is " . $names[$count] . "</li>";
        $count++;
    }

?>

<h2><?php echo $names[0]; ?></h2>
<p><?php echo $names[1]; ?></p>
<p><?php echo $names[2]; ?></p>

