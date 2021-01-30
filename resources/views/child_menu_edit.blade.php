@if($child_category->level == 1 || $child_category->level == 2)
<option value="{{ $child_category->id }}" @if($child_category->id == $page->parent_id) selected @endif>
    @for($i=1;$i<=$child_category->level;$i++) - @endfor    {{ $child_category->title }}
</option>

@if ($child_category->pages)
        @foreach ($child_category->pages as $childCategory)
            @include('child_menu', ['child_category' => $childCategory])
        @endforeach
    
@endif
@endif