<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.security_expression_language' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ContractsTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('EWBPSe1QfP', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
