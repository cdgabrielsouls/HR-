<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        navy: {
                            body: '#18386d',
                            topbar: '#132B52',
                            input: '#0B1E3D',
                            thead: '#18376d',
                            hover: '#21457f',
                            dropdown: '#1B3A6B',
                            btnhover: '#2e5ca3',
                        },
                        accent: {
                            blue: '#66A6FF',
                            lightblue: '#4f8cff',
                            text: '#C9DAF8',
                            placeholder: '#93abd3',
                            male: '#6ea9ff',
                            female: '#ff8bd2',
                            nodata: '#b9c8e8',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Autofill override (not expressible via Tailwind utilities) */
        .search-box input:-webkit-autofill,
        .search-box input:-webkit-autofill:hover,
        .search-box input:-webkit-autofill:focus,
        .search-box input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 1000px #0B1E3D inset !important;
            -webkit-text-fill-color: #fff !important;
            transition: background-color 9999s ease-in-out 0s;
            color: #fff !important;
            font-size: 11px !important;
        }

        /* Dropdown hover behavior (needs sibling combinator beyond group-hover simplicity for nested SVG rotate + menu show, handled via group utilities below, but keep as safety net) */
        .nav-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .nav-dropdown:hover .nav-arrow {
            transform: rotate(180deg);
            opacity: 1;
        }

        /* Custom select arrow (kept since Tailwind doesn't ship this exact inline svg utility) */
        .filter-box select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M3.204 5h9.592L8 10.481 3.204 5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 14px;
        }
    </style>
</head>

<body class="m-0 p-0 bg-navy-body text-white font-sans">

    <!-- =====================================================
        TOP NAVBAR
    ====================================================== -->
    <header class="topbar h-[120px] bg-navy-topbar border-b border-white/[.03] shadow-[0_1px_0_rgba(255,255,255,.03)_inset] flex items-center justify-between pl-[1px] pr-5 z-10">

        <!-- Left -->
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="h-[86px] w-auto object-contain block" alt="Header Logo">
        </div>

        <div class="flex items-center gap-7">
            <nav class="flex items-center gap-px">

                <div class="nav-dropdown relative">
                    <a href="dashboard"
                        class="flex items-center gap-2 text-white no-underline text-base py-2.5 px-[18px] rounded-full transition-all duration-200 ease-in-out hover:text-accent-blue hover:bg-navy-dropdown hover:-translate-y-px hover:font-bold active:scale-[.97]">
                        Dashboard
                    </a>
                </div>

                <div class="nav-dropdown relative">
                    <a href="#"
                        class="flex items-center gap-2 text-white no-underline text-base py-2.5 px-[18px] rounded-full transition-all duration-200 ease-in-out hover:text-accent-blue hover:bg-navy-dropdown hover:-translate-y-px hover:font-bold active:scale-[.97]">
                        Workforce
                        <svg class="nav-arrow w-3.5 h-3.5 opacity-80 transition-transform duration-300 ease-in-out" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                    <div class="dropdown-menu absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-navy-topbar rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 ease-in-out z-[999]">
                        <a href="{{ route('employees.index') }}"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Employee
                            List</a>
                        <a href="{{ route('departments.index') }}"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Department
                            List</a>
                    </div>
                </div>

                <div class="nav-dropdown relative">
                    <a href="#"
                        class="flex items-center gap-2 text-white no-underline text-base py-2.5 px-[18px] rounded-full transition-all duration-200 ease-in-out hover:text-accent-blue hover:bg-navy-dropdown hover:-translate-y-px hover:font-bold active:scale-[.97]">
                        Employee Onboarding
                        <svg class="nav-arrow w-3.5 h-3.5 opacity-80 transition-transform duration-300 ease-in-out" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="dropdown-menu absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-navy-topbar rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 ease-in-out z-[999]">
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            1</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            2</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            3</a>
                    </div>
                </div>

                <div class="nav-dropdown relative">
                    <a href="#"
                        class="flex items-center gap-2 text-white no-underline text-base py-2.5 px-[18px] rounded-full transition-all duration-200 ease-in-out hover:text-accent-blue hover:bg-navy-dropdown hover:-translate-y-px hover:font-bold active:scale-[.97]">
                        Reports and Analytics
                    </a>
                    <div class="dropdown-menu absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-navy-topbar rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 ease-in-out z-[999]">
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            1</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            2</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            3</a>
                    </div>
                </div>

                <div class="nav-dropdown relative">
                    <a href="#"
                        class="flex items-center gap-2 text-white no-underline text-base py-2.5 px-[18px] rounded-full transition-all duration-200 ease-in-out hover:text-accent-blue hover:bg-navy-dropdown hover:-translate-y-px hover:font-bold active:scale-[.97]">
                        Leave Management
                    </a>
                    <div class="dropdown-menu absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-navy-topbar rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 ease-in-out z-[999]">
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            1</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            2</a>
                        <a href="#"
                            class="block no-underline text-accent-text py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder
                            3</a>
                    </div>
                </div>

            </nav>

            <div class="w-11 h-11 rounded-full grid place-items-center bg-white/[.06] shadow-[inset_0_0_0_1px_rgba(255,255,255,.06)]"
                aria-label="Profile">
                <svg viewBox="0 0 36 36" fill="none" class="w-10 h-10">
                    <circle cx="18" cy="18" r="17" fill="white" opacity=".97" />
                    <circle cx="18" cy="13" r="5.2" fill="#223B63" />
                    <path d="M8.8 28.3C10.7 23.8 14.1 21.7 18 21.7C21.9 21.7 25.3 23.8 27.2 28.3" fill="#223B63" />
                </svg>
            </div>
        </div>
    </header>

    <div class="w-full max-w-[1600px] mx-auto px-3.5 pt-0 pb-0.5">

        <form method="GET" action="{{ route('employees.index') }}"
            class="flex items-center gap-5 pt-2.5 pb-2.5 flex-col md:flex-row">

            <div class="search-box w-full md:w-[387px] h-9 bg-navy-input rounded-lg flex items-center px-3 opacity-70">
                <i class="fa-solid fa-magnifying-glass text-accent-placeholder mr-2 text-[8.7px]"></i>
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Search employees by ID or name"
                    class="w-full h-full bg-transparent border-none outline-none text-white text-[10px] placeholder:text-accent-placeholder">
            </div>

            <div class="filter-box w-full md:w-auto">
                <select name="filter" onchange="this.form.submit()"
                    class="w-full md:w-36 h-9 bg-navy-input opacity-70 text-accent-placeholder border-none outline-none rounded-lg px-3.5 text-[9.7px] cursor-pointer">
                    <option value="">Filter by Type</option>
                    <option value="HR" {{ request('filter') == 'HR' ? 'selected' : '' }}>HR</option>
                    <option value="Finance" {{ request('filter') == 'Finance' ? 'selected' : '' }}>Finance</option>
                    <option value="IT" {{ request('filter') == 'IT' ? 'selected' : '' }}>IT</option>
                    <option value="Production" {{ request('filter') == 'Production' ? 'selected' : '' }}>Production
                    </option>
                </select>
            </div>

        </form>
    </div>

    <!-- WELCOME SECTION -->
    <div class="w-[98%] mx-auto mt-2.5 mb-5 py-2.5 px-1">
        <h1 class="text-[22px] font-bold tracking-[2px] text-white mb-1.5">{{ strtoupper($departmentName) }}</h1>
        <p class="text-[12.5px] text-accent-text leading-relaxed max-w-[900px]">
            The Business Management Department oversees daily operations, coordinates business activities,
            and ensures resources and processes are managed efficiently to support the organization's goals.
        </p>
    </div>

    <!-- =========================
        TABLE
    ========================== -->

    <!-- Header -->
    <div class="w-[98%] mx-auto mb-3 grid grid-cols-[21.5%_21.5%_21.5%_21.5%_15%] bg-navy-input border border-white/[.15] rounded-[10px] overflow-hidden">
        <div class="py-2.5 px-[18px] text-center text-[11.9px] font-light uppercase tracking-[.5px] text-white border-r border-white/[.15]">
            Employee ID</div>
        <div class="py-2.5 px-[18px] text-center text-[11.9px] font-light uppercase tracking-[.5px] text-white border-r border-white/[.15]">
            Name</div>
        <div class="py-2.5 px-[18px] text-center text-[11.9px] font-light uppercase tracking-[.5px] text-white border-r border-white/[.15]">
            Position</div>
        <div class="py-2.5 px-[18px] text-center text-[11.9px] font-light uppercase tracking-[.5px] text-white border-r border-white/[.15]">
            Status</div>
        <div class="py-2.5 px-[18px] text-center text-[11.9px] font-light uppercase tracking-[.5px] text-white">
            Action</div>
    </div>

    <!-- Data -->
    <div class="w-[98%] mx-auto bg-navy-input rounded-[10px] overflow-hidden overflow-x-auto">

        <table class="w-full table-fixed border-collapse min-w-[900px] md:min-w-0">

            <tbody>

                @forelse($departments as $department)

                <tr class="border-t border-white/[.18] transition-colors duration-200 hover:bg-navy-hover">

                    <td class="py-3.5 px-3.5 text-[11.9px] font-extralight text-center border-r border-white/[.12] w-[23%]">
                        <span class="inline-flex items-center justify-center gap-4">
                            <i class="fa-solid fa-circle-user text-2xl text-accent-male"></i>
                            {{ '2026' . str_pad($department->id, 4, '0', STR_PAD_LEFT) }}
                        </span>
                    </td>

                    <td class="py-3.5 px-3.5 text-[11.9px] font-extralight text-center border-r border-white/[.12] w-[23%]">
                        {{ $department->first_name }} {{ $department->last_name }}</td>

                    <td class="py-3.5 px-3.5 text-[11.9px] font-extralight text-center border-r border-white/[.12] w-[23%]">
                        {{ $department->position }}</td>

                    <td class="py-3.5 px-3.5 text-[11.9px] font-extralight text-center border-r border-white/[.12] w-[23%]">
                        {{ $department->status }}</td>

                    <td class="py-3.5 px-3.5 text-[11.9px] font-extralight text-center w-[15%]">
                        <a href="{{ route('employees.show', $department->id) }}"
                            class="inline-block bg-navy-topbar border-none text-white py-[5px] px-5 rounded-[13px] cursor-pointer text-[9.7px] no-underline transition-all duration-200 hover:bg-navy-btnhover hover:-translate-y-px">
                            View
                        </a>
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="py-7.5 text-center text-accent-nodata text-sm">
                        No employees found.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</body>

</html>
