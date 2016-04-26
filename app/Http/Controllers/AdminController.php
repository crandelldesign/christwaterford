<?php

namespace christwaterford\Http\Controllers;

use Illuminate\Http\Request;

use christwaterford\Http\Requests;
use christwaterford\Http\Controllers\Controller;

use christwaterford\CalendarEvent;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $view = view('admin.index');
        $view->active_page = 'home';
        return $view;
    }

    public function getEvents($id = null)
    {
        if (!$id) {
            return $this->listEvents();
        } else {
            return $this->editEvent($id);
        }
    }

    public function postEvents(Request $request, $action = null)
    {
        if($request->get('add_another'))
            echo 'Save and Add Another';
        else
            echo 'Save and Close';
        print_r($request->all());
    }

    protected function listEvents()
    {
        $events = CalendarEvent::orderBy('starts_at', 'desc');
        $events = $events->get();
        $view = view('admin.events-list');
        $view->active_page = 'edit-event';
        $view->events = $events;
        return $view;
    }

    protected function editEvent($id)
    {
        $event = CalendarEvent::find($id);
        $view = view('admin.event');
        $view->active_page = 'add-event';
        if($event) {
            $view->active_page = 'edit-event';
            $view->event = $event;
        }
        return $view;
    }

    public function getChangePassword()
    {
        $view = view('admin.change-password');
        $view->active_page = 'change-password';
        return $view;
    }

    public function postChangePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $credentials = [
            'email' => \Auth::user()->email,
            'password' => $request->get('current_password'),
        ];

        if(\Auth::validate($credentials)) {
            $user = \Auth::user();
            $user->password = bcrypt($request->get('password'));
            $user->save();
            return redirect('/admin')->with('message', 'Password changed successfully.');
        } else {
            return redirect()->back()->withErrors('Incorrect old password.');
        }
    }

}
