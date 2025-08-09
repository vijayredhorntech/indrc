<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
use Livewire\WithFileUploads;
use App\Models\Page; // Import Page model
use Illuminate\Validation\Rule;

class MenuManager extends Component
{
    use WithFileUploads;
    public $menus;
    public $menuId;
    public $title;
    public $link;
    public $linkType = 'manual'; // Default to manual link
    public $parentId;
    public $pageId; // For page selection
    public $pages; // List of pages
    public $file; // List of pages

    protected $listeners = ['editMenu', 'deleteMenu'];

    public function mount()
    {
        $this->loadMenus();
        $this->pages = Page::all(); // Load pages for selection
    }

    public function render()
    {
        return view('livewire.menu-manager');
    }

    public function saveMenu()
    {
        $this->validate([
            'title' => 'nullable|string|max:255',
            'linkType' => 'required|in:manual,page,file',
            'link' => 'nullable|string|url',
            'file' => 'nullable|file',
            'pageId' => 'nullable|exists:pages,slug',
            'parentId' => [
                'nullable',
                'exists:menus,id',
                function ($attribute, $value, $fail) {
                    if ($value == $this->menuId) {
                        $fail('Parent menu cannot be the same as the current menu.');
                    }
                },
            ],
        ]);

        $data = [
            'title' => $this->title,
            'parent_id' => $this->parentId === '' ? null : $this->parentId,
            'is_link' => $this->linkType === 'manual' ? 1 : 0,
            'is_file' => $this->linkType === 'file' ? 1 : 0,
        ];

        if ($this->linkType === 'page') {
            $data['link'] = $this->pageId;
            $data['is_link'] = 0;
            $data['is_file'] = 0;
        } elseif ($this->linkType === 'manual') {
            $data['link'] = $this->link;
            $data['is_link'] = 1;
            $data['is_file'] = 0;
        } elseif ($this->linkType === 'file' && $this->file) {
            // Store the file and get its path
            $path = $this->file->store('public/menu_files');
            $data['link'] = str_replace('public/', 'storage/', $path);
            $data['is_link'] = 0;
            $data['is_file'] = 1;
        }

        Menu::updateOrCreate(
            ['id' => $this->menuId],
            $data
        );

        $this->resetInputFields();
        $this->loadMenus(); // Refresh the menu list
    }

    public function editMenu($id)
    {
        $menu = Menu::find($id);
        $this->menuId = $menu->id;
        $this->title = $menu->title;

        if ($menu->is_file) {
            $this->linkType = 'file';
        } elseif (Page::where('slug', $menu->link)->exists()) {
            $this->linkType = 'page';
            $this->pageId = $menu->link;
        } else {
            $this->linkType = 'manual';
            $this->link = $menu->link;
        }

        $this->parentId = $menu->parent_id;
    }

    public function deleteMenu($id)
    {
        Menu::find($id)->delete();
        $this->loadMenus(); // Refresh the menu list
    }

    private function loadMenus()
    {
        $this->menus = Menu::whereNull('parent_id')->with('allChildren')->get();
    }

    private function resetInputFields()
    {
        $this->menuId = null;
        $this->title = '';
        $this->link = '';
        $this->linkType = 'manual';
        $this->parentId = null;
        $this->pageId = null;
    }
}
