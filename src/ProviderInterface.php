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
    public function users(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function dashboard(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
//    public function menu(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function search(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function plus(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function plusCircle(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function plusCircleOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function heartOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function checkCircle(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function checkCircleOutline(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function eye(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function pencil(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function delete(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function brand(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function chevronDown(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function chevronRight(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function chevronLeft(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function settings(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function accountMultiple(array $options = []): string;

    /**
     * @param array $options
     * @return string
     */
    public function accountMultipleOutline(array $options = []): string;
}
