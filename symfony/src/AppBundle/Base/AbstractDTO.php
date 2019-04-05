<?php

namespace AppBundle\Base;

class AbstractDTO {

    public function reset()
    {
        $dtoArr = $this->getArr();
    	foreach (array_keys($dtoArr) as $value) {
            $functionName = 'set' . $value;
            $this->{$functionName}(null);
        }
    }

    public function setValues($valueArr)
    {
    	foreach ($valueArr as $key => $value) {
    		$functionName = 'set' . $key;
    		$this->{$functionName}($value);
    	}
    }
}