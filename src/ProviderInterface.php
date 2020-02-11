<?php

declare(strict_types=1);

/**
 * Mailery Icon module
 * @link      https://github.com/maileryio/mailery-icon
 * @package   Mailery\Icon
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

namespace Mailery\Icon;

interface ProviderInterface
{
    /**
     * @param string $name
     * @param array $options
     * @return string
     */
    public function show(string $name, array $options = []): string;
}
