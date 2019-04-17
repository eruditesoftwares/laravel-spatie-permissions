  <aside class="sidebar">
                <div class="scrollbar-inner">
                    <ul class="navigation">
                        <li class="navigation__active"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="navigation__active"><a href="{{route('user.index')}}"><i class="zmdi zmdi-accounts"></i> Users</a></li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-globe-lock"></i>Roles & Permissions</a>
                            <ul>
                                <li><a href="{{route('role.index')}}">Roles</a></li>
                                <li><a href="{{route('permission.index')}}">Permissions</a></li>
                            </ul>
                        </li>
                        <li class="navigation__active"><a href="{{route('todo.index')}}"><i class="zmdi zmdi-check-all"></i> ToDo List</a></li>
                    </ul>
                </div>
            </aside>
