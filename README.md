# ApiResponse

Use for responses from your API, pass array and status code, get data encoding, header content type and http status code

# How to install

`composer require guil95/api-response`

# How to use

```php
namespace MyClass;

use ApiResponse\Response\ApiResponse;

class MyClass{
  public function save()
  {
    //process save
    
    ApiResponse::json([
      'data' => $dataResponse,
      'message' => 'Persist object!'
    ], ApiResponse::HTTP_CREATED);
  }
}
```
