<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Mission
    Route::post('missions/media', 'MissionApiController@storeMedia')->name('missions.storeMedia');
    Route::apiResource('missions', 'MissionApiController');
});
