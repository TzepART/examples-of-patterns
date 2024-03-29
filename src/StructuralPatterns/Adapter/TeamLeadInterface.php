<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * For example create several types of bears
 *
 * Interface BearInterface
 * @package Patterns\StructuralPatterns\Adapter
 */
interface TeamLeadInterface
{
    public function lead(): void;
    public function plan(): void;
}
