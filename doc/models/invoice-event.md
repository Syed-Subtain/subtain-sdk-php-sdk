
# Invoice Event

## Structure

`InvoiceEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `eventType` | [`?string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Optional | Invoice Event Type | getEventType(): ?string | setEventType(?string eventType): void |
| `eventData` | [ApplyCreditNoteEventData](../../doc/models/apply-credit-note-event-data.md)\|[ApplyDebitNoteEventData](../../doc/models/apply-debit-note-event-data.md)\|[ApplyPaymentEventData](../../doc/models/apply-payment-event-data.md)\|[ChangeInvoiceCollectionMethodEventData](../../doc/models/change-invoice-collection-method-event-data.md)\|[IssueInvoiceEventData](../../doc/models/issue-invoice-event-data.md)\|[RefundInvoice](../../doc/models/refund-invoice.md)EventData\|[RemovePaymentEventData](../../doc/models/remove-payment-event-data.md)\|[VoidInvoiceEventData](../../doc/models/void-invoice-event-data.md)\|[VoidInvoiceEventData](../../doc/models/void-invoice-event-data.md)1\|null | Optional | This is a container for any-of cases. | getEventData(): | setEventData( eventData): void |
| `timestamp` | `?string` | Optional | - | getTimestamp(): ?string | setTimestamp(?string timestamp): void |
| `invoice` | [`?Invoice`](../../doc/models/invoice.md) | Optional | - | getInvoice(): ?Invoice | setInvoice(?Invoice invoice): void |

## Example (as JSON)

```json
{
  "id": 78,
  "event_type": "remove_payment",
  "event_data": {
    "uid": "uid2",
    "credit_note_number": "credit_note_number4",
    "credit_note_uid": "credit_note_uid4",
    "original_amount": "original_amount6",
    "applied_amount": "applied_amount6"
  },
  "timestamp": "timestamp8",
  "invoice": {
    "id": 166,
    "uid": "uid6",
    "site_id": 92,
    "customer_id": 204,
    "subscription_id": 20
  }
}
```

