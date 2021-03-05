<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/', function () {

    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $accid = $Template->shopaccid;
    $Store = $Core->StoreInfo($accid);
    $Template->theme($Store->theme);
    $Template->addheader("layouts.themes.benito.header");
    $Template->addfooter("layouts.themes.benito.footer");
    $Template->assign("title", "Buy, Sell & Earn Online | Golojan Online Shopping");
    $Template->addpart("Category_1", "Category_1");
    $Template->addpart("Category_2", "Category_2");
    $Template->addpart("banner1", "add_banners_3_col");
    $Template->addpart("Category_3", "Category_3");
    $Template->addpart("Category_4", "Category_4");
    $Template->addpart("Category_5", "Category_5");
    $Template->addpart("Category_6", "Category_6");
    $Template->addpart("Category_7", "Category_7");

    $Template->render("default");

}, 'GET');
//Home page//




require_once DOT . "/_public/products.php";




$Route->add('/device/connection', function () {
    $Device = new Apps\Device;
    $Dinfo = array();
    $ip = $Device->get_ip();
    $is_ip = filter_var($ip, FILTER_VALIDATE_IP);
    if ($is_ip) {
        $Dinfo['connected'] = 1;
        $Dinfo['os'] = $Device->get_os();
        $Dinfo['browser'] = $Device->get_browser();
        $Dinfo['device'] = $Device->get_device();
        $Dinfo['ip'] = $Device->get_ip();
    } else {
        $Dinfo['connected'] = 0;
    }
    $Dinfo = json_encode($Dinfo);
    echo $Dinfo;
}, 'GET');


//Logout Sessions//
$Route->add(
    '/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//


$Route->run('/');
