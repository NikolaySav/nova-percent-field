<?php

namespace Nsavinov\NovaPercentField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Percent extends Field
{

    public $component = 'nova-percent-field';

    /**
     * Percents are stored in decimal form
     * @var bool
     */
    public $storedInDecimal = true;

    public $precision = 2;

    public $base = '100';

    public $displayPercentSign = true;

    public function __construct(
        string $name,
        string $attribute = null,
        $resolveCallback = null
    ) {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->resolveUsing(function ($value) {

            if ($this->displayPercentSign) {
                $this->withMeta([
                    'displayPercentSign' => $this->displayPercentSign,
                ]);
            }

            if ($this->storedInDecimal) {
                return bcmul((string)$value, $this->base, $this->precision);
            }

            return $value;
        })->fillUsing(function (NovaRequest $request, $model, $attribute, $requestAttribute) {
            $value = $request[$requestAttribute];

            if ($this->storedInDecimal) {
                logger(bcdiv($value, $this->base, $this->precision));
                $model->{$attribute} = bcdiv($value, $this->base, strlen($value));
            } else {
                $model->{$attribute} = $value;
            }
        });
    }

    public function precision(int $value): Percent
    {
        $this->precision = $value;

        return $this;
    }

    public function base(string $value): Percent
    {
        $this->base = $value;

        return $this;
    }

    public function storedInDecimal(bool $value = true): Percent
    {
        $this->storedInDecimal = $value;

        return $this;
    }

    public function displayPercentSign(bool $value = true): Percent
    {
        $this->displayPercentSign = $value;

        return $this;
    }
}
