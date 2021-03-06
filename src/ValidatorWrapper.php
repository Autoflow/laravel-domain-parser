<?php

/**
 * Laravel Domain Parser Package (https://github.com/bakame-php/laravel-domain-parser).
 *
 * (c) Ignace Nyamagana Butera <nyamsprod@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bakame\Laravel\Pdp;

final class ValidatorWrapper
{
    /**
     * @var callable
     */
    private $callable;

    /**
     * New instance.
     *
     * @param callable $callable a callable that takes one argument
     *                           and returns true if the argument is valid
     *                           or false otherwise.
     */
    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }

    /**
     * @param mixed $value evaluate using the callable argument
     *                     and Laravel Validator::extend method
     */
    public function __invoke(string $attribute, $value, array $params = [], $validator): bool
    {
        return ($this->callable)($value);
    }
}
