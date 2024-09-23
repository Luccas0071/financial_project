<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i class="material-icons">grid_view</i>
            </button>

            <div class="sidebar-logo">
                <a href="#">CodzSword</a>
            </div>
        </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="material-icons">person</i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="material-icons">task</i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdow collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="material-icons">verified_user</i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                Login
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                Register
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdow collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="material-icons">space_dashboard</i>
                        <span>Multi Lavel</span>
                    </a>

                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                <span>two links</span>
                            </a>

                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="material-icons">notifications</i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="material-icons">settings</i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">

                <a href="#" class="sidebar-link">
                    <i class="material-icons">logout</i>
                    <span>Logout</span>
                </a>
            </div>



    </aside>

    <div class="main p-3">
        <div class="text-center">
            <h1>Sidebar</h1>
        </div>
    </div>


</div>
