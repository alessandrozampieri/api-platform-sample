<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/contracts/Service/ResetInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['cache.app'])) {
        yield 'cache.app' => ($this->services['cache.app'] ?? null);
    }
    if (isset($this->services['cache.system'])) {
        yield 'cache.system' => ($this->services['cache.system'] ?? null);
    }
    if (false) {
        yield 'cache.validator' => null;
    }
    if (false) {
        yield 'cache.serializer' => null;
    }
    if (false) {
        yield 'cache.annotations' => null;
    }
}, function () {
    return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (false);
}), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset']]);