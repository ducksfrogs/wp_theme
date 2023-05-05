This is our amazing custom theme.
<?php

function greet()
{
   echo "<P> Hi my name is </p>"; 
}

greet();
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>


<?php
$names = array('brad', 'john', 'ddd', 'eee');
$count = 0;

while($count<count($names)){
    echo "<li> $names[$count] </li>";
    $count++;
}
?>