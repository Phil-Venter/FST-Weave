<?php $class = classify(
    'container mx-auto'
)->merge($class ?? null) ?>

<div :class="$class">
    <?= $slot ?>
</div>