<?php

namespace App\Widgets;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Projects extends BaseDimmer
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
        $count = Project::count();
        $string = trans_choice('Projects', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tools',
            'title'  => "{$count} {$string}",
            'text'   => __('You have :count in your database. Click below to view all projects.', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all Projects'),
                'link' => route('voyager.projects.index'),
            ],
            'image' => asset('images/backgroud/laptopMobileSmall.jpg'),
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
