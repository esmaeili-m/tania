<?php

namespace App\Http\Livewire\Home\Contact;

use App\Http\Livewire\Admin\Post\Create;
use App\Models\Message;
use App\Models\SocialMedia;
use Livewire\Component;
use Stevebauman\Location\Location;

class Index extends Component
{
    public Message $message;
    public function mount()
    {
        $this->message = new Message();
    }
    protected $rules = [
        'message.name' => 'required',
        'message.email' => 'required',
        'message.message' => 'required',
    ];
    public function createMessage(){

        Message::create([
            'name'=>$this->message->name,
            'email'=>$this->message->email,
            'message'=>$this->message->message,
            'ip'=>request()->ip(),
            'device'=> request()->header('User-Agent'),
            'country'=> \Stevebauman\Location\Facades\Location::get(request()->ip())
        ]) ;

        $this->message->name='';
        $this->message->email='';
        $this->message->message='';
        session()->flash('message', 'Your message has been sent');
    }
    public function render()
    {
        $contact=SocialMedia::where('status',1)->take(1)->first();
        return view('livewire.home.contact.index',compact('contact'))->layout('layouts.other');
    }
}
