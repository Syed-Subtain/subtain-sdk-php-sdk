
# Subscription Component

## Structure

`SubscriptionComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `unitName` | `?string` | Optional | - | getUnitName(): ?string | setUnitName(?string unitName): void |
| `enabled` | `?bool` | Optional | (for on/off components) indicates if the component is enabled for the subscription | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `unitBalance` | `?int` | Optional | - | getUnitBalance(): ?int | setUnitBalance(?int unitBalance): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `allocatedQuantity` | `?int` | Optional | For Quantity-based components: The current allocation for the component on the given subscription. For On/Off components: Use 1 for on. Use 0 for off. | getAllocatedQuantity(): ?int | setAllocatedQuantity(?int allocatedQuantity): void |
| `pricingScheme` | `?string` | Optional | - | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `upgradeCharge` | `?string` | Optional | - | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | `?string` | Optional | - | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `archivedAt` | `?string` | Optional | - | getArchivedAt(): ?string | setArchivedAt(?string archivedAt): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `pricePointHandle` | `?string` | Optional | - | getPricePointHandle(): ?string | setPricePointHandle(?string pricePointHandle): void |
| `pricePointType` | string([PricePointType](../../doc/models/price-point-type.md))\|null | Optional | This is a container for one-of cases. | getPricePointType(): ?string | setPricePointType(?string pricePointType): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `productFamilyId` | `?int` | Optional | - | getProductFamilyId(): ?int | setProductFamilyId(?int productFamilyId): void |
| `productFamilyHandle` | `?string` | Optional | - | getProductFamilyHandle(): ?string | setProductFamilyHandle(?string productFamilyHandle): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `allowFractionalQuantities` | `?bool` | Optional | - | getAllowFractionalQuantities(): ?bool | setAllowFractionalQuantities(?bool allowFractionalQuantities): void |
| `subscription` | [`?SubscriptionComponentSubscription`](../../doc/models/subscription-component-subscription.md) | Optional | An optional object, will be returned if provided `include=subscription` query param. | getSubscription(): ?SubscriptionComponentSubscription | setSubscription(?SubscriptionComponentSubscription subscription): void |
| `displayOnHostedPage` | `?bool` | Optional | - | getDisplayOnHostedPage(): ?bool | setDisplayOnHostedPage(?bool displayOnHostedPage): void |

## Example (as JSON)

```json
{
  "id": 20,
  "name": "name8",
  "kind": "kind6",
  "unit_name": "unit_name0",
  "enabled": false
}
```

