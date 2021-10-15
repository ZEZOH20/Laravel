<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\models\cat;
class navbar extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['cats']=cat::select('id','name')->active()->get();
        return view('components.navbar',$data);
    }
}
