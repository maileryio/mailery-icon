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
     * @param array $options
     * @return string
     */
    public function menu(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function search(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function mailOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function bellOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function infoOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function settings(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function accountBox(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function logout(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function dotsHorizontal(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function dashboard(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function arrowRight(array $options = []): string;

}
