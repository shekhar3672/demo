<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Admin') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'contacts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('contacts') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('contacts') }}</p>
        </a>
      </li>
      


      <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('report') }}">
          <i class="material-icons">assignment_return</i>
            <p>{{ __('Reports') }}</p>
        </a>
      </li>

     
    </ul>
  </div>
</div>