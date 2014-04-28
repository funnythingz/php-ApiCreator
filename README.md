# ApiCreator

create json from array.

```php
require_once('./api-creator.php');

$data = [
"status" => "200",
    "data" => [
        "hoge" => "hoge",
        "ahya" => "ahya"
    ]
];

ApiCreator::createJSON($data);
```
