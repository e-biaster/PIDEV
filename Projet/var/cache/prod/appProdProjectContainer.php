<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMiruxbj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMiruxbj/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerMiruxbj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerMiruxbj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerMiruxbj\appProdProjectContainer([
    'container.build_hash' => 'Miruxbj',
    'container.build_id' => '381d35e9',
    'container.build_time' => 1581886059,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMiruxbj');
