###About
This module registers an extension attribute to be able to set from an api call or even programmatically use_default checkbox for product attributes.

###Installation
Create module namespace and clone repo files in it. (current namespace: `W2/EnhanceApi`)
```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:flush
```

###Usage
`PUT Request https://{magento_base_url}/rest/{store_view_code}/V1/products/test-sku`

This will update or create a test product for selected store view with use default checkbox checked for all attributes in the use_default array.
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
        "status",
        "visibility",
        "tax_class_id"
      ]
    }
  }
}
```

Author: Evangelos Pallis
