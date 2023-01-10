<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CurriculamIndex extends Component
{
    public function render()
    {
        $courses = Course::with('curriculumns')->get();
        return view('livewire.curriculam-index', [
            'courses' =>$courses,
        ]);
    }
}
