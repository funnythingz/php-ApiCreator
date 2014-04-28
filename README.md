# ApiCreator

create json from array for php v5.4~

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
