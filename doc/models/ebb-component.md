
# EBB Component

## Structure

`EBBComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | A name for this component that is suitable for showing customers and displaying on billing statements, ie. "Minutes". | getName(): string | setName(string name): void |
| `unitName` | `string` | Required | The name of the unit of measurement for the component. It should be singular since it will be automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on a subscription’s component line-item | getUnitName(): string | setUnitName(string unitName): void |
| `description` | `?string` | Optional | A description for the component that will be displayed to the user on the hosted signup page. | getDescription(): ?string | setDescription(?string description): void |
| `handle` | `?string` | Optional | A unique identifier for your use that can be used to retrieve this component is subsequent requests.  Must start with a letter or number and may only contain lowercase letters, numbers, or the characters '.', ':', '-', or '_'.<br>**Constraints**: *Pattern*: `^[a-z0-9][a-z0-9\-_:.]*$` | getHandle(): ?string | setHandle(?string handle): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `pricingScheme` | string([PricingScheme](../../doc/models/pricing-scheme.md)) | Required | This is a container for one-of cases. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket Rules](https://help.chargify.com/products/product-components.html#general-price-bracket-rules) for an overview of how price brackets work for different pricing schemes. | getPrices(): ?array | setPrices(?array prices): void |
| `upgradeCharge` | `?string` | Optional | - | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | `?string` | Optional | - | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `pricePoints` | [`?(ComponentPricePointItem[])`](../../doc/models/component-price-point-item.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `unitPrice` | string\|float\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `hideDateRangeOnInvoice` | `?bool` | Optional | (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range should show for the component on generated invoices. | getHideDateRangeOnInvoice(): ?bool | setHideDateRangeOnInvoice(?bool hideDateRangeOnInvoice): void |
| `priceInCents` | `?string` | Optional | deprecated May 2011 - use unit_price instead | getPriceInCents(): ?string | setPriceInCents(?string priceInCents): void |
| `eventBasedBillingMetricId` | `int` | Required | The ID of an event based billing metric that will be attached to this component. | getEventBasedBillingMetricId(): int | setEventBasedBillingMetricId(int eventBasedBillingMetricId): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "unit_name": "unit_name2",
  "description": "description0",
  "handle": "handle6",
  "taxable": false,
  "pricing_scheme": "tiered",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ],
  "upgrade_charge": "upgrade_charge2",
  "event_based_billing_metric_id": 190
}
```

