<?php

/**
 * Test2 Management
 * All route names are prefixed with 'admin.test2'.
 */
Route::group(
    [
        'namespace' => 'Test2',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Test2 CRUD
         */
        Route::resource('test2', 'Test2Controller');
    }
);
