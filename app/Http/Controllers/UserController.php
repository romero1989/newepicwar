<?php

namespace App\Http\Controllers;
use App\Events\AtualizouSenha;
use App\Events\AtualizouSenhaNumerica;
use App\Mail\MailSenhaNumerica;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showLinkRequestForm()
    {
        return view('app.FormResetSenhaNumerica');
    }

    public function sendLinkResetSenhaNumerica(Request $request)
    {
        if(Auth::guest()) {
            return view('app.home');
        }

        $this->validateEmail($request);

        $token = $this->getToken();

        $this->updateSenhaNumericaComToken($request, $token);

        $user = Auth::user();

        Mail::queue(new MailSenhaNumerica($user));

        // check for failures
        if (Mail::failures()) {
            return new Error(Mail::failures());
        }

        return redirect()->back()->with('status', 'Encaminhamos um link de redefinição de senha numérica para o seu e-mail!');
    }

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }


    public function getToken()
    {
        //geração do token
        $token = random_bytes(25);
        $token = bin2hex($token);

        return $token;
    }

    public function confirmaResetSenhaNumerica(Request $request)
    {
        return view('app.FormConfirmaResetSenhaNumerica')->with(
            ['token' => $request->token, 'email' => $request->email]
        );
    }

    public function finalizaResetSenhaNumerica(Request $request)
    {
        $email = $request->email;
        $token = $request->token;

        $user = User::getUserByEmail($email);

        if(!$this->isTokenValid($user, $token)) {
            return redirect()->back()->with('status', 'Token não é válido para o reset de senha numérica.');
        }

        event(new AtualizouSenhaNumerica($user));

        return redirect()->back()->with('status', 'Sua senha entrará em custódia e será resetada pelo server em até 48 horas!');
    }

    /**
     * @param Request $request
     * @param string $token
     */
    public function updateSenhaNumericaComToken(Request $request, string $token): void
    {
        DB::table('users')
            ->where('email', $request->email)
            ->update(['senha_numerica' => $token]);
    }

    public function isTokenValid($user, $token)
    {
        if($user->senha_numerica == $token) {
            $user->senha_numerica = "";
            $user->save();

            return true;
        }

        return false;
    }



}
