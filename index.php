<?php
$mass = array ('item1', 'item2', 'item3', 'item4', 'item5', 'item6','item7', 'item8', 'item9','item10');
?>
<link rel="stylesheet" type="text/css" href="myCss.css">


<div id = "div1">
    <ul>
        <?php foreach ($mass as $key => $item): ?>
        <?php if ($key % 2 === 0): ?>
            <li><b><?php echo $key ?></b><?php echo " - " . $item; ?></li>
        <?php endif; endforeach; ?>
    </ul>
</div>

<br>

<div id = "div2">
    <ul>
        <?php foreach ($mass as $key => $item): ?>
        <?php if ($key % 2 > 0 ): ?>
            <li><b><?php echo $key ?></b><?php echo " - " . $item; ?></li>
        <?php endif; endforeach; ?>
    </ul>
</div>

