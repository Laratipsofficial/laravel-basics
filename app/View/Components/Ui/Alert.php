<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null)
    {
        $this->type = $type;
    }

    public function typeClass()
    {
        if ($this->type === 'error') {
            return 'bg-red-600 text-white';
        }

        return 'bg-green-600 text-white';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.ui.alert');
    }
}
