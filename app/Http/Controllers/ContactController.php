<?php


namespace App\Http\Controllers;

use Exception;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contacts(){
        return view('chi-siamo.contacts');
    }
    public function send(Request $request){

        $name =$request->name;
        $email =$request->email;
        $number =$request->number;
        $user_message=$request->user_message;
        try{
            Mail::to($email)->send(new ContactMail($name, $email, $number, $user_message));
            return redirect()->back()->with('contactReceived', "Abbiamo ricevuto il tuo messaggio, ti ricontatteremo a breve" );
        } catch(Exception $error){
           return redirect()->back()->with('emailError', "C'è stato un problema con l' invio della tua email. Riprova tra qualche minuto");
        }

    }
    public function save(ContactRequest $request){
        $name =$request->name;
        $email =$request->email;
        $number =$request->number;
        $user_message=$request->user_message;

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'user_message' => $request->user_message
        ]);

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $number, $user_message));

        } catch(Exception $error){
           return redirect()->back()->with('emailError', "C'è stato un problema con l' invio della tua email. Riprova tra qualche minuto");

        }

        return redirect()->back()->with('contactReceived', "Abbiamo ricevuto il tuo messaggio, ti ricontatteremo a breve" );
    }







}
