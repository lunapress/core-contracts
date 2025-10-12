<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\FoundationContracts\Container\IContainerBuilder;
use LunaPress\FoundationContracts\Support\Activatable;
use LunaPress\FoundationContracts\Support\Deactivatable;
use LunaPress\FoundationContracts\Support\Bootable;
use LunaPress\FoundationContracts\Support\HasDi;

defined('ABSPATH') || exit;

interface IPlugin extends Activatable, Deactivatable, Bootable, HasDi
{
    public function setContainerBuilder(IContainerBuilder $builder): self;
    public function getPrefix(): string;
}
