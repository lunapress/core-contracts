<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support\WpFunction;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpFunctionArgsIFactory extends IFactory
{
    public function make(): IWpFunctionArgs;
}
