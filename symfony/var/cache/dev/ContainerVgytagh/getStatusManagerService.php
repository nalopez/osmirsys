<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Manager\StatusManager' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Manager/StatusManager.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractDTO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DTOInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Status/Status.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractDAO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DAOInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Status/StatusDAO.php';
include_once $this->targetDirs[3].'/src/AppBundle/Base/AbstractFilter.php';
include_once $this->targetDirs[3].'/src/AppBundle/Interfaces/DTOFilterInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Model/Status/StatusFilter.php';
include_once $this->targetDirs[3].'/src/AppBundle/Util/Helper/Pagination.php';
include_once $this->targetDirs[3].'/src/AppBundle/Util/Helper/Sorting.php';

$a = new \AppBundle\Model\Status\Status();

return $this->services['AppBundle\Manager\StatusManager'] = new \AppBundle\Manager\StatusManager($a, new \AppBundle\Model\Status\StatusDAO(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load('getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $a), new \AppBundle\Model\Status\StatusFilter(), ${($_ = isset($this->services['AppBundle\Util\Helper\Pagination']) ? $this->services['AppBundle\Util\Helper\Pagination'] : ($this->services['AppBundle\Util\Helper\Pagination'] = new \AppBundle\Util\Helper\Pagination())) && false ?: '_'}, ${($_ = isset($this->services['AppBundle\Util\Helper\Sorting']) ? $this->services['AppBundle\Util\Helper\Sorting'] : ($this->services['AppBundle\Util\Helper\Sorting'] = new \AppBundle\Util\Helper\Sorting())) && false ?: '_'});