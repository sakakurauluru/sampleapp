<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 取引登録
Route::post('/payment/EntryTran.idPass', function () {
    sleep(28);
    return 'AccessID=4bdef2f1c811e1d8f3895ac4b2e8fdd9&AccessPass=5225917879478d7c15364dee20d84322';
});

// カード検索
Route::post('/payment/SearchCard.idPass', function () {
    sleep(28);
    return 'CardSeq=0&DefaultFlag=0&CardName=&CardNo=*************881&Expire=3005&HolderName=MARUKO SHUFU&DeleteFlag=0';
});

// 決済登録
Route::post('/payment/ExecTran.idPass', function () {
    sleep(88);
    return 'ACS=0&OrderID=200903034615-001-00002976&Forward=2a99662&Method=1&PayTimes=&Approve=0337650&TranID=2009031509111111111111815783&TranDate=20200903154618&CheckString=7b6d735a296d798f94142aaa0ca1ccbb';
});

// 会員検索
Route::post('/payment/SearchMember.idPass', function () {
    sleep(40);
    return '';
});

