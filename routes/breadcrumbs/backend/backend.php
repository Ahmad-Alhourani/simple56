<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Test2_start
Breadcrumbs::register('admin.test2.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.test2s.title'),
        route('admin.test2.index')
    );
});

Breadcrumbs::register('admin.test2.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.test2.index');
    $breadcrumbs->push(
        __('labels.backend.test2s.create'),
        route('admin.test2.create')
    );
});

Breadcrumbs::register('admin.test2.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test2.index');
    $breadcrumbs->push(
        __('menus.backend.test2s.view'),
        route('admin.test2.show', $id)
    );
});

Breadcrumbs::register('admin.test2.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test2.index');
    $breadcrumbs->push(
        __('menus.backend.test2s.edit'),
        route('admin.test2.edit', $id)
    );
});
//end_Test2_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
