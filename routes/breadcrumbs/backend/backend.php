<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});
Breadcrumbs::for('admin.files', function ($trail) {
    $trail->push('File', route('admin.files'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
