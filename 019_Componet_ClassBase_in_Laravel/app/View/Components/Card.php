<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    public $title;
    public $subTitle;
    public $description;

    public function __construct($title,$subTitle,$description)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }

// My define method
    public  function number($num){
        return 30+$num;
    }


}
