<div class="sidebar-module sidebar-module-inset">
    <h4>Last 5 movies</h4>
</div>
<div class="sidebar-module">
    <ul>
        @foreach ($sideBars as $sideBar)
        <li>
        
           <p> {{$sideBar->title}}</p>
        </li>
        @endforeach
    </ul>
</div>
