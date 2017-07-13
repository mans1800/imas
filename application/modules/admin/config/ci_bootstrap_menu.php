<?php

// modify by aig

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | CI Bootstrap 3 Configuration
  | -------------------------------------------------------------------------
  | This file lets you define default values to be passed into views
  | when calling MY_Controller's render() function.
  |
  | See example and detailed explanation from:
  | 	/application/config/ci_bootstrap_example.php
 */

$config['ci_bootstrap_menu'] = array(
    'menu' => array(
        'home' => array(
            'name' => 'Home',
            'url' => '',
            'icon' => 'fa fa-cube',
        ),
        'panel' => array(
            'name' => 'Employee',
            'url' => 'panel',
            'icon' => 'fa fa-cube',
            'children' => array(
                'Data' => 'panel/admin_user',
                'Add Data' => 'panel/admin_user_create',
                'Admin User Groups' => 'panel/admin_user_group',
            )
        ),
    )
);

   


$config['ci_bootstrap_menu']['menu']['Account'] = array(
    'name' => 'Account',
    'url' => 'typeaccount',
    'icon' => 'fa fa-cube',
    'children' => array(
        'Create Account' => 'account',
        'Type' => 'typeaccount',
    )
);


$config['ci_bootstrap_menu']['menu']['Master Data'] = array(
    'name' => 'Master Data',
    'url' => 'supplier',
    'icon' => 'fa fa-cube',
    'children' => array(
        'Customer' => 'customer',
        'Supplier' => 'supplier',
    )
);





//$config['ci_bootstrap_menu']['menu']['สำรองข้อมูล'] = array(
//    'name' => 'สำรองข้อมูล',    
//    'url' => 'util/list_db',
//    'icon' => 'fa fa-cogs',
//);


$config['ci_bootstrap_menu']['menu']['ทะเบียนจ่าย'] = array(
    'name' => 'ทะเบียนจ่าย',
    'url' => 'pv',
    'icon' => 'fa fa-cube',
        'children' => array(
        'Invoice Data' => 'pvinvoice',
        'Payment Voucher' => 'pv',
    )
);











$config['ci_bootstrap_menu']['menu']['Sign Out'] = array(
    'name' => 'Sign Out',
    'url' => 'panel/logout',
    'icon' => 'fa fa-sign-out',
);



