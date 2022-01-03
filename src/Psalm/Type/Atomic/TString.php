<?php

namespace Psalm\Type\Atomic;

/**
 * Denotes the `string` type, where the exact value is unknown.
 */
class TString extends Scalar
{
    /**
     * @param  array<lowercase-string, string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $analysis_php_version_id
    ): ?string {
        return $analysis_php_version_id >= 70000 ? 'string' : null;
    }

    public function __toString(): string
    {
        return 'string';
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'string';
    }
}
