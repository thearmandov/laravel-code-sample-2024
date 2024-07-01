<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PortfolioOwnership implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check the request value, if author is confirmed, great -- otherwise, rule validation fails.
        return $value === 'true' ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You must confirm your authorship to the portfolio submitted.';
    }
}
