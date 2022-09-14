<header class="navigation">
    <nav class=" nav-main nav-main-dp " {{-- class={`fixed top-0 left-0 h-16 nav-main ${ inAdminPanel ? " nav-main-ap " : " nav-main-dp "
        }`} --}}>
        <div class="nav-left">
            <div class="logo">
                <a href="/">
                    <img src="/storage/images/as21logo.png" class="h-8" alt="academiasteph21 logo" />
                    <span class="ml-2 text-lg">
                        AcademiaSteph21
                    </span>
                </a>
            </div>
        </div>

        {{-- {(auth || clientAuth) && (
        <Notification userType={auth ? 1 : clientAuth ? 0 : null} />
        )} --}}

        <div {{-- class={ dropNav ? "toggler justify-center" : "toggler justify-between" } onClick={(e)=>
            setdropNav(!dropNav)} --}}>
            {{-- <span class={ dropNav ? "menu-line frwdslash" : "menu-line" }></span>
            <span class={ dropNav ? "menu-line backslash" : "menu-line" }></span> --}}
            {{-- {!dropNav && <span class="menu-line"></span>} --}}
        </div>

        <div class="nav-right">
            {{-- {!auth && !clientAuth ? (
            <> --}}
            <li class=" navlink hover:border-b-2">
                <a href="/#hero">Home</a>
            </li>

            <li class="navlink hover:border-b-2">
                <a href="/#services">Services</a>
            </li>

            <li class="navlink hover:border-b-2">
                <a href="/#contact">Contact</a>
            </li>

            <div class="login-links">
                <a href="{{ route('admin.login.show') }}">Admin</a>

                <a href="{{ route('login') }}">Client</a>
            </div>
            {{-- </>
            ) : (
            <>
                <div class="flex cursor-pointer" onClick={getDashboard}>
                    <div>
                        {auth && loggedInUser.name}
                        {clientAuth && loggedInClient.name}
                    </div>

                    <div class="admin-logout" onClick={logout}>
                        <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </div>
                </div>
            </>
            )} --}}
        </div>
    </nav>

    {{-- {dropNav && (
    <div
        id="mobmenu"
        class="flex items-center justify-center mobile-nav sm:hidden animate__animated animate__slideInDown"
    >
        <div class="flex flex-col items-center justify-center mid">
            <li
                class="my-8 navlink hover:border-b-2"
                onClick={(e) => {
                    e.preventDefault();
                    navigateTo("#hero");
                }}
            >
                <a href="/#hero">Home</a>
            </li>
            <li
                class="my-8 navlink hover:border-b-2"
                onClick={(e) => {
                    e.preventDefault();
                    navigateTo("#services");
                }}
            >
                <a href="/#services">Services</a>
            </li>
            <li
                class="my-8 navlink hover:border-b-2"
                onClick={(e) => {
                    e.preventDefault();
                    navigateTo("#contact");
                }}
            >
                <a href="/#contact">Contact</a>
            </li>
        </div>
    </div>
)} --}}
</header>
