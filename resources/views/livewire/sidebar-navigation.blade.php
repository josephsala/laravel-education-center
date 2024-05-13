<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">

<div>
    <aside :class="{ 'sm:left-0': !close, 'sm:left-[-16rem]': close }"
        class="sm:flex sm:flex-col sm:items-center py-10 h-full w-[16rem] fixed top-0 left-[-16rem] sm:left-0 bg-[#4e0808c0] transition-all ease-in-out duration-300">
        <div class="flex items-center justify-center mb-10">

    </div>
        <div class="flex flex-col h-full w-full justify-between font-bold">
            <ul class="flex flex-col gap-4 justify-center items-start">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-red-600 white-gradient' : 'text-white hover:text-red-400' }}  ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">

                        <span>Dashboard</span>
                    </li>
                </a>
               
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('user-management') }}"
                        class="{{ request()->routeIs('user-management') ? 'text-red-600 white-gradient' : 'text-white hover:text-red-400' }}ease-in duration-200 w-full gradient-box flex items-center pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class="bx bx-user-detail text-2xl"></i>
                            </span>
                            <span>User Management</span>
                        </li>
                    </a>
                @endif
            </ul>

            <ul class="flex flex-col gap-4 justify-center items-start">
                <a href="{{ route('profile.show') }}"
                    class="{{ request()->routeIs('profile.show') ? 'text-red-600 white-gradient' : 'text-white hover:text-red-400' }} ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-start gap-2">
                        <span>
                            <i class="bx bx-user
                            text-2xl"></i>
                        </span>
                        <span>Settings</span>
                    </li>
                </a>
                <form method="POST" action="{{ route('logout') }}" x-data
                    class="text-red-400 transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="w-full">
                        <li class="py-3 flex items-start gap-2">
                            @csrf
                            <span>
                                <i class="bx bx-log-out text-2xl"></i>
                            </span>
                            <span>Log Out</span>
                        </li>
                    </a>
                </form>
            </ul>
        </div>
    </aside>
</div>
