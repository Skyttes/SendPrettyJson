## SendPrettyJson
This extension for Nette Framework 3 allows you to send json response with Json flags, like prettifying the JSON.

## Installation
Run `composer require skyttes/send-pretty-json`

Add the `Skyttes\PrettyJson\Traits\TSendPrettyJson` trait to your BasePresenter (class that's extended by all presenters)
<br>Nette version lower than Nette 3 are not tested.

```php
<?php declare(strict_types=1);
namespace App\Presenters;

use Nette\Application\UI\Presenter;
use Skyttes\PrettyJson\Traits\TSendPrettyJson;

class BasePresenter extends Presenter
{

    use TSendPrettyJson;

    // .. your code

}
```

## Usage

You now have access to functions `sendJson($data, $jsonFlag)` and `sendPrettyJson($data)` (which is an alias of sendJson with PRETTY flag) 
