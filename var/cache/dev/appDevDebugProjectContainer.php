<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAlxy2t3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAlxy2t3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAlxy2t3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAlxy2t3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerAlxy2t3\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Alxy2t3',
    'container.build_id' => '7c2f9155',
    'container.build_time' => 1528713841,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAlxy2t3');
