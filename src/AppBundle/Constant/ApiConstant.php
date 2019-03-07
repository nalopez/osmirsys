<?php

namespace AppBundle\Constant;

class ApiConstant {
	// Date formats
	const DATE_TIME_YMDHIS = 'Y-m-d H:i:s';

	// Salt config
	const SALT_LENGTH = 10;

	// Status Codes
	const STATUS_ACTIVE = 'ACT';
	const STATUS_INACTIVE = 'IAT';
	const STATUS_LOCKED = 'LCK';
	const STATUS_DELETED = 'DEL';
}
