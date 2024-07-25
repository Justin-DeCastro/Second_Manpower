<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="Admin/assets/img/kaiadmin/logo_light.svg"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
          </li>

          <li class="nav-item">
            <a href="{{ route('dashboard') }}">
                <i class="fas fa-briefcase"></i>
                <p>Dashboard</p>
            </a>
            <a href="{{ route('applications') }}">
                <i class="fas fa-briefcase"></i>
                <p>Job Application</p>
            </a>
            <a href="{{ route('job-fair') }}">
                <i class="fas fa-briefcase"></i>
                <p>Job Fair</p>
            </a>
            <a href="{{ route('calendars') }}">
                <i class="fas fa-calendar-alt"></i>
                <p>Calendar</p>
            </a>
            <a href="{{ route('ojt.index') }}">
                <i class="fas fa-user-alt"></i>
                <p>OJT</p>
            </a>
            <a href="{{ route('profile.index') }}">
                <i class="fas fa-user-alt"></i>
                <p>Company Profile</p>
            </a>
            <a href="{{ route('award.index') }}">
                <i class="fas fa-user-alt"></i>
                <p>Award</p>
            </a>
            <a href="{{ route('manpower.index') }}">
                <i class="fas fa-user-alt"></i>
                <p>Manpower Requisition</p>
            </a>
            <a href="{{ route('feedback.form') }}">
                <i class="fas fa-user-alt"></i>
                <p>Testimonials</p>
            </a>
            <a href="{{ route('acredited-company') }}">
                <i class="fas fa-building"></i>

                <p>Acredited Company</p>
            </a>
            <a href="{{ route('joboffer.index') }}">
            <i class="fas fa-briefcase"></i>

                <p>Add Job Offer</p>
            </a>
            <a href="{{ route('bulletin.index') }}">
            <i class="fas fa-briefcase"></i>

                <p>Bulletin Board</p>
            </a>
            <a href="{{ route('executive.index') }}">
            <i class="fas fa-user"></i>

                <p>OUR TEAM</p>
            </a>
        </li>


    </div>
</div>
</div>

