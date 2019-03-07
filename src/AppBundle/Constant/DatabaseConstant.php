<?php

namespace AppBundle\Constant;

class DatabaseConstant {
	// Statuses TBL
	const STATUSES_TBL_NAME = 'statuses';
	const STATUSES_TBL_ALIAS = 'sts';
	const STATUSES_TBL_ID = 'status_id';
	const STATUSES_TBL_STSNAME= 'status_name';
	const STATUSES_TBL_STSCODE = 'status_code';
	const STATUSES_TBL_ID_A = 'sts.status_id';
	const STATUSES_TBL_STSNAME_A= 'sts.status_name';
	const STATUSES_TBL_STSCODE_A = 'sts.status_code';

	// Users TBL
	const USERS_TBL_NAME = 'users';
	const USERS_TBL_ALIAS = 'usr';
	const USERS_TBL_ID = 'user_id';
	const USERS_TBL_USERNAME = 'username';
	const USERS_TBL_PASSWORD = 'password';
	const USERS_TBL_SALT = 'salt';
	const USERS_TBL_FIRSTNAME = 'first_name';
	const USERS_TBL_LASTNAME = 'last_name';
	const USERS_TBL_LASTLOGIN = 'last_login';
	const USERS_TBL_STSID = 'status_id';
	const USERS_TBL_DATECRT = 'date_created';
	const USERS_TBL_DATEUPD = 'date_updated';
	const USERS_TBL_CRTBY = 'created_by';
	const USERS_TBL_UPDBY = 'updated_by';
	const USERS_TBL_ID_A = 'usr.user_id';
	const USERS_TBL_USERNAME_A = 'usr.username';
	const USERS_TBL_PASSWORD_A = 'usr.password';
	const USERS_TBL_SALT_A = 'usr.salt';
	const USERS_TBL_FIRSTNAME_A = 'usr.first_name';
	const USERS_TBL_LASTNAME_A = 'usr.last_name';
	const USERS_TBL_LASTLOGIN_A = 'usr.last_login';
	const USERS_TBL_STSID_A = 'usr.status_id';
	const USERS_TBL_DATECRT_A = 'usr.date_created';
	const USERS_TBL_DATEUPD_A = 'usr.date_updated';
	const USERS_TBL_CRTBY_A = 'usr.created_by';
	const USERS_TBL_UPDBY_A = 'usr.updated_by';
}
