<?php

namespace Modules\Dashboard\View\Components;

use Illuminate\View\Component;

class Main extends Component
{

    public $info; 

    public function __construct($info)
    {
        
        $this->info = $info;
    }


    public function render()
    {
        return view('dashboard::components.main');
    }
}
