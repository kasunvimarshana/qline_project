<?php
namespace App\Extensions;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccessTokenGuard implements Guard
{
    use GuardHelpers;
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;
    /**
     * The name of the query string item from the request containing the token.
     *
     * @var string
     */
    protected $inputKeyToken;
    /**
     * The name of the token "column" in persistent storage.
     *
     * @var string
     */
    protected $storageKeyToken;
    /**
     * The name of the query string item from the request containing the user.
     *
     * @var string
     */
    protected $inputKeyUser;
    /**
     * The name of the user "column" in persistent storage.
     *
     * @var string
     */
    protected $storageKeyUser;
    /**
     * Indicates if the API token is hashed in storage.
     *
     * @var bool
     */
    protected $hash = false;
    /**
     * Create a new authentication guard.
     *
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $inputKey
     * @param  string  $storageKey
     * @param  bool  $hash
     * @return void
     */
    /*
    public function __construct(UserProvider $provider, Request $request, $inputKey = 'access_token', $storageKey = 'access_token', $hash = false)
    {
        $this->provider = $provider;
        $this->request = $request;
        $this->inputKey = $inputKey;
        $this->storageKey = $storageKey;
        $this->hash = $hash;
    }
    */
    
    /**
     * Create a new authentication guard.
     *
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $configuration
     * @return void
     */
    public function __construct (UserProvider $provider, Request $request, $configuration) {
		$this->provider = $provider;
		$this->request = $request;
		$this->inputKeyToken = isset($configuration['input_key_token']) ? $configuration['input_key_token'] : 'access_token';
		$this->storageKeyToken = isset($configuration['storage_key_token']) ? $configuration['storage_key_token'] : 'access_token';
        $this->inputKeyUser = isset($configuration['input_key_user']) ? $configuration['input_key_user'] : 'user_id';
		$this->storageKeyUser = isset($configuration['storage_key_user']) ? $configuration['storage_key_user'] : 'user_id';
		$this->hash = isset($configuration['hash']) ? $configuration['hash'] : false;
	}
    
    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user()
    {
        // If we've already retrieved the user for the current request we can just
        // return it back immediately. We do not want to fetch the user data on
        // every call to this method because that would be tremendously slow.
        if (! is_null($this->user)) {
            return $this->user;
        }
        $user = null;
        $request_token = $this->getTokenForRequest();
        $request_user = $this->getUserForRequest();
        if (! empty($request_token)) {
            $user = $this->provider->retrieveByCredentials([
                $this->storageKeyToken => $this->hash ? Hash::make( $request_token ) : $request_token,
                $this->storageKeyUser => $request_user
            ]);
        }
        return $this->user = $user;
    }
    /**
     * Get the token for the current request.
     *
     * @return string
     */
    public function getTokenForRequest()
    {
        $token = $this->request->query($this->inputKeyToken);
        if (empty($token)) {
            $token = $this->request->input($this->inputKeyToken);
        }
        if (empty($token)) {
            $token = $this->request->bearerToken();
        }
        if (empty($token)) {
            $token = $this->request->getPassword();
        }
        return $token;
    }
    /**
     * Get the user for the current request.
     *
     * @return string
     */
    public function getUserForRequest()
    {
        $user = $this->request->query($this->inputKeyUser);
        if (empty($user)) {
            $user = $this->request->input($this->inputKeyUser);
        }
        return $user;
    }
    /**
     * Validate a user's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        if (empty($credentials[$this->inputKeyToken])) {
            return false;
        }else if (empty($credentials[$this->inputKeyUser])) {
            return false;
        }
        $credentials = [
            $this->storageKeyToken => $credentials[$this->inputKeyToken],
            $this->storageKeyUser => $credentials[$this->inputKeyUser],
        ];
        if ($this->provider->retrieveByCredentials($credentials)) {
            return true;
        }
        return false;
    }
    /**
     * Set the current request instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }
}