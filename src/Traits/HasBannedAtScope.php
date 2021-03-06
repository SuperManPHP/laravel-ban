<?php

/*
 * This file is part of Laravel Ban.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Laravel\Ban\Traits;

use Cog\Laravel\Ban\Scopes\BannedAtScope;

trait HasBannedAtScope
{
    /**
     * Boot the HasBannedAtScope trait for a model.
     *
     * @return void
     */
    public static function bootHasBannedAtScope(): void
    {
        static::addGlobalScope(new BannedAtScope());
    }
}
