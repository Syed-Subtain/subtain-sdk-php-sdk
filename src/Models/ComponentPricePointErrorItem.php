<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentPricePointErrorItem implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var float|null
     */
    private $pricePoint;

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?float
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?float $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Price Point.
     */
    public function getPricePoint(): ?float
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     */
    public function setPricePoint(?float $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->componentId)) {
            $json['component_id'] = $this->componentId;
        }
        if (isset($this->message)) {
            $json['message']      = $this->message;
        }
        if (isset($this->pricePoint)) {
            $json['price_point']  = $this->pricePoint;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
