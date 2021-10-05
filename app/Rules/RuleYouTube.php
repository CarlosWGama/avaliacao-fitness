<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RuleYouTube implements Rule
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
    public function passes($attribute, $value) {
        //
        $rx = '~
        ^(?:https?://)?                           # Optional protocol
        (?:www[.])?                              # Optional sub-domain
        (?:youtube[.]com/watch[?]v=|youtu[.]be/) # Mandatory domain name (w/ query string in .com)
        ([^&]{11})                               # Video id of 11 characters as capture group 1
            ~x';

        return preg_match($rx, $value, $matches);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Use um link válido do YouTube.';
    }
}
