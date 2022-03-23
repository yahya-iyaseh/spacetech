<?php

namespace App\Widgets;

use App\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Employees extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Employee::count();
        $string = trans_choice('Employees', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => __('You have :count in your database. Click below to view all employees.', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all Employees'),
                'link' => route('voyager.employees.index'),
            ],
            'image' => asset('images/backgroud/teamHands.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
