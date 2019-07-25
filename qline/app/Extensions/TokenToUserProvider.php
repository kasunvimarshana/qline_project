<?php
namespace App\Extensions;

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Contracts\Auth\Authenticatable;

use App\UserAPIToken;
use App\User;

class TokenToUserProvider implements UserProvider
{
    /**
     * The user model.
     *
     * @var App\User
     */
    protected $user;
    /**
     * The token model.
     *
     * @var App\UserAPIToken
     */
    protected $token;
    /**
     * Create a new user provider.
     *
     * @param  App\UserAPIToken  $token
     * @param  App\User  $user
     * @return void
     */
    public function __construct (User $user, UserAPIToken $token) {
		$this->user = $user;
		$this->token = $token;
	}
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $queryObject = $this->user;
        return $queryObject->find($identifier);
    }
    /**
     * Retrieve a user by their token.
     *
     * @param  string  $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        $queryObject = $this->token;
        $queryObject = $queryObject->with('user')
            ->where('is_active', true)
            ->where('user_id', $identifier)
            ->where('api_token', $token)
            ->first();
        
		return $queryObject && $queryObject->user ? $queryObject->user : null;
    }
    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|\Illuminate\Database\Eloquent\Model  $user
     * @param  string  $token
     * @return void
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        $user->setRememberToken($token);
        $timestamps = $user->timestamps;
        $user->timestamps = false;
        $user->save();
        $user->timestamps = $timestamps;
    }
    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials) || (count($credentials) === 1 && array_key_exists('password', $credentials))) {
            return;
        }
        
        $queryObject = $this->token;
        
        foreach ($credentials as $key => $value) {
            if(Str::contains($key, 'password')){
                continue;
            }
            if(is_array($value) || $value instanceof Arrayable){
                $queryObject->whereIn($key, $value);
            } else {
                $queryObject->where($key, $value);
            }
        }

		return $queryObject->first();
    }
    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = $credentials['password'];
        //return app('hash')->check($plain, $user->getAuthPassword());
        return $this->hasher->check($plain, $user->getAuthPassword());
    }
    /**
     * Get a new query builder for the model instance.
     *
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function newModelQuery($model = null)
    {
        /*
        return is_null($model)
                ? $this->createModel()->newQuery()
                : $model->newQuery();
        */
    }
    /**
     * Create a new instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createModel()
    {
        /*
        $class = '\\'.ltrim($this->model, '\\');
        return new $class;
        */
    }
    /**
     * Gets the hasher implementation.
     *
     * @return \Illuminate\Contracts\Hashing\Hasher
     */
    public function getHasher()
    {
        return $this->hasher;
    }
    /**
     * Sets the hasher implementation.
     *
     * @param  \Illuminate\Contracts\Hashing\Hasher  $hasher
     * @return $this
     */
    public function setHasher(HasherContract $hasher)
    {
        $this->hasher = $hasher;
        return $this;
    }
    /**
     * Gets the name of the Eloquent user model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Sets the name of the Eloquent user model.
     *
     * @param  string  $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
}