# nova-percent-field
 Laravel Nova field for displaying percents

## Installation

You can install the package into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require nsavinov/nova-percent-field
```

## Usage
Inside the resource:

```php
use Nsavinov\NovaPercentField\Percent;

public function fields(Request $request)
{
    return [
        // ...
                    Percent::make('Rate')
                    
                        // possible options
                        
                        ->storedInDecimal(true) // true by default (converts 0.15 to 15.00)
                        ->precision(2) // digits after dot
                        
                        ->storedInDecimal(false) // for displaying raw value from database
                        
                        ->displayPercentSign(true) // true by default
    ];
}