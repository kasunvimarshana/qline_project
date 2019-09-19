<!-- ----------------------------------------------------------------------------------- -->
<!--
Use Blade Components/slots, Component Aliases and Include Aliases
Blade's Components are a feature that are similar to how you use sections and extending layouts. They are meant to be used for commonly used parts of your layout, and use the $slot variable for the content that you wish to inject into it.

Here is an example of a defining a component (notice the $slot variable that is echoed out):
-->

<!-- /resources/views/alert.blade.php -->
<div class="alert alert-danger">
    {{ $slot }}
</div>

<!--
And here is how to use it:
-->
@component('alert')
    Uh oh! A bad error just occurred!
@endcomponent

<!--
This would return output similar to:
-->
<div class="alert alert-danger">
    Uh oh! A bad error just occurred!
</div>
<!--
If this doesn't make sense, then you could think of the @component part as working similar to the following:
-->
@include('alert', ['slot'=>'Uh Oh! A bad error!'])
<!--
Blade Component Aliases:
The component files don't have to reside in the base directory of resources/views - it works like normal blade views (so you could call 
-->
@component('layouts.components.alert') ...
<!--
However, if they reside in a subdirectory (like the example in the previous paragraph, which lives in resources/views/layouts/components) you may wish to alias it. In the boot() method of AppServiceProvider you can add the following:
-->
use Illuminate\Support\Facades\Blade;
Blade::component('layouts.components.alert', 'alert');
<!--
Then you can just refer to it as 
-->
@component('alert')...

<!-- ----------------------------------------------------------------------------------- -->