<?php

return response()->json([
    'error' => 'Unauthenticated user',
    'code' => 401,
], 401);


public function update(Request $request)
{
    $token = Str::random(60);

    $request->user()->forceFill([
        'api_token' => hash('sha256', $token),
    ])->save();

    return ['token' => $token];
}

$response = $client->request('POST', '/api/user', [
    'headers' => [
        'Accept' => 'application/json',
    ],
    'form_params' => [
        'api_token' => $token,
    ],
]);

?>

<!-- __________________________________________________________________________________________________________________________ -->

200: OK. The standard success code and default option.
201: Object created. Useful for the store actions.
204: No content. When an action was executed successfully, but there is no content to return.
206: Partial content. Useful when you have to return a paginated list of resources.
400: Bad request. The standard option for requests that fail to pass validation.
401: Unauthorized. The user needs to be authenticated.
403: Forbidden. The user is authenticated, but does not have the permissions to perform an action.
404: Not found. This will be returned automatically by Laravel when the resource is not found.
500: Internal server error. Ideally you're not going to be explicitly returning this, but if something unexpected breaks, this is what your user is going to receive.
503: Service unavailable. Pretty self explanatory, but also another code that is not going to be returned explicitly by the application.

401: Unauthorized	You are not logged in, e.g. using a valid access token
403: Forbidden	You are authenticated but do not have access to what you are trying to do
404: Not found	The resource you are requesting does not exist
405: Method not allowed	The request type is not allowed, e.g. /users is a resource and POST /users is a valid action but PUT /users is not.
422: Unprocessable entity	The request and the format is valid, however the request was unable to process. For instance when sent data does not pass validation tests.
500: Server error	An error occured on the server which was not the consumer's fault.

Auth::guard('api')->user(); // instance of the logged user
Auth::guard('api')->check(); // if a user is authenticated
Auth::guard('api')->id(); // the id of the authenticated user
<!-- __________________________________________________________________________________________________________________________ -->