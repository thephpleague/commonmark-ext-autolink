<?php

/*
 * This file is part of the league/commonmark-ext-autolink package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\Autolink;

use League\CommonMark\ConfigurableEnvironmentInterface;
use League\CommonMark\Extension\Autolink\AutolinkExtension as CoreExtension;
use League\CommonMark\Extension\ExtensionInterface;

/**
 * @deprecated The league/commonmark-ext-autolink extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class AutolinkExtension implements ExtensionInterface
{
    private $coreExtension;

    public function __construct()
    {
        $this->coreExtension = new CoreExtension();
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreExtension::class), E_USER_DEPRECATED);
    }

    public function register(ConfigurableEnvironmentInterface $environment)
    {
        $this->coreExtension->register($environment);
    }
}
