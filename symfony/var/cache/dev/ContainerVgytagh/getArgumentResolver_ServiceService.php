<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['AppBundle\\Controller\\CycleController:addCycleAction' => function () {
    return ${($_ = isset($this->services['service_locator.bb5blq0']) ? $this->services['service_locator.bb5blq0'] : $this->load('getServiceLocator_Bb5blq0Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\CycleController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator._mdexnc']) ? $this->services['service_locator._mdexnc'] : $this->load('getServiceLocator_MdexncService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\DefaultController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.ieftfsw']) ? $this->services['service_locator.ieftfsw'] : $this->load('getServiceLocator_IeftfswService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\HomeController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.1xtb_um']) ? $this->services['service_locator.1xtb_um'] : $this->load('getServiceLocator_1xtbUmService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\PenController:addTenantAction' => function () {
    return ${($_ = isset($this->services['service_locator.yawg1fa']) ? $this->services['service_locator.yawg1fa'] : $this->load('getServiceLocator_Yawg1faService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\PenController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.yawg1fa']) ? $this->services['service_locator.yawg1fa'] : $this->load('getServiceLocator_Yawg1faService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController:loginAction' => function () {
    return ${($_ = isset($this->services['service_locator.amh2vah']) ? $this->services['service_locator.amh2vah'] : $this->load('getServiceLocator_Amh2vahService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController:logoutAction' => function () {
    return ${($_ = isset($this->services['service_locator.alsmxox']) ? $this->services['service_locator.alsmxox'] : $this->load('getServiceLocator_AlsmxoxService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController:addTenantAction' => function () {
    return ${($_ = isset($this->services['service_locator.tkodlje']) ? $this->services['service_locator.tkodlje'] : $this->load('getServiceLocator_TkodljeService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.tkodlje']) ? $this->services['service_locator.tkodlje'] : $this->load('getServiceLocator_TkodljeService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController:viewTenantInfoAction' => function () {
    return ${($_ = isset($this->services['service_locator.vqqaaby']) ? $this->services['service_locator.vqqaaby'] : $this->load('getServiceLocator_VqqaabyService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController:addUserAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController:editUserAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\CycleController::addCycleAction' => function () {
    return ${($_ = isset($this->services['service_locator.bb5blq0']) ? $this->services['service_locator.bb5blq0'] : $this->load('getServiceLocator_Bb5blq0Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\CycleController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator._mdexnc']) ? $this->services['service_locator._mdexnc'] : $this->load('getServiceLocator_MdexncService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\DefaultController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.ieftfsw']) ? $this->services['service_locator.ieftfsw'] : $this->load('getServiceLocator_IeftfswService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\HomeController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.1xtb_um']) ? $this->services['service_locator.1xtb_um'] : $this->load('getServiceLocator_1xtbUmService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\PenController::addTenantAction' => function () {
    return ${($_ = isset($this->services['service_locator.yawg1fa']) ? $this->services['service_locator.yawg1fa'] : $this->load('getServiceLocator_Yawg1faService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\PenController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.yawg1fa']) ? $this->services['service_locator.yawg1fa'] : $this->load('getServiceLocator_Yawg1faService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController::loginAction' => function () {
    return ${($_ = isset($this->services['service_locator.amh2vah']) ? $this->services['service_locator.amh2vah'] : $this->load('getServiceLocator_Amh2vahService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController::logoutAction' => function () {
    return ${($_ = isset($this->services['service_locator.alsmxox']) ? $this->services['service_locator.alsmxox'] : $this->load('getServiceLocator_AlsmxoxService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController::addTenantAction' => function () {
    return ${($_ = isset($this->services['service_locator.tkodlje']) ? $this->services['service_locator.tkodlje'] : $this->load('getServiceLocator_TkodljeService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.tkodlje']) ? $this->services['service_locator.tkodlje'] : $this->load('getServiceLocator_TkodljeService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TenantController::viewTenantInfoAction' => function () {
    return ${($_ = isset($this->services['service_locator.vqqaaby']) ? $this->services['service_locator.vqqaaby'] : $this->load('getServiceLocator_VqqaabyService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController::addUserAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController::editUserAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\UserController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.sfjmxip']) ? $this->services['service_locator.sfjmxip'] : $this->load('getServiceLocator_SfjmxipService.php')) && false ?: '_'};
}]));
