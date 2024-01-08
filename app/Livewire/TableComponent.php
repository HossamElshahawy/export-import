<?php

namespace App\Livewire;

use App\Exports\ExportCourse;
use App\Imports\ImportCourse;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class TableComponent extends Component
{
    use WithFileUploads;

    #[Validate('required|mimes:xlsx,xls')]
    public $excel_file;

    public function submitForm()
    {
        Excel::import(new ImportCourse(), $this->excel_file);
        session()->flash('message', 'Excel data imported successfully.');
        $this->reset();
    }

    public function export_excel()
    {
        $filename = 'export.xlsx';
        return Excel::download(new ExportCourse(), $filename);
        session()->flash('message', 'Excel data Exported successfully!');

    }
    public function delete_all(){
        Course::truncate();
        session()->flash('message', 'Table cleared successfully!');
    }

    public function render()
    {
        $courses = Course::all();
        return view('livewire.table-component', compact('courses'));
    }
}
