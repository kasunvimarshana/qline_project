<!-- --------------------------------------------------------------------------------------- -->
https://laravel.com/docs/4.2/validation
<!-- --------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------- -->
<?php

// exists example
'email' => 'exists:staff,account_id,1'
// unique example
'email' => 'unique:users,email_address,$user->id,id,account_id,1'

?>
<!-- --------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------- -->
<?php

$messages = [
    'data.ip.unique' = 'Given ip and hostname are not unique',
];

Validator::make($data, [
    'data.ip' => [
        'required',
        Rule::unique('servers')->where(function ($query) use($ip,$hostname) {
            return $query->where('ip', $ip)
            ->where('hostname', $hostname);
        }),
    ],
],
$messages
);

?>
<!-- --------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------- -->
<?php

//Specifying A Custom Column Name:
'email' => 'unique:users,email_address'
    
//Custom Database Connection
/*
Occasionally, you may need to set a custom connection for database queries made by the Validator. As seen above, setting unique:users as a validation rule will use the default database connection to query the database. To override this, specify the connection and the table name using "dot" syntax:
*/
'email' => 'unique:connection.users,email_address'

?>
<!-- --------------------------------------------------------------------------------------- -->