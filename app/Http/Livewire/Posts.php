<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Posts extends Component
{

	public $sampledata, $name, $email, $password, $data_id;

    public function render()
    {
    	$this->sampledata = User::all();
        return view('livewire.posts');
    }
    public function resetInputFields()
    {
    	$this->name = '';
    	$this->email = '';
        $this->password = '';
    }

    public function store()
    {
        $validation = $this->validate([
            'name'        =>  'required',
            'email'         =>  'required',
            'password'            =>  'required'
        ]);

        User::create($validation);

        session()->flash('message', 'Data Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }
}
