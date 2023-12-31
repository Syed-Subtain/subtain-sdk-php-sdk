
# Component Price Point

## Structure

`ComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `type` | [`?string(PricePointType)`](../../doc/models/price-point-type.md) | Optional | Price point type. We expose the following types:<br><br>1. **default**: a price point that is marked as a default price for a certain product.<br>2. **custom**: a custom price point.<br>3. **catalog**: a price point that is **not** marked as a default price for a certain product and is **not** a custom one. | getType(): ?string | setType(?string type): void |
| `default` | `?bool` | Optional | Note: Refer to type attribute instead | getDefault(): ?bool | setDefault(?bool default): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `pricingScheme` | `?string` | Optional | - | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `archivedAt` | `?string` | Optional | - | getArchivedAt(): ?string | setArchivedAt(?string archivedAt): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `prices` | [`?(ComponentPricePointPrice[])`](../../doc/models/component-price-point-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site.<br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `subscriptionId` | `?int` | Optional | (only used for Custom Pricing - ie. when the price point's type is `custom`) The id of the subscription that the custom price point is for. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `taxIncluded` | `?bool` | Optional | - | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |

## Example (as JSON)

```json
{
  "use_site_exchange_rate": true,
  "id": 190,
  "type": "custom",
  "default": false,
  "name": "name2",
  "pricing_scheme": "pricing_scheme6"
}
```

