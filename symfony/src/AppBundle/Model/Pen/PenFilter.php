<?php

namespace AppBundle\Model\Pen;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class PenFilter extends AbstractFilter implements DTOFilterInterface
{
    private $penId;

    private $penCode;

    public function getPenIdFilter()
    {
        return $this->penId;
    }

    public function getPenCodeFilter()
    {
        return $this->penCode;
    }

    public function setPenIdFilter($penId)
    {
        $this->penId = $penId;
    }

    public function setPenCodeFilter($penCode)
    {
        $this->penCode = $penCode;
    }

    public function getArr()
    {
        return [
            'penId' => $this->getPenIdFilter(),
            'penCode' => $this->getPenCodeFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'penId' => DbConst::PENS_TBL_ID_A,
            'penCode' => DbConst::PENS_TBL_PENCODE_A,
        ];
    }
}