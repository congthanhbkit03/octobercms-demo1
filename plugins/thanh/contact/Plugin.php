<?php namespace Thanh\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Thanh\Contact\Components\ContactForm' => 'contactform'
    	];
    }

    public function registerSettings()
    {
    }
}
