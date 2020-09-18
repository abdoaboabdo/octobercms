<?php

namespace Watchlearn\Movies\Components;
use Cms\Classes\ComponentBase;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
use System\Models\File;
use Watchlearn\Movies\Models\Actor;

class ActorForm extends ComponentBase{

    /**
     * @inheritDoc
     */
    public function componentDetails()
    {
        return [
            'name'          =>  'Actor Form',
            'description'   =>  'Enter Actors',
        ];
    }

    public function onSubmit(){

        $validator = Validator::make(
            $form = Input::all(), [
                'name' => 'required',
                'lastname' => 'required'
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $actor=new Actor();
        $actor->name=Input::get('name');
        $actor->lastname=Input::get('lastname');
        $actor->actorImage=Input::file('actorImage');
        $actor->save();
        Flash::success('Actor Added');
    }
    public function onImageUpload() {
        $image = Input::all();

        $file = (new File())->fromPost($image['actorimage']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >'
        ];
    }
}
