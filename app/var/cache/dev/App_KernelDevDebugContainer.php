<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDPpbY33\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDPpbY33/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDPpbY33.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDPpbY33\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDPpbY33\App_KernelDevDebugContainer([
    'container.build_hash' => 'DPpbY33',
    'container.build_id' => '75d44706',
    'container.build_time' => 1680432459,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDPpbY33');
