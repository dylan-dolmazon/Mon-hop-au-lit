<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4JeVWHo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4JeVWHo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4JeVWHo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4JeVWHo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4JeVWHo\App_KernelDevDebugContainer([
    'container.build_hash' => '4JeVWHo',
    'container.build_id' => 'e5b76fe2',
    'container.build_time' => 1675349431,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4JeVWHo');