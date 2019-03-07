<?php

namespace AppBundle\Base;

class AbstractDAO {

    public function generateWhereSetParamClause(&$queryBuilder, $dto, $tableMapArr)
    {
    	$dtoArr = $dto->getArr();
    	foreach ($dtoArr as $key => $value) {
    		if (empty($value)) {
    			continue;
    		}

    		$queryBuilder->where($tableMapArr[$key] . ' = :' . $key);
    		$queryBuilder->setParameter($key, $value);
    	}
    }

    public function generateUpdateClause(&$queryBuilder, $dto, $whereArr)
    {
    	$dtoArr = $dto->getArr();
    	$tableMapArr = $dto->getDtoToTableMap();
    	foreach ($dtoArr as $key => $value) {
    		if (empty($value) || in_array($key, $whereArr)) {
    			continue;
    		}

    		$queryBuilder->set($tableMapArr[$key], ':' . $key);
    		$queryBuilder->setParameter($key, $value);
    	}

    	foreach ($whereArr as $tableCol) {
    		$queryBuilder->where($tableMapArr[$tableCol] . ' = :' . $tableCol);
    		$queryBuilder->setParameter($tableCol, $dtoArr[$tableCol]);
    	}
    }

    public function createDtoCollection($dataResults, $dto)
    {
    	if (count($dataResults) == 1) {
    		return $this->createDto($dataResults[0], $dto);
    	}

    	$dtoCollection = [];
    	foreach ($dataResults as $dataResult) {
            $dtoCollection[] = $this->createDto($dataResult, $dto);
    	}

        return $dtoCollection;
    }

    private function createDto($dataArr, $dto)
    {
        $newDto = new $dto();
    	$tableMapArr = $dto->getDtoToTableMap();
        foreach ($dataArr as $key => $value) {
    		if (!$arrayKey = array_search($key, $tableMapArr)) {
    			continue;
    		}

    		$setFunction = 'set' . $arrayKey;
    		$newDto->{$setFunction}($value);
    	}

    	return $newDto;
    }
}