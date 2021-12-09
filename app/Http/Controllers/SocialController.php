<?php



namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller

{

    public function redirect($provider)

    {

        return Socialite::driver($provider)->redirect();

    }



    public function callback($provider)

    {



        $getInfo = Socialite::driver($provider)->stateless()->user();



        $user = $this->createUser($getInfo,$provider);



        auth()->login($user);



        return redirect()->route("tables.index");



    }

    function createUser($getInfo, $provider)
    {


//        $user = User::where('provider_id', $getInfo->id)->first();
        $user = User::where('email', $getInfo->email)->first();
        if (!$user) {

            $user = User::create([

                'name' => $getInfo->name,

                'email' => $getInfo->email,

                "avatar" => $getInfo->avatar,

                'provider' => $provider,

                'provider_id' => $getInfo->id

            ]);


        } else {
            $user->update([
                "name" => $getInfo->name,
                "avatar" => $getInfo->avatar,
                "provider" => $provider,
                "provider_id" => $getInfo->id
            ]);
        }

        return $user;

    }

}
