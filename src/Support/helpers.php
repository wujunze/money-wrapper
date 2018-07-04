<?php

/*
 * Money PHP Helper
 */
if (!function_exists('money')) {
    /**
     * @param string $country
     * @return \WuJunze\MoneyWrapper\Utilities\Money
     */
    function money(string $country = '')
    {
        return \WuJunze\MoneyWrapper\Utilities\Money::make($country);
    }
}
