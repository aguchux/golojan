<?php




$Route->add('/product/{product}/{slug}', function ($product,$slug) {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $accid = $Template->shopaccid;
    $Store = $Core->StoreInfo($accid);
    $Template->theme($Store->theme);

    $ProductInfo =  $Core->ProductInfo($product);
    $Template->assign("ProductInfo", $ProductInfo);
    $Template->assign("ProductFeatures", $Core->ListProductFeatures($ProductInfo->id));

    $Photos_1 = $Photos_2 = json_decode($ProductInfo->photos);

    $Template->assign("Photos_1", $Photos_1);
    $Template->assign("Photos_2", $Photos_2);

    $Template->assign("MainCatInfo", $Core->ProductInfo($ProductInfo->maincategory));
    $Template->assign("SubCatInfo", $Core->ProductInfo($ProductInfo->subcategory));
    $Template->assign("CatInfo", $Core->ProductInfo($ProductInfo->category));

    $Template->addheader("layouts.themes.benito.header");
    $Template->addfooter("layouts.themes.benito.footer");

    $Template->assign("title", "{$ProductInfo->name} | Golojan Online");

    $Template->assign("menukey", "product");
    $Template->render("product-page");

}, 'GET');
