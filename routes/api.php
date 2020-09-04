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

Route::post('/payment/EntryTran.idPass', function () {
    // sleep(14);
    return 'AccessID=4bdef2f1c811e1d8f3895ac4b2e8fdd9&AccessPass=5225917879478d7c15364dee20d84322';
});

Route::post('/payment/ExecTran.idPass', function () {
    sleep(120);
    return 'ACS=0&OrderID=200903034615-001-00002976&Forward=2a99662&Method=1&PayTimes=&Approve=0337650&TranID=2009031509111111111111815783&TranDate=20200903154618&CheckString=7b6d735a296d798f94142aaa0ca1ccbb';
});

Route::get('/payment/ExecTran.idPass', function () {
    sleep(120);
    return 'ACS=0&OrderID=200903034615-001-00002976&Forward=2a99662&Method=1&PayTimes=&Approve=0337650&TranID=2009031509111111111111815783&TranDate=20200903154618&CheckString=7b6d735a296d798f94142aaa0ca1ccbb';
});
