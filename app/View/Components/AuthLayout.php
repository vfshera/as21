<?php

namespace App\View\Components;

use Auth;
use Illuminate\View\Component;

class AuthLayout extends Component
{
    public $headerLinks;
    public $adminNavs;
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->user = request()->routeIs('admin.*') ? Auth::guard('admin')->user() : Auth::user();

        $this->headerLinks = [
            (object) [
                'title' => 'Notifications',
                'url' => '',
            ],
            (object) [
                'title' => 'Profile',
                'url' => route('admin.profile'),
            ],
        ];

        $this->adminNavs = [
            (object) [
                'name' => 'Main',
                'sideclass' => '',
                'linkclass' => '',
                'links' => [
                    (object) [
                        'title' => 'Dashboard',
                        'url' => route('admin.dashboard'),
                    ],
                    (object) [
                        'title' => 'Orders',
                        'url' => route('admin.orders.all'),
                    ],
                    (object) [
                        'title' => 'Clients',
                        'url' => '',
                    ],
                    (object) [
                        'title' => 'Payments',
                        'url' => '',
                    ],
                ],
            ],
            (object) [
                'name' => 'More',
                'sideclass' => 'mt-20',
                'linkclass' => 'text-primary-3',
                'links' => [
                    (object) [
                        'title' => 'Insights',
                        'url' => '',
                    ],
                    (object) [
                        'title' => 'Store',
                        'url' => '',
                    ],
                    (object) [
                        'title' => 'Marketplace',
                        'url' => '',
                    ],
                ],
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.auth');
    }
}