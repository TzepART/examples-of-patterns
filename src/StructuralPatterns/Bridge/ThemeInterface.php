<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Interface ThemeInterface
 * @package Patterns\StructuralPatterns\Bridge
 */
interface ThemeInterface
{
    public function getColor(): string;
}
