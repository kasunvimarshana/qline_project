<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * List all users.
     * 
     * @param Request $request
     * @return UserCollection
     */
    public function index(Request $request)
    {
        $users = User::all();

        return new UserCollection($users);
    }
}

?>

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * List all users.
     *
     * @param Request $request
     * @return UserCollection
     */
    public function index(Request $request)
    {
        $users = User::all();

        $users->transform(function (User $user) {
            return (new UserResource($user));
        });

        return new UserCollection($users);
    }
}

?>

<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (User $user) {
            return (new UserResource($user));
        });

        return parent::toArray($request);
    }
}

?>

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * List all users.
     *
     * @param Request $request
     * @return UserCollection
     */
    public function index(Request $request)
    {
        $users = User::all();

        return new UserCollection($users);
    }
}

?>

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * List all users.
     *
     * @param Request $request
     * @return UserCollection
     */
    public function index(Request $request)
    {
        $users = User::all();

        return (new UserCollection($users))->additional([
            'meta' => [
                'convertCryptoTo' => 'AUD'
            ]
        ]);
    }
}

?>

<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (User $user) {
            return (new UserResource($user))->additional($this->additional);
        });

        return parent::toArray($request);
    }
}

?>

<?php

class OrderCollection
{
   public function toArray($request)
   {
       return [
           'data' => $this->collection->map(function ($order) use ($request) {
               return (new OrderResource($order))->toArray($request);
           })
       ];
   }


   public function with($request)
   {
       return [
           'included' => $this->collection->pluck('product')->unique()->values()->map(function ($product) {
               return new ProductResource($product);
           })
       ];
   }
}

?>

<?php

Route::fallback(function(){
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback.404');

?>