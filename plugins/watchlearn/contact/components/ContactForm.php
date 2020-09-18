<?php

namespace Watchlearn\Contact\Components;
use Cms\Classes\ComponentBase;
use October\Rain\Exception\ValidationException;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use October\Rain\Support\Facades\Flash;

class ContactForm extends ComponentBase{

    /**
     * @inheritDoc
     */
    public function componentDetails()
    {
        return [
            'name'          =>  'Contact Form',
            'description'   =>  'Simple Contact Form',
        ];
    }

    public function onSend(){

        $data = post();

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            throw new ValidationException($validator);
        }
        else{
            $vars=[
                'name'      =>  Input::get('name'),
                'email'     =>  Input::get('email'),
                'content'   =>  Input::get('content')
            ];
            Mail::send('watchlearn.contact::mail.message', $vars, function(Message $message) use ($vars) {

                $message->to('info@abdoaboabdo12323.dx.am', 'Admin Person');
                $message->subject('New Message From Contact Form');

            });

            Flash::success('You did it!');
        }
    }
}
