<nav class="sidebar d-flex flex-direction-column bg-dark fill-height">
    <div class="sidebar-close"><i class="fas fa-bars"></i></div>
    <div class="categories w-100">
        <div class="sidebar-item-title px-3 pt-3">Categories</div>
        <hr/>
        <ul style="margin:0;">
            @foreach ($categories as $category)
                <li><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
