<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PricingCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $text,
        public string $price,
        public ?string $button = null,
        public ?string $id = null,
        public array $listItems = []
    )
    {
        $this->id ??= $this->title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pricing-card');
    }
}
