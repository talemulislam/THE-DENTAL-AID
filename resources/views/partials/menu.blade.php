<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.auditLog.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('task_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
                        {{ trans('cruds.taskManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('task_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-statuses.index") }}" class="nav-link {{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-tags.index") }}" class="nav-link {{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks.index") }}" class="nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.task.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('tasks_calendar_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks-calendars.index") }}" class="nav-link {{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-calendar nav-icon">

                                    </i>
                                    {{ trans('cruds.tasksCalendar.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('hospital_access')
                <li class="nav-item">
                    <a href="{{ route("admin.hospitals.index") }}" class="nav-link {{ request()->is('admin/hospitals') || request()->is('admin/hospitals/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.hospital.title') }}
                    </a>
                </li>
            @endcan
            @can('patient_access')
                <li class="nav-item">
                    <a href="{{ route("admin.patients.index") }}" class="nav-link {{ request()->is('admin/patients') || request()->is('admin/patients/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.patient.title') }}
                    </a>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>