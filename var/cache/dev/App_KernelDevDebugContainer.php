<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE2HiC4F\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE2HiC4F/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE2HiC4F.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE2HiC4F\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE2HiC4F\App_KernelDevDebugContainer([
    'container.build_hash' => 'E2HiC4F',
    'container.build_id' => 'cbf0dc66',
    'container.build_time' => 1744141339,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE2HiC4F');
