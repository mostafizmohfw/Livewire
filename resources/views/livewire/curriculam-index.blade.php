<div>

    <table class="w-full table-auto">
        <tr>
            <th class="border px-2 py-2 text-left">Sl</th>
            <th class="border px-2 py-2 text-left">Course</th>
            <th class="border px-2 py-2 text-left">Curriculum</th>
            <th class="border px-2 py-2 text-left">Price</th>
            <th class="border px-2 py-2">Enrolled</th>
            <th class="border px-2 py-2">Action</th>
        </tr>
        @php
            $sl=1;
        @endphp
        @foreach ($courses as $course)
            <tr >
                <td class="border px-2 py-2">{{ $sl++ }}</td>
                <td class="border px-2 py-2">{{ $course->name }}</td>
                <td class="border px-2 py-2">
                   <table class="w-full table-auto">
                     @php
                        $i=1;
                    @endphp
                        <tr>
                            <th class="border px-2 py-2 text-left">Class</th>
                            <th class="border px-2 py-2 text-left">Day</th>
                            <th class="border px-2 py-2 text-left">Time</th>
                            <th class="border px-2 py-2 text-left">Date</th>
                        </tr>
                   @foreach ($course->curriculumns as $curriculum)
                        <tr >
                            <td class="border px-2 py-2"> {{ $i++}}. {{ $curriculum->name }}</td>
                            <td class="border px-2 py-2"> {{ $curriculum->class_day }}</td>
                            <td class="border px-2 py-2"> {{ $curriculum->class_time }}</td>
                            <td class="border px-2 py-2"> {{ date('F j, Y',strtotime($curriculum->class_date)) }}</td>
                        </tr>
                   @endforeach 
                   </table>
                </td>
                <td class="border px-2 py-2">${{ $course->price }}</td>
                <td class="border px-2 py-2 text-center">{{ date('F j, Y',strtotime($course->created_at)) }}</td>
                <td class="border px-2 py-2 text-center">
                   <div class="flex items-center justify-center">
                    <a href="{{ route('course.edit',$course->id) }}">
                        @include('components.icons.edit')
                    </a>

                    <a class="px-2" href="">
                        @include('components.icons.eye')
                    </a>

                    <form onsubmit="return confirm('Are you sure?');" wire:submit.prevent="leadDelete({{ $course->id }})">
                        <button type="submit">
                           @include('components.icons.trash')
                        </button>
                    </form>
                   </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>
