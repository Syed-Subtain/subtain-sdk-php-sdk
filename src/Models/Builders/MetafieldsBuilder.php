<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Metafields;
use AdvancedBillingLib\Models\MetafieldScope;
use Core\Utils\CoreHelper;

/**
 * Builder for model Metafields
 *
 * @see Metafields
 */
class MetafieldsBuilder
{
    /**
     * @var Metafields
     */
    private $instance;

    private function __construct(Metafields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new metafields Builder object.
     */
    public static function init(): self
    {
        return new self(new Metafields());
    }

    /**
     * Sets id field.
     */
    public function id(?float $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets scope field.
     */
    public function scope(?MetafieldScope $value): self
    {
        $this->instance->setScope($value);
        return $this;
    }

    /**
     * Sets input type field.
     */
    public function inputType(?string $value): self
    {
        $this->instance->setInputType($value);
        return $this;
    }

    /**
     * Sets enum field.
     */
    public function enum(?array $value): self
    {
        $this->instance->setEnum($value);
        return $this;
    }

    /**
     * Initializes a new metafields object.
     */
    public function build(): Metafields
    {
        return CoreHelper::clone($this->instance);
    }
}
