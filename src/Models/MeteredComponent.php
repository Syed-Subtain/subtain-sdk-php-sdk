<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class MeteredComponent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $unitName;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var Price[]|null
     */
    private $prices;

    /**
     * @var string|null
     */
    private $upgradeCharge;

    /**
     * @var string|null
     */
    private $downgradeCredit;

    /**
     * @var ComponentPricePointItem[]|null
     */
    private $pricePoints;

    /**
     * @var string|float|null
     */
    private $unitPrice;

    /**
     * @var string|null
     */
    private $taxCode;

    /**
     * @var bool|null
     */
    private $hideDateRangeOnInvoice;

    /**
     * @var string|null
     */
    private $priceInCents;

    /**
     * @var bool|null
     */
    private $displayOnHostedPage;

    /**
     * @var bool|null
     */
    private $allowFractionalQuantities;

    /**
     * @var int[]|null
     */
    private $publicSignupPageIds;

    /**
     * @param string $name
     * @param string $unitName
     * @param string $pricingScheme
     */
    public function __construct(string $name, string $unitName, string $pricingScheme)
    {
        $this->name = $name;
        $this->unitName = $unitName;
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Name.
     * A name for this component that is suitable for showing customers and displaying on billing
     * statements, ie. "Minutes".
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * A name for this component that is suitable for showing customers and displaying on billing
     * statements, ie. "Minutes".
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Unit Name.
     * The name of the unit of measurement for the component. It should be singular since it will be
     * automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on
     * a subscription’s component line-item
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     * The name of the unit of measurement for the component. It should be singular since it will be
     * automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on
     * a subscription’s component line-item
     *
     * @required
     * @maps unit_name
     */
    public function setUnitName(string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * Returns Description.
     * A description for the component that will be displayed to the user on the hosted signup page.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * A description for the component that will be displayed to the user on the hosted signup page.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Handle.
     * A unique identifier for your use that can be used to retrieve this component is subsequent requests.
     * Must start with a letter or number and may only contain lowercase letters, numbers, or the
     * characters '.', ':', '-', or '_'.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * A unique identifier for your use that can be used to retrieve this component is subsequent requests.
     * Must start with a letter or number and may only contain lowercase letters, numbers, or the
     * characters '.', ':', '-', or '_'.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Taxable.
     * Boolean flag describing whether a component is taxable or not.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     * Boolean flag describing whether a component is taxable or not.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @required
     * @maps pricing_scheme
     * @mapsBy oneOf(PricingScheme)
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue PricingScheme
     */
    public function setPricingScheme(string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     * (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket
     * Rules](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405020625677#price-bracket-rules) for
     * an overview of how price brackets work for different pricing schemes.
     *
     * @return Price[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket
     * Rules](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405020625677#price-bracket-rules) for
     * an overview of how price brackets work for different pricing schemes.
     *
     * @maps prices
     *
     * @param Price[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Returns Upgrade Charge.
     */
    public function getUpgradeCharge(): ?string
    {
        return $this->upgradeCharge;
    }

    /**
     * Sets Upgrade Charge.
     *
     * @maps upgrade_charge
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge = $upgradeCharge;
    }

    /**
     * Returns Downgrade Credit.
     */
    public function getDowngradeCredit(): ?string
    {
        return $this->downgradeCredit;
    }

    /**
     * Sets Downgrade Credit.
     *
     * @maps downgrade_credit
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit = $downgradeCredit;
    }

    /**
     * Returns Price Points.
     *
     * @return ComponentPricePointItem[]|null
     */
    public function getPricePoints(): ?array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     *
     * @maps price_points
     *
     * @param ComponentPricePointItem[]|null $pricePoints
     */
    public function setPricePoints(?array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. For On/Off
     * Components, this is the amount that the customer will be charged when they turn the component on for
     * the subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. For On/Off
     * Components, this is the amount that the customer will be charged when they turn the component on for
     * the subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @maps unit_price
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode = $taxCode;
    }

    /**
     * Returns Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     */
    public function getHideDateRangeOnInvoice(): ?bool
    {
        return $this->hideDateRangeOnInvoice;
    }

    /**
     * Sets Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     *
     * @maps hide_date_range_on_invoice
     */
    public function setHideDateRangeOnInvoice(?bool $hideDateRangeOnInvoice): void
    {
        $this->hideDateRangeOnInvoice = $hideDateRangeOnInvoice;
    }

    /**
     * Returns Price in Cents.
     * deprecated May 2011 - use unit_price instead
     */
    public function getPriceInCents(): ?string
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * deprecated May 2011 - use unit_price instead
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?string $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Display on Hosted Page.
     */
    public function getDisplayOnHostedPage(): ?bool
    {
        return $this->displayOnHostedPage;
    }

    /**
     * Sets Display on Hosted Page.
     *
     * @maps display_on_hosted_page
     */
    public function setDisplayOnHostedPage(?bool $displayOnHostedPage): void
    {
        $this->displayOnHostedPage = $displayOnHostedPage;
    }

    /**
     * Returns Allow Fractional Quantities.
     */
    public function getAllowFractionalQuantities(): ?bool
    {
        return $this->allowFractionalQuantities;
    }

    /**
     * Sets Allow Fractional Quantities.
     *
     * @maps allow_fractional_quantities
     */
    public function setAllowFractionalQuantities(?bool $allowFractionalQuantities): void
    {
        $this->allowFractionalQuantities = $allowFractionalQuantities;
    }

    /**
     * Returns Public Signup Page Ids.
     *
     * @return int[]|null
     */
    public function getPublicSignupPageIds(): ?array
    {
        return $this->publicSignupPageIds;
    }

    /**
     * Sets Public Signup Page Ids.
     *
     * @maps public_signup_page_ids
     *
     * @param int[]|null $publicSignupPageIds
     */
    public function setPublicSignupPageIds(?array $publicSignupPageIds): void
    {
        $this->publicSignupPageIds = $publicSignupPageIds;
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
        $json['name']                            = $this->name;
        $json['unit_name']                       = $this->unitName;
        if (isset($this->description)) {
            $json['description']                 = $this->description;
        }
        if (isset($this->handle)) {
            $json['handle']                      = $this->handle;
        }
        if (isset($this->taxable)) {
            $json['taxable']                     = $this->taxable;
        }
        $json['pricing_scheme']                  =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->pricingScheme,
                'oneOf(PricingScheme)',
                [
                    '\AdvancedBillingLib\Models\PricingScheme::checkValue PricingScheme'
                ]
            );
        if (isset($this->prices)) {
            $json['prices']                      = $this->prices;
        }
        if (isset($this->upgradeCharge)) {
            $json['upgrade_charge']              = $this->upgradeCharge;
        }
        if (isset($this->downgradeCredit)) {
            $json['downgrade_credit']            = $this->downgradeCredit;
        }
        if (isset($this->pricePoints)) {
            $json['price_points']                = $this->pricePoints;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']                  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitPrice,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->taxCode)) {
            $json['tax_code']                    = $this->taxCode;
        }
        if (isset($this->hideDateRangeOnInvoice)) {
            $json['hide_date_range_on_invoice']  = $this->hideDateRangeOnInvoice;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']              = $this->priceInCents;
        }
        if (isset($this->displayOnHostedPage)) {
            $json['display_on_hosted_page']      = $this->displayOnHostedPage;
        }
        if (isset($this->allowFractionalQuantities)) {
            $json['allow_fractional_quantities'] = $this->allowFractionalQuantities;
        }
        if (isset($this->publicSignupPageIds)) {
            $json['public_signup_page_ids']      = $this->publicSignupPageIds;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
