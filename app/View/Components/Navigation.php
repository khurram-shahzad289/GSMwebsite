<?php

namespace App\View\Components;

use App\Libraries\NavigationItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    public function getNavElement(): array
    {
        return [
            new NavigationItem('home.svg', route('home'), 'Home' ),
            new NavigationItem('recent.svg', route('recent-files'), 'Recent Files' ),
            new NavigationItem('packages-doller.svg', route('select-package'), 'Packages & Pricing' ),
            new NavigationItem('world.svg', route('world-agents'), 'World Agents' ),
            new NavigationItem('handshake.svg', route('team'), 'Join The Team' ),
            new NavigationItem('key.svg', route('get-key'), 'Password' ),
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation', ['navElements' => $this->getNavElement()]);
    }
}
