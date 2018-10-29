<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as User;
use App\profile as Profile;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setSession();
        return view('home')->with(['nav' => 'home']);
    }

    public function saveSessionTest(Request $request)
    {
        // //global helper
        session(['userid' => Auth::user()->id]);

        //user request
        $request->session()->put('username',Auth::user()->name);

        // echo session()->username;
        return view('session');
    }

    public function showSession(Request $request)
    {
        //global helper
        $username = session('username');

        //request
        $userid = $request->session()->get('userid');

        // $request->session()->all(); //returns all session key value pairs
        // $request->session()->has(); // boolean / checks if session is null
        // $request->session()->exists(); //boolean / checks if session is existing
        // $request->session()->push('push.name','newitem'); // pushing values to session
        // $request->session()->pull('id','<optional after value>'); //retrieve and remove values in session array

        // $request->session()->flash(); //available only until next request
        // $request->session()->reflash(); //available only until MULTIPLE next request
        // $request->session()->flush(); // removes all data on session
        // $request->session()->forget('username');

        // $request->session()->regenerate(); regenerate session with same data

        return view('session',['username' => $username]);
    }

    public function page1(){
        $nav = 'exercise';
        return view('page1')->with(['nav' => $nav]);
    }

    public function page2(){
        $nav = 'exercise';
        return view('page2')->with(['nav' => $nav]);
    }

    public function setSession(){
        $username = ucfirst(Auth::user()->name);
        session(['username' => $username]);
    }

    public function profile(){
        $profile = $this->getProfile();
        $countries = $this->getCountries();
        return view('profile')->with([
            'countries' => $countries,
            'profile' => $profile,
            'nav' => 'profile',
        ]);
    }

    public function getCountries(){
        $url = 'https://restcountries.eu/rest/v2/all';
        $result = file_get_contents($url);
        $countries = json_decode($result);
        return $countries;
    }

    public function updateProfile(Request $request){
        $this->saveProfile($request->all());
        return redirect()->route('profile');
    }

    public function getProfile(){
        $user = User::find(Auth::id());
        $profile = Profile::where('user_id',$user->user_id)->first();

        // Log::info()
        return $profile;

    }

    private function saveProfile(array $data){
        $user = User::find(Auth::id());
        $profile = Profile::where('user_id',$user->id)->first();

        if($profile){
            //update
            $profile->firstname = $data['firstname'];
            $profile->lastname = $data['lastname'];
            $profile->birthdate = date('Y-m-d',strtotime($data['birthdate']));
            $profile->gender = $data['gender'];
            $profile->country = $data['country'];
        }else{
            //create
            $profile = new profile([
                "firstname" => $data['firstname'],
                "lastname" => $data['lastname'],
                "birthdate" => date('Y-m-d',strtotime($data['birthdate'])),
                "gender" => $data['gender'],
                "country" => $data['country'],
            ]);
        }

        $user->profile()->save($profile);
    }

    //saving image
    public function fileResponse(Request $request){
        $file = $request->file('profile_photo');
        $path = $file->storeAs('img',$request->user_id.'_'.$file->getClientOriginalExtension());
    }
}
