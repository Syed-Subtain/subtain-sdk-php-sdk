<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocateComponents;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocateComponents
 *
 * @see AllocateComponents
 */
class AllocateComponentsBuilder
{
    /**
     * @var AllocateComponents
     */
    private $instance;

    private function __construct(AllocateComponents $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocate components Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocateComponents());
    }

    /**
     * Sets proration upgrade scheme field.
     */
    public function prorationUpgradeScheme(?string $value): self
    {
        $this->instance->setProrationUpgradeScheme($value);
        return $this;
    }

    /**
     * Sets proration downgrade scheme field.
     */
    public function prorationDowngradeScheme(?string $value): self
    {
        $this->instance->setProrationDowngradeScheme($value);
        return $this;
    }

    /**
     * Sets allocations field.
     */
    public function allocations(?array $value): self
    {
        $this->instance->setAllocations($value);
        return $this;
    }

    /**
     * Sets accrue charge field.
     */
    public function accrueCharge(?bool $value): self
    {
        $this->instance->setAccrueCharge($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     */
    public function upgradeCharge(?string $value): self
    {
        $this->instance->setUpgradeCharge($value);
        return $this;
    }

    /**
     * Sets downgrade credit field.
     */
    public function downgradeCredit(?string $value): self
    {
        $this->instance->setDowngradeCredit($value);
        return $this;
    }

    /**
     * Sets payment collection method field.
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Initializes a new allocate components object.
     */
    public function build(): AllocateComponents
    {
        return CoreHelper::clone($this->instance);
    }
}
