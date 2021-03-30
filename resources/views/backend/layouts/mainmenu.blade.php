<div class="sidebar" data-image="{{asset('backend/img/sidebar-5.jpg')}}')}}">
    <!--
       Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

       Tip 2: you can also add an image using data-image tag
       -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text">
                Christ Embassy Berlin
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.home')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.event.list')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Events</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="{{route('admin.post.list')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Posts</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="{{'admin.testimony.list'}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>Testimonies</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.submission.list')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Submissions</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.giving.list')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Givings</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.gallery.list')}}">
                    <i class="nc-icon nc-album-2"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="{{route('admin.subscriber.list')}}">
                    <i class="nc-icon nc-album-2"></i>
                    <p>Subscribers</p>
                </a>
            </li>
        </ul>
    </div>
</div>