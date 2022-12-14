<?php

namespace App\Http\Livewire;


use App\friend;
use App\message;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $noChat = false;

    public $receiver;
    public $current_user;
    public $message;
    public $thread;
    public $receiver_id;
    public $notification;

    protected $rules = ['message' => 'required'];

    public function startChat($id)
    {
        $this->noChat = true;
        $this->receiver = $id;

        $this->current_user = Auth::user()->id;

        // change to chat read
        $notifications = message::where('thread', $this->current_user.'-'.$this->receiver)->orWhere('thread', $this->receiver.'-'.$this->current_user)->update(['is_read' => '1']);

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendChat ()
    {
        $this->validate();

        $thread_value = $this->current_user . '-' .$this->receiver;

        if($this->thread = 0){
            Message::create([
                'thread' => $thread_value,
                'message' => $this->message,
                'receiver_id' => $this->receiver,
                'sender_id' => $this->current_user
            ]);
        }else{
            Message::create([
                'thread' => $thread_value,
                'message' => $this->message,
                'receiver_id' => $this->receiver,
                'sender_id' => $this->current_user
            ]);
        }

        $this->clearForm();

    }

    public function clearForm ()
    {
        $this->message = "";
    }



    /**
     * This function is for deleting the message
     * What it does is beasically not deleting the row from the database but updating the message to a 0 value.
     * On echo, It will check if the value is 0, then display message deleted as ou can see it from the front end
     *
     * It also clears the message from the favorites
     */
    public function deleteMessage ($id)
    {
        Message::find($id)->update(['message' => '0']);



    }

    /**
     * Logout function
     */
    public function back ()
    {

        return redirect('chat');
    }
    public function back1 ()
    {

        return redirect('dashboard');
    }
    public function back2 ()
    {

        return redirect('/');
    }
    /**
     * Clear all Chats With Current Useer
     *
     */
    public function clearChats ()
    {
        // All variables
        $user = Auth::user()->id;

        $receiver = $this->receiver;

        $get_messages = Message::where('thread', $user.'-'.$receiver)->orWhere('thread', $receiver.'-'.$user)->get();


        foreach($get_messages as $message){
            $message->delete();
        }
    }

    /**
     * Function to make fiend favorite
     */

     public function addFriend ($id)
     {
         friend::create(['friend' => $id, 'user' => Auth::user()->id]);
     }

     /**
     * Function to remove friend
     */

    public function removeFriend ($id)
    {
        Friend::where('friend', $id)->delete();
    }

    /**
     * View profile of an active user you are chatting with
     */


    public function render()
    {
        // All variables
        $user = Auth::user()->id;

        $receiver = $this->receiver;

        $current = User::find($receiver);

        // get all users
        $users = User::where('id', '!=', $user)->get();

        // check if current user is friend
        $friend = Friend::where('friend', $current)->first();

        // get all chats
        $messages = Message::where('thread', $user.'-'.$receiver)->orWhere('thread', $receiver.'-'.$user)->get();

        return view('livewire.chat', compact('messages', 'users', 'current', 'friend'));
    }
}
