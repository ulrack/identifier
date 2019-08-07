<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Identifier\Common;

interface IdGeneratorInterface
{
    /**
     * Generates an ID.
     *
     * @return string
     */
    public function generate(): string;
}
