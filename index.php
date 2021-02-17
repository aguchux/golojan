<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/', function () {

    $Template = new Apps\Template;

    $Template->addheader("layouts.themes.benito.h1.header");
    $Template->addfooter("layouts.themes.benito.h1.footer");
    
    $Template->theme("benito");
    $Template->addpart("menu");
    $Template->addpart("categories");
    $Template->addpart("sliders", ["slidetitle" => "We are a", "slidedescription" => "that create high quality Magent"]);

    

    $Template->assign("title", "Golojan | Shop");

    $Template->render("home");
}, 'GET');
//Home page//


$Route->add('/{shop}', function ($shop) {
    $Core = new Apps\Core;
    $Template = new Apps\Template("/auth/login");
    $Template->addheader("layouts.auth.header");
    $Template->addfooter("layouts.auth.footer");
    $Template->assign("title", "Golojan | Back Office");
    $accid = $Template->storage("accid");
    $root = $Core->UserInfo($accid, "root");
    $Core->Relocation($accid);
    $Template->assign("menukey", "dashboard");
    $Template->render("dashboard.{$root}.dashboard");
}, 'GET');


require_once DOT . "/_public/shop.php";



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
