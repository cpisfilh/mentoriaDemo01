<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Area\Shapes\Circle;
use Area\Shapes\Rectangle;
use Area\Shapes\Square;


echo Circle::area(4);
echo "\n";
echo Rectangle::area(4,12);
echo "\n";
echo Square::area(4);
