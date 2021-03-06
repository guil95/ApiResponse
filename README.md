# ApiResponse

Use for responses from your API, pass array and status code, get data encoding, header content type and http status code

# How to install

```php 
composer require guil95/api-response
```

# How to use

```php
namespace MyNamespace;

use ApiResponse\Response\ApiResponse;

class MyClass{
  public function save()
  {
    //process save
    
    //Return json
    // $dataResponse: can be, string, array or object (show only public attributes)
    ApiResponse::json([
      'data' => $dataResponse,
      'message' => 'Persist object!'
    ], ApiResponse::HTTP_CREATED);
    
    //Return xml
    /**
     * @param array $data
     * @param int $status
     * @param string|null $root
     */
    ApiResponse::xml([
      'data' => $dataResponse,
      'message' => 'Persist object!'
    ],ApiResponse::HTTP_CREATED,
    'root');
  }
}
```
# Status code available

In the ApiResponse class, there are several consts for defining status code, listed below:
```
HTTP_CONTINUE = 100;
HTTP_SWITCHING_PROTOCOLS = 101;
HTTP_PROCESSING = 102;
HTTP_EARLY_HINTS = 103;
HTTP_OK = 200;
HTTP_CREATED = 201;
HTTP_ACCEPTED = 202;
HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
HTTP_NO_CONTENT = 204;
HTTP_RESET_CONTENT = 205;
HTTP_PARTIAL_CONTENT = 206;
HTTP_MULTI_STATUS = 207;
HTTP_ALREADY_REPORTED = 208;
HTTP_IM_USED = 226;
HTTP_MULTIPLE_CHOICES = 300;
HTTP_MOVED_PERMANENTLY = 301;
HTTP_FOUND = 302;
HTTP_SEE_OTHER = 303;
HTTP_NOT_MODIFIED = 304;
HTTP_USE_PROXY = 305;
HTTP_RESERVED = 306;
HTTP_TEMPORARY_REDIRECT = 307;
HTTP_PERMANENTLY_REDIRECT = 308;
HTTP_BAD_REQUEST = 400;
HTTP_UNAUTHORIZED = 401;
HTTP_PAYMENT_REQUIRED = 402;
HTTP_FORBIDDEN = 403;
HTTP_NOT_FOUND = 404;
HTTP_METHOD_NOT_ALLOWED = 405;
HTTP_NOT_ACCEPTABLE = 406;
HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
HTTP_REQUEST_TIMEOUT = 408;
HTTP_CONFLICT = 409;
HTTP_GONE = 410;
HTTP_LENGTH_REQUIRED = 411;
HTTP_PRECONDITION_FAILED = 412;
HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
HTTP_REQUEST_URI_TOO_LONG = 414;
HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
HTTP_EXPECTATION_FAILED = 417;
HTTP_I_AM_A_TEAPOT = 418;
HTTP_MISDIRECTED_REQUEST = 421;
HTTP_UNPROCESSABLE_ENTITY = 422;
HTTP_LOCKED = 423;
HTTP_FAILED_DEPENDENCY = 424;
```
