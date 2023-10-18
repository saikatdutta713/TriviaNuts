<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageModal extends Component
{

    public $type;
    public $message;
    public $showCloseButton;
    public $closeButtonText;
    public $buttonText;
    public $buttonLink;

    public function __construct($type, $message, $showCloseButton = null, $closeButtonText=null, $buttonText = null, $buttonLink = null)
    {
        $this->type = $type;
        $this->message = $message;
        $this->showCloseButton = $showCloseButton;
        $this->closeButtonText = $closeButtonText;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-modal');
    }
}
