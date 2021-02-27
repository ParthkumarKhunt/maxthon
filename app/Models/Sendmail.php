<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Sendmail extends Model
{
    public function sendMailltesting(){
        $mailData['data']='';
        $mailData['subject'] = 'Adspot - Testing Mail';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.carrer";
        $mailData['mailto'] = 'parthkhunt12@gmail.com';

        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
    }

    public function sendContactMail($request){

        $mailData['data']['firstname']=$request->input('firstname');
        $mailData['data']['lastname']=$request->input('lastname');
        $mailData['data']['email']=$request->input('email');
        $mailData['data']['mobile']=$request->input('mobile');
        $mailData['data']['subject']=$request->input('subject');
        $mailData['data']['description']=$request->input('description');


        $mailData['subject'] = 'Contact Mail';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.contactyou";
        $mailData['mailto'] = 'ghanshayam.webexecute@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
    }
    public function forgotPassword($token,$username,$email){
        $mailData['data']['token']=$token;
        $mailData['data']['username']=$username;
        $mailData['subject'] = 'Adspot - Reset Passsword link';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.forgotpassword";
        $mailData['mailto'] = $email;
        $sendMail = new Sendmail;
        $sendMail->sendSMTPMail($mailData);
        return true;
    }
    public function sendSMTPMail($mailData)
    {
                $pathToFile = $mailData['attachment'];
                $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
                    $m->from('parthkhunt37@gmail.com', 'Maxthon Technologies');
                    $m->to($mailData['mailto'], "Maxthon Technologies")->subject($mailData['subject']);

                    if($pathToFile != ""){
                        // $m->attach($pathToFile);
                    }

                    //  $m->cc($mailData['bcc']);
                });

                if($mailsend){
                    return true;
                }else{
                    return false;
                }
    }
}
