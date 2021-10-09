<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class LinkManager extends Component implements HasForms
{
    use InteractsWithForms;

    public Link $link;

    public $title = '';
    public $description = '';
    public $url = '';

    public function mount(): void
    {
        if (!empty($this->link)) {
            $this->form->fill([
                'title' => $this->link->title,
                'description' => $this->link->description,
                'url' => $this->link->url,
            ]);
        }

    }

    protected function getFormSchema(): array
    {
        return [
            Card::make()->schema([
                TextInput::make('title')->required(),
                MarkdownEditor::make('description'),
                TextInput::make('url')->url()->required()
            ]),
        ];
    }

    public function create(): void
    {
        Link::updateOrCreate($this->form->getState());
        redirect()->route('link-manager');
    }

    public function render()
    {
        return view('livewire.link');
    }
}
