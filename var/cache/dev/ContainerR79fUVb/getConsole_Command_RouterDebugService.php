<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.router_debug' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

$this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()));

$instance->setName('debug:router');

return $instance;
