<?php
namespace App\Services\V1\Staff\Auth;

use App\Exceptions\CredentialsInvalidException;
use function request;

class LoginService
{
    /**
     * @var GetUserBy
     */
    private $getUserBy;    
    private $verifyPassword;

    public function __construct(
        GetUserBy $getUserBy,
        VerifyPassword $verifyPassword
    )
    {
        $this->getUserBy = $getUserBy;
        $this->verifyPassword = $verifyPassword;
    }

    /**
     * @param $params
     * @return mixed
     * @throws CredentialsInvalidException
     */
    public function execute($params)
    {
             
        $user = $this->getUserBy->execute(['email' => $params['email']]);
        if(!$user) {
            throw new CredentialsInvalidException();
        }

        $password = $this->verifyPassword->execute($user,$params['password']);
        if(!$password ){
            throw new CredentialsInvalidException();
        }


        $device = request()->device_name;
        if (empty($device)) {
            $device = request()->ip();
        }

        $latest = $user->tokens()->latest()->take(9)->pluck('id');
        $user->tokens()->whereNotIn('id', $latest)->delete();
       
        // Create token
        $token = $user->createToken($device);
        $token->accessToken->save();

        return [$token->plainTextToken, $user];
    }
}
