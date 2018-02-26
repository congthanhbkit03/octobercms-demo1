<?php namespace Thanh\Contact\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
class ContactForm extends ComponentBase{
	public function componentDetails(){
		return [
			'name' => 'Contact Form',
			'description' => 'Simple contact form'
		];
	}

	public function onSend(){

		$validator = Validator::make(
		    [
		        'name' => Input::get('name'),
		        'email' => Input::get('email'),
		        'content' => Input::get('content')
		    ],
		    [
		        'name' => 'required',
		        'email' => 'required|email',
		        'content' => 'required'
		    ]
		);

		if ($validator->fails()){
			//bao loi o day
			return Redirect::back()->withErrors($validator);
		} else {
			// These variables are available inside the message as Twig
			$vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

			Mail::send('thanh.contact::mail.message', $vars, function($message) {

			    $message->to('congthanhbkit03@gmail.com', 'Admin Person');
			    $message->subject('Mail from Contact Form - Emily');
			    
			});

			Flash::success('Mail của bạn đã được gởi thành công! Chúng tôi sẽ hồi đáp sớm! Cảm ơn bạn đã phản hồi!');
			return Redirect::back();
		}
		
	}
}
