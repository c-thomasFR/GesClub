<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCJb8HkR\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCJb8HkR/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCJb8HkR.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCJb8HkR\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCJb8HkR\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CJb8HkR',
    'container.build_id' => '12a248b0',
    'container.build_time' => 1573855113,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCJb8HkR');
