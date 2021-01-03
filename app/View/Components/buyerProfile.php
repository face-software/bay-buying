<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buyerProfile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $category = DB::table('categories')->get();
        return view('components.buyer-profile');
    }
}
