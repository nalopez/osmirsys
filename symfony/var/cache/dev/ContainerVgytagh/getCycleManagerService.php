<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Manager\CycleManager' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Util/Helper/SecurityHelperTrait.php';
include_once $this->targetDirs[3].'/src/AppBundle/Manager/CycleManager.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractDTO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DTOInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Cycle/Cycle.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractDAO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DAOInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Cycle/CycleDAO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractFilter.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DTOFilterInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Cycle/CycleFilter.php';
include_once $this->targetDirs[3].'/src/AppBundle/Util/Helper/Pagination.php';
include_once $this->targetDirs[3].'/src/AppBundle/Util/Helper/Sorting.php';

$a = new \AppBundle\Model\Cycle\Cycle();

return $this->services['AppBundle\Manager\CycleManager'] = new \AppBundle\Manager\CycleManager($a, new \AppBundle\Model\Cycle\CycleDAO(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load('getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $a), new \AppBundle\Model\Cycle\CycleFilter(), ${($_ = isset($this->services['AppBundle\Manager\StatusManager']) ? $this->services['AppBundle\Manager\StatusManager'] : $this->load('getStatusManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['AppBundle\Util\Helper\Pagination']) ? $this->services['AppBundle\Util\Helper\Pagination'] : ($this->services['AppBundle\Util\Helper\Pagination'] = new \AppBundle\Util\Helper\Pagination())) && false ?: '_'}, ${($_ = isset($this->services['AppBundle\Util\Helper\Sorting']) ? $this->services['AppBundle\Util\Helper\Sorting'] : ($this->services['AppBundle\Util\Helper\Sorting'] = new \AppBundle\Util\Helper\Sorting())) && false ?: '_'});
