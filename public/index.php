<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/api.php';

$klein->dispatch();

