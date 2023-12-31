
# Update Component Price Point Request

## Structure

`UpdateComponentPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`?UpdateComponentPricePoint`](../../doc/models/update-component-price-point.md) | Optional | - | getPricePoint(): ?UpdateComponentPricePoint | setPricePoint(?UpdateComponentPricePoint pricePoint): void |

## Example (as JSON)

```json
{
  "price_point": {
    "name": "name0",
    "prices": [
      {
        "id": 18,
        "ending_quantity": 38,
        "unit_price": 88,
        "_destroy": "_destroy4",
        "starting_quantity": 64
      },
      {
        "id": 18,
        "ending_quantity": 38,
        "unit_price": 88,
        "_destroy": "_destroy4",
        "starting_quantity": 64
      },
      {
        "id": 18,
        "ending_quantity": 38,
        "unit_price": 88,
        "_destroy": "_destroy4",
        "starting_quantity": 64
      }
    ]
  }
}
```

