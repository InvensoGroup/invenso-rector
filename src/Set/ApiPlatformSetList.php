<?php

/**
 * Copyright (c) 2023 Invenso® - All Rights Reserved.
 * Contact: info@invenso.nl
 *
 * Permission to use, copy, modify, and distribute this software and its
 * documentation without a signed licensing agreement is prohibited.
 *
 * You should have received a copy of the license with this file.
 * If not, please write to: info@invenso.nl, or visit: https://www.invenso.nl
 *
 */

declare (strict_types=1);

namespace Invenso\Rector\Set;

use Rector\Set\Contract\SetListInterface;

/**
 * @api
 */
final class ApiPlatformSetList implements SetListInterface
{
    /**
     * @var string
     */
    public const ANNOTATIONS_TO_ATTRIBUTES = __DIR__ . '/../Config/Sets/api-platform-annotations-to-attributes.php';
}
