<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXci4myt\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXci4myt/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXci4myt.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXci4myt\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXci4myt\appProdProjectContainer([
    'container.build_hash' => 'Xci4myt',
    'container.build_id' => 'c89486bb',
    'container.build_time' => 1721033215,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXci4myt');