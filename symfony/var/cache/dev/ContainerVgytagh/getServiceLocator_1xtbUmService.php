<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.1xtb_um' shared service.

return $this->services['service_locator.1xtb_um'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
    return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
}]);
