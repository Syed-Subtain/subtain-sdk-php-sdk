
# Update Endpoint Request

Used to Create or Update Endpoint

## Structure

`UpdateEndpointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | [`UpdateEndpoint`](../../doc/models/update-endpoint.md) | Required | Used to Create or Update Endpoint | getEndpoint(): UpdateEndpoint | setEndpoint(UpdateEndpoint endpoint): void |

## Example (as JSON)

```json
{
  "endpoint": {
    "url": "url2",
    "webhook_subscriptions": [
      "dunning_step_reached"
    ]
  }
}
```

