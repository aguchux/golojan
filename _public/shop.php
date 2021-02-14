<?php



$Route->add('/{accid}', function ($accid) {
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
