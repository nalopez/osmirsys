<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.yawg1fa' shared service.

return $this->services['service_locator.yawg1fa'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['manager' => function () {
    $f = function (\AppBundle\Manager\PenManager $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Manager\PenManager']) ? $this->services['AppBundle\Manager\PenManager'] : $this->load('getPenManagerService.php')) && false ?: '_'});
}, 'session' => function () {
    return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
}]);
