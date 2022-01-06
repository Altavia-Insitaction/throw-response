![Insitaction](https://www.insitaction.com/assets/img/logo_insitaction.png)
# Throw Response

Throw Response is a symfony bundle which allows to send response where you want with throw.

## Installation:
```bash
composer require insitaction/throw-response-bundle 
```

## Usage:
```php
throw new JsonResponseException(?string $message,int $code);
throw new ResponseException(?string $message,int $code);
```