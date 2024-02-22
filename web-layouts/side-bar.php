<div class="vertical-menu" style="display: flex; flex-direction: column;">
    <div data-simplebar class="h-100" style="position: relative;">
        <!-- Sidemenu -->
        <div id="sidebar-menu" style="display: flex; flex-direction: column;">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title text-white" key="t-menu">Menu</li>

                <li>
                    <a href="<?php echo $url;?>index.php" style="display: flex; align-items: center; text-decoration: none;">
                        <i class="bx bx-home-circle text-white" style="margin-right: 10px;"></i>
                        <span key="" class="text-white">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $url;?>web-pages/visitor/visitor.php" key="t-tui-calendar" style="display: flex; align-items: center; text-decoration: none;">
                        <i class="bx bxs-user-detail text-white" style="margin-right: 10px;"></i>
                        <span key="" class="text-white">New Register Customer</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $url;?>web-pages/department/department.php" key="t-tui-calendar" style="display: flex; align-items: center; text-decoration: none;">
                        <i class="bx bx-box text-white" style="margin-right: 10px;"></i>
                        <span key="" class="text-white">Branches</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $url;?>web-pages/service/service.php" style="display: flex; align-items: center; text-decoration: none;">
                        <i class="bx bx-file text-white" style="margin-right: 10px;"></i>
                        <span key="" class="text-white">Services</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $url;?>web-pages/devision/devision.php" style="display: flex; align-items: center; text-decoration: none;">
                        <i class="bx bx-sitemap text-white" style="margin-right: 10px;"></i>
                        <span key="" class="text-white">Divisions</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <!-- Logout Button -->
        <a href="<?php echo $url;?>logout.php" class="logout-button" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; justify-content: center; align-items: center; text-align: center; text-decoration: none; border-radius: 50%; width: 40px; height: 40px;  solid white;">
            <i class="bx bx-log-out" style="color: white; font-size: 24px;"> LOGOUT</i>
        </a>
    </div>
</div>
