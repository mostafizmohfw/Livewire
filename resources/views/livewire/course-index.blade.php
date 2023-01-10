<div>

    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Sl </th>
            <th class="border px-4 py-2 text-left">Name </th>
            <th class="border px-4 py-2 text-left">Description </th>
            <th class="border px-4 py-2 text-left">Class </th>
            <th class="border px-4 py-2 text-left">Price</th>
            <th class="border px-4 py-2">Enrolled</th>
            <th class="border px-4 py-2">Action</th>
        </tr>
        @php
            $i=1;
        @endphp
        @foreach ($courses as $course)
            <tr >
                <td class="border px-4 py-2">{{ $i++ }}</td>
                <td class="border px-4 py-2">{{ $course->name }}</td>
                <td class="border px-4 py-2">{{ $course->description }}</td>
                <td class="border px-4 py-2">{{ count($course->curriculumns) }}</td>
                <td class="border px-4 py-2">${{ $course->price }}</td>
                <td class="border px-4 py-2 text-center">{{ date('F j, Y',strtotime($course->created_at)) }}</td>
                <td class="border px-4 py-2 text-center">
                   <div class="flex items-center justify-center">
                    <a href="{{ route('course.edit',$course->id) }}">
                        @include('components.icons.edit')
                       </a>

                       <a class="px-2" href="">
                        @include('components.icons.eye')
                       </a>

                       <form onsubmit="return confirm('Are you sure?');" wire:submit.prevent="courseDelete({{ $course->id }})">
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
