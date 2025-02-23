<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class CategoryLabel extends Component
{
    public string $category;
    /**
     * Create a new component instance.
     */
    public function __construct(string $category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-label');
    }
    public function getClass(): string
    {
        $this->category = strtolower($this->category);
        return match ($this->category) {
            'blog' => 'info',
            'tutorial' => 'primary',
            'news' => 'warning',
            default => 'secondary',
        };
    }
}
