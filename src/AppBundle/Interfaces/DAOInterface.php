<?php

namespace AppBundle\Interfaces;

/*use AppBundle\Base\AbstractDTO;*/
use AppBundle\Base\AbstractFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

Interface DAOInterface
{
	public function getDataByFilter($dtoFilter, Pagination $pagination, Sorting $sorting);

	public function insert(/*AbstractDTO*/ $dto);

	public function update(/*AbstractDTO*/ $dto);

	public function delete(/*AbstractDTO*/ $dto);
}