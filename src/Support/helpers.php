<?php

/*
 * Money PHP Helper
 */
if (!function_exists('money')) {
    function money(string $country = '')
    {
        return \WuJunze\MoneyWrapper\Utilities\Money::make($country);
    }
}
