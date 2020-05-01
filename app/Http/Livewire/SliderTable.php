<?php

namespace App\Http\Livewire;

use App\Slider;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class SliderTable extends TableComponent
{

    public $checkbox_side = 'left';
    public $per_page = 3;
    public $header_view = 'livewire.slider-create';

    public function query()
    {
        return Slider::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Title')->searchable()->sortable(),
            Column::make('Content')->searchable()->sortable(),
            Column::make('Created At')->searchable()->sortable(),
            Column::make('Updated At')->searchable()->sortable(),
            // Column::make('Actions')->view('admin.slider.buttons'),
        ];
    }


}
