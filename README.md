# ApiResponse

Use for responses from your API

# How to install

`composer require guil95/api-response`

# How to use

```
namespace MyClass;

use ApiResponse\Response\ApiResponse;

class MyClass{
  public function save()
  {
    //process save
    
    ApiResponse::json([
      'data' => $myObject,
      'message' => 'Persist object!'
    ], ApiResponse::HTTP_CREATED);
  }
}
```
