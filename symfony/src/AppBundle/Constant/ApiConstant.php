<?php

namespace AppBundle\Constant;

class ApiConstant {
	// Date formats
	const DATE_TIME_YMDHIS = 'Y-m-d H:i:s';
	const DATE_TIME_YMD_DASH = 'Y-m-d';

	// Salt config
	const SALT_LENGTH = 10;

	// Status Codes
	const STATUS_ACTIVE = 'ACT';
	const STATUS_INACTIVE = 'IAC';
	const STATUS_LOCKED = 'LCK';
	const STATUS_DELETED = 'DEL';
}
