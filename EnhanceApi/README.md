###About
This module registers an extension attribute to be able to set from an api call or even programmatically use_default checkbox for product attributes.

###Installation
Module Namespace `W2/EnhanceApi`
```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
```

###Usage
`PUT Request https://{magento_base_url}/rest/{store_view_code}/V1/products/test-sku`

This will update or create a test product for selected store view with name and tax_class_id use default checkbox checked.
```
{
  "product": {
    "sku": "test-sku",
    "name": "Product Title",
    "attribute_set_id": 4,
    "visibility": 4,
    "extension_attributes": {
      "use_default": [
        "name",
        "tax_class_id"
      ]
    }
  }
}
```

Author: Evangelos Pallis
