<?php

namespace AppBundle\Constant;

class DatabaseConstant {
    // Cycles Table
    const CYCLES_TBL_NAME = 'cycles';
    const CYCLES_TBL_ALIAS = 'cyc';
    const CYCLES_TBL_ID = 'cycle_id';
    const CYCLES_TBL_PENID = 'pen_id';
    const CYCLES_TBL_TENTID = 'tenant_id';
    const CYCLES_TBL_CYLCNT = 'cycle_count';
    const CYCLES_TBL_HDCNT = 'head_count';
    const CYCLES_TBL_STSID = 'status_id';
    const CYCLES_TBL_STRTDATE = 'start_date';
    const CYCLES_TBL_ENDDATE = 'end_date';
    const CYCLES_TBL_DATECRT = 'date_created';
    const CYCLES_TBL_DATEUPD = 'date_updated';
    const CYCLES_TBL_CRTBY = 'created_by';
    const CYCLES_TBL_UPDBY = 'updated_by';
    const CYCLES_TBL_ID_A = 'cyc.cycle_id';
    const CYCLES_TBL_PENID_A = 'cyc.pen_id';
    const CYCLES_TBL_TENTID_A = 'cyc.tenant_id';
    const CYCLES_TBL_CYLCNT_A = 'cyc.cycle_count';
    const CYCLES_TBL_HDCNT_A = 'cyc.head_count';
    const CYCLES_TBL_STSID_A = 'cyc.status_id';
    const CYCLES_TBL_STRTDATE_A = 'cyc.start_date';
    const CYCLES_TBL_ENDDATE_A = 'cyc.end_date';
    const CYCLES_TBL_DATECRT_A = 'cyc.date_created';
    const CYCLES_TBL_DATEUPD_A = 'cyc.date_updated';
    const CYCLES_TBL_CRTBY_A = 'cyc.created_by';
    const CYCLES_TBL_UPDBY_A = 'cyc.updated_by';

    // Locations Table
    const LOCATIONS_TBL_NAME = 'locations';
    const LOCATIONS_TBL_ALIAS = 'lct';
    const LOCATIONS_TBL_ID = 'location_id';
    const LOCATIONS_TBL_LCTNAME= 'location_name';
    const LOCATIONS_TBL_LCTCODE = 'location_code';
    const LOCATIONS_TBL_ID_A = 'lct.location_id';
    const LOCATIONS_TBL_LCTNAME_A= 'lct.location_name';
    const LOCATIONS_TBL_LCTCODE_A = 'lct.location_code';

    // Pens Table
    const PENS_TBL_NAME = 'pens';
    const PENS_TBL_ALIAS = 'pen';
    const PENS_TBL_ID = 'pen_id';
    const PENS_TBL_PENCODE = 'pen_code';
    const PENS_TBL_DESC = 'description';
    const PENS_TBL_LOCID = 'location_id';
    const PENS_TBL_CAP = 'capacity';
    const PENS_TBL_DATECRT = 'date_created';
    const PENS_TBL_DATEUPD = 'date_updated';
    const PENS_TBL_CRTBY = 'created_by';
    const PENS_TBL_UPDBY = 'updated_by';
    const PENS_TBL_ID_A = 'pen.pen_id';
    const PENS_TBL_PENCODE_A = 'pen.pen_code';
    const PENS_TBL_DESC_A = 'pen.description';
    const PENS_TBL_LOCID_A = 'pen.location_id';
    const PENS_TBL_CAP_A = 'pen.capacity';
    const PENS_TBL_DATECRT_A = 'pen.date_created';
    const PENS_TBL_DATEUPD_A = 'pen.date_updated';
    const PENS_TBL_CRTBY_A = 'pen.created_by';
    const PENS_TBL_UPDBY_A = 'pen.updated_by';

    // Statuses Table
    const STATUSES_TBL_NAME = 'statuses';
    const STATUSES_TBL_ALIAS = 'sts';
    const STATUSES_TBL_ID = 'status_id';
    const STATUSES_TBL_STSNAME= 'status_name';
    const STATUSES_TBL_STSCODE = 'status_code';
    const STATUSES_TBL_ID_A = 'sts.status_id';
    const STATUSES_TBL_STSNAME_A= 'sts.status_name';
    const STATUSES_TBL_STSCODE_A = 'sts.status_code';

    // Tenants Table
    const TENANTS_TBL_NAME = 'tenants';
    const TENANTS_TBL_ALIAS = 'tnt';
    const TENANTS_TBL_ID = 'tenant_id';
    const TENANTS_TBL_FIRSTNAME = 'first_name';
    const TENANTS_TBL_LASTNAME = 'last_name';
    const TENANTS_TBL_ADDRESS = 'address';
    const TENANTS_TBL_PHONE = 'phone_number';
    const TENANTS_TBL_EMAIL = 'email_address';
    const TENANTS_TBL_STSID = 'status_id';
    const TENANTS_TBL_DATECRT = 'date_created';
    const TENANTS_TBL_DATEUPD = 'date_updated';
    const TENANTS_TBL_CRTBY = 'created_by';
    const TENANTS_TBL_UPDBY = 'updated_by';
    const TENANTS_TBL_ID_A = 'tnt.tenant_id';
    const TENANTS_TBL_FIRSTNAME_A = 'tnt.first_name';
    const TENANTS_TBL_LASTNAME_A = 'tnt.last_name';
    const TENANTS_TBL_ADDRESS_A = 'tnt.address';
    const TENANTS_TBL_PHONE_A = 'tnt.phone_number';
    const TENANTS_TBL_EMAIL_A = 'tnt.email_address';
    const TENANTS_TBL_STSID_A = 'tnt.status_id';
    const TENANTS_TBL_DATECRT_A = 'tnt.date_created';
    const TENANTS_TBL_DATEUPD_A = 'tnt.date_updated';
    const TENANTS_TBL_CRTBY_A = 'tnt.created_by';
    const TENANTS_TBL_UPDBY_A = 'tnt.updated_by';

    // Users Table
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
