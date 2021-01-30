<ul>
    @foreach ($pages as $page)
        <li>{{ $page->title }}</li>
        <ul>
        @foreach ($page->childrenpages as $childpage)
            @include('child_category', ['child_category' => $childpage])
        @endforeach
        </ul>
    @endforeach
</ul>