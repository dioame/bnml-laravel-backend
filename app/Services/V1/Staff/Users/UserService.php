<?php
namespace App\Services\V1\Staff\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserService
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($role = null)
    {
        if($role == 'member'){
            $result = User::where('member_type_id', 1)->whereNull('lib_officer_id')->orderBy('created_at', 'desc')->get();
            return $result;
        }else if($role == 'officer'){
            $result = User::with('lib_officer')
                        ->where('member_type_id', 1)
                        ->whereNotNull('lib_officer_id') 
                        ->join('lib_officers', 'users.lib_officer_id', '=', 'lib_officers.id')
                        ->orderBy('lib_officers.rank', 'asc')
                        ->select('users.*') 
                        ->get();
            return $result;
        }else if($role == 'petitioner'){
            $result = User::where('member_type_id', 5)->orderBy('created_at', 'desc')->get();
            return $result;
        }


        $result = User::orderBy('created_at', 'desc')->get();
        return $result;
    }

    public function executePost($params){
        
        $user = User::create([
            'email' => $params['email'],
            'password' => bcrypt($params['password']),
            "firstname" => $params['firstname'],
            "middlename" => $params['middlename'],
            "lastname" => $params['lastname'],
            "extensionname" => $params['extensionname'],
            "birth_date" => $params['birth_date'],
            "address" => $params['address'],
            "gender" => $params['gender'],
            "mobile" => $params['mobile'],
            "role" => $params['role'],
            "member_type_id" => 5,
         
        ]);
        

        $user->assignRole('staff-admin');

        $latests = $user->tokens()->latest()->take(9)->pluck('id');
        $user->tokens()->whereNotIn('id', $latests)->delete();

        $device = request()->device_name;
        if (empty($device)) {
            $device = request()->ip();
        }

        $token = $user->createToken($device);
        $token->accessToken->save();

        // Create token
        return [$token->plainTextToken, $user];
    }

    public function executeUpdate($params){
        $user = Auth::User();

        $user->update($params);
    }
}
