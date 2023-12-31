
# Price Point

## Structure

`PricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | `?string` | Optional | - | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site.<br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `overagePricing` | [`?OveragePricing`](../../doc/models/overage-pricing.md) | Optional | - | getOveragePricing(): ?OveragePricing | setOveragePricing(?OveragePricing overagePricing): void |
| `rolloverPrepaidRemainder` | `?bool` | Optional | Boolean which controls whether or not remaining units should be rolled over to the next period | getRolloverPrepaidRemainder(): ?bool | setRolloverPrepaidRemainder(?bool rolloverPrepaidRemainder): void |
| `renewPrepaidAllocation` | `?bool` | Optional | Boolean which controls whether or not the allocated quantity should be renewed at the beginning of each period | getRenewPrepaidAllocation(): ?bool | setRenewPrepaidAllocation(?bool renewPrepaidAllocation): void |
| `expirationInterval` | `?float` | Optional | (only for prepaid usage components where rollover_prepaid_remainder is true) The number of `expiration_interval_unit`s after which rollover amounts should expire | getExpirationInterval(): ?float | setExpirationInterval(?float expirationInterval): void |
| `expirationIntervalUnit` | string([IntervalUnit](../../doc/models/interval-unit.md))\|null | Optional | This is a container for one-of cases. | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example (as JSON)

```json
{
  "use_site_exchange_rate": true,
  "name": "name0",
  "handle": "handle6",
  "pricing_scheme": "pricing_scheme8",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ]
}
```

