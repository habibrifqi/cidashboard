<div class="navigation">
    <ul>
        <li>
            <a href="">
                <span class="icon">
                    <ion-icon name="flame-outline"></ion-icon>
                </span>
                <span class="title">Brand Name</span>
            </a>
        </li>
        <li id="mode" class="mode dr">
            <a href="#">
                <span class="icon">
                    <ion-icon name="git-commit-outline"></ion-icon>
                </span>
                <span class="title">Dark Mode</span>
                <label class="switch">
                    <input type="checkbox" id="toggle">
                    <span class="slider"></span>
                </label>
            </a>
        </li>
        <li class="menu <?= ($active == 'dashboard') ? 'hovered' :' asu' ?>">
            <a href="/">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a> </li>
        <li class="menu">
            <a href="">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Customers</span>
            </a>
        </li>
        <li class="menu">
            <a href="">
                <span class="icon">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Message</span>
                <span class="cc">1</span>
            </a>
        </li>
        <li class="menu <?= ($active == 'produk') ? 'hovered' :' asu' ?>">
            <a href="/produk">
                <span class="icon">
                    <ion-icon name="help-circle-outline"></ion-icon>
                </span>
                <span class="title">Produk</span>

            </a>
        </li>
        <li class="menu">
            <a href="">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Setting</span>
            </a>
        </li>
        <li class="menu">
            <a href="">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Password</span>
            </a>
        </li>
        <li class="menu">
            <a href="">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
            </a>
        </li>
    </ul>
</div>