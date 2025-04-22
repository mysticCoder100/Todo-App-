<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;


class Input extends Component{

        public string $name;
        public string $label;
        public string $placeholder;
        public string $type;
        public ?string $classes;
        public ?bool $isPassword = false;
        public string $passwordToggleText = "show";
        public bool $passwordVisible = false;


    /**
     * Create a new component instance.
     */
    public function mount(
        string $name,
        string $label,
        string $placeholder,
        string $type,
        ?string $classes = null,
        ?bool $isPassword = false
    ): void
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->isPassword = $isPassword;
        $this->classes = $classes;


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('livewire.input');
    }

    public function togglePassword(): void
    {
        $this->passwordVisible = !$this->passwordVisible;
        $this->type = $this->passwordVisible ? "text" : "password";
        $this->passwordToggleText = $this->passwordVisible ? "hide" : "show";
    }
}
