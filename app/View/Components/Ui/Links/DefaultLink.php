<?php

declare(strict_types=1);

namespace App\View\Components\Ui\Links;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $url,
        public string $size = 'default',
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.links.default-link');
    }
}
