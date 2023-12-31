<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Allocation;
use AdvancedBillingLib\Models\AllocationPayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model Allocation
 *
 * @see Allocation
 */
class AllocationBuilder
{
    /**
     * @var Allocation
     */
    private $instance;

    private function __construct(Allocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation Builder object.
     */
    public static function init(): self
    {
        return new self(new Allocation());
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets previous quantity field.
     */
    public function previousQuantity(?int $value): self
    {
        $this->instance->setPreviousQuantity($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
    }

    /**
     * Sets timestamp field.
     */
    public function timestamp(?string $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
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
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets price point name field.
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Sets price point handle field.
     */
    public function pricePointHandle(?string $value): self
    {
        $this->instance->setPricePointHandle($value);
        return $this;
    }

    /**
     * Sets previous price point id field.
     */
    public function previousPricePointId(?int $value): self
    {
        $this->instance->setPreviousPricePointId($value);
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
     * Sets payment field.
     */
    public function payment(?AllocationPayment $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Unsets payment field.
     */
    public function unsetPayment(): self
    {
        $this->instance->unsetPayment();
        return $this;
    }

    /**
     * Initializes a new allocation object.
     */
    public function build(): Allocation
    {
        return CoreHelper::clone($this->instance);
    }
}
