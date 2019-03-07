<?php

namespace AppBundle\Base;

class AbstractFilter {

    public function reset($dtoFilter)
    {

    }

    public function setFilters($filterArr)
    {
    	foreach ($filterArr as $key => $value) {
    		$functionName = 'set' . $key . 'Filter';
    		$this->{$functionName}($value);
    	}
    }
}