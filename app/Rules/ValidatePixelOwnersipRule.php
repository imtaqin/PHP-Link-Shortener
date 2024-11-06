<?php

namespace App\Rules;

use App\Models\Pixel;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class ValidatePixelOwnersipRule implements Rule
{
    /**
     * @var Request
     */
    private Request $request;

    /**
     * @var
     */
    private $userId;

    /**
     * Create a new rule instance.
     *
     * @param Request $request
     * @param $userId
     * @return void
     */
    public function __construct(Request $request, $userId)
    {
        $this->request = $request;
        $this->userId = $userId;
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
        if (empty(array_filter($value))) {
            return true;
        }

        // If any of the pixels exists
        if (Pixel::where('user_id', '=', $this->userId)->whereIn('id', array_filter($value))->exists()) {
            // Get the user's pixels
            $this->request->merge(['pixel_ids' => Pixel::where('user_id', '=', $this->userId)->whereIn('id', array_filter($value))->get()->pluck('id')->toArray()]);

            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Invalid value.');
    }
}
