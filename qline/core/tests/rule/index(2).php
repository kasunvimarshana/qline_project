<!-- --------------------------------------------------------------------------------------------------- -->
<?php

//Custom Validation Rules
/*
Using Rule Objects
Laravel provides a variety of helpful validation rules; however, you may wish to specify some of your own. One method of registering custom validation rules is using rule objects. To generate a new rule object, you may use the make:rule Artisan command. Let's use this command to generate a rule that verifies a string is uppercase. Laravel will place the new rule in the app/Rules directory:

php artisan make:rule Uppercase
Once the rule has been created, we are ready to define its behavior. A rule object contains two methods: passes and message. The passes method receives the attribute value and name, and should return true or false depending on whether the attribute value is valid or not. The message method should return the validation error message that should be used when validation fails:
*/
namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
class Uppercase implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be uppercase.';
    }
}

?>
<?php

/*
Of course, you may call the trans helper from your message method if you would like to return an error message from your translation files:
*/
/**
 * Get the validation error message.
 *
 * @return string
 */
public function message()
{
    return trans('validation.uppercase');
}

?>
<?php

use App\Rules\Uppercase;

$request->validate([
    'name' => ['required', 'string', new Uppercase],
]);

?>
<!-- --------------------------------------------------------------------------------------------------- -->