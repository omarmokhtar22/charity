<li>{{ $child_category->title }}</li>
@if ($child_category->pages)
    <ul>
        @foreach ($child_category->pages as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif