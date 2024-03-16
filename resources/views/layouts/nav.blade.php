<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId" role="tablist">
    {{-- <li class="nav-item">
        <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
    </li> --}}

    <li class="nav-item ms-4 mt-3" role="presentation">
        <a href="{{ route('users.index') }}" class="nav-link  pe-auto">users</a>
    </li>
    <li class="nav-item ms-4 mt-3" role="presentation">
        <a href="{{ route('todos.index') }}" class="nav-link pe-auto ">todos</a>
    </li>
    <li class="nav-item ms-4 mt-3" role="presentation">
        <a href="{{ route('posts.index') }}" class="nav-link pe-auto ">posts</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

    </div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>
<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
    // var triggerEl = document.querySelector("#navId a");
    // bootstrap.Tab.getInstance(triggerEl).show();
    // Select tab by name
    // const triggerTabList = document.querySelectorAll('#navId a')
    // triggerTabList.forEach(triggerEl => {
    //     const tabTrigger = new bootstrap.Tab(triggerEl)

    //     triggerEl.addEventListener('click', event => {
    //         event.preventDefault()
    //         tabTrigger.show()
    //     })
    // })
</script>
