<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Attendance Overview</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<style>
  body { font-family: 'Inter', system-ui, sans-serif; }
</style>
</head>
<body class="min-h-screen bg-[#1B3A6B] text-slate-200">

  <!-- HEADER: now OUTSIDE the max-w-7xl container, so it's truly full width edge-to-edge -->
  <header class="w-full h-[150px] bg-[#132B52] flex items-center justify-between pl-[1px] pr-[5px] border-b border-white/5 shadow-[0_1px_0_rgba(255,255,255,.03)_inset] sticky top-0 z-[1000]">

    <!-- Left -->
    <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" class="h-[86px] w-auto object-contain block" alt="Header Logo">
    </div>

    <div class="flex items-center gap-7">
        <nav class="flex items-center gap-px">

            <div class="relative group">
                <a href="/dashboard" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
                    Dashboard
                </a>
            </div>

            <div class="relative group">
                <a href="#" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
                    Workforce
                    <svg class="w-3.5 h-3.5 opacity-80 transition-transform duration-300 origin-center group-hover:rotate-180 group-hover:opacity-100" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <div class="absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-[#132B52] rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 z-[999] group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                    <a href="{{ route('employees.index') }}" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Employee List</a>
                    <a href="{{ route('departments.index') }}" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Department List</a>
                </div>
            </div>

            <div class="relative group">
                <a href="{{ route('onboarding.step1') }}" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
                    Employee Onboarding
                </a>
            </div>

            <div class="relative group">
                <a href="#" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
                    Reports and Analytics
                    <svg class="w-3.5 h-3.5 opacity-80 transition-transform duration-300 origin-center group-hover:rotate-180 group-hover:opacity-100" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-[#132B52] rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 z-[999] group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                    <a href="/reports-analytics/attendance-overview" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Attendance Record</a>
                    <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Leave Record</a>
                </div>
            </div>

            <div class="relative group">
                <a href="#" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
                    Leave Management
                </a>
                <div class="absolute top-[120%] left-1/2 -translate-x-1/2 translate-y-2.5 w-[220px] bg-[#132B52] rounded-[18px] shadow-[0_20px_45px_rgba(0,0,0,.25),inset_0_1px_0_rgba(21,21,21,.7)] p-2.5 opacity-0 invisible transition-all duration-300 z-[999] group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                    <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder 1</a>
                    <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder 2</a>
                    <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder 3</a>
                </div>
            </div>

        </nav>

        <div class="w-11 h-11 mr-[15px] rounded-full grid place-items-center bg-white/[.06] shadow-[inset_0_0_0_1px_rgba(255,255,255,.06)] " aria-label="Profile">
            <svg class="w-10 h-10" viewBox="0 0 36 36" fill="none">
                <circle cx="18" cy="18" r="17" fill="white" opacity=".97"/>
                <circle cx="18" cy="13" r="5.2" fill="#223B63"/>
                <path d="M8.8 28.3C10.7 23.8 14.1 21.7 18 21.7C21.9 21.7 25.3 23.8 27.2 28.3" fill="#223B63"/>
            </svg>
        </div>
    </div>
  </header>

  <!-- PAGE CONTENT: full width now, just a bit of side padding so it isn't glued to the edges -->
  <div class="w-full px-6 py-8">

    <!-- Header -->
    <div class="mb-6">
      <h1 class="text-xl font-semibold text-white">Attendance Overview</h1>
      <p class="mt-1 text-sm text-slate-400">Track attendance status of all employees for the selected period.</p>
    </div>

    <!-- Stat cards (values filled in by JS) -->
    <div class="mb-6 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
      <div class="flex items-center gap-4 rounded-xl bg-[#111a3a] px-5 py-4 ring-1 ring-white/5">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-sky-500/15">
          <i class="fa-solid fa-users text-sky-300"></i>
        </div>
        <div class="min-w-0">
          <div id="stat-total" class="text-2xl font-semibold leading-tight text-white">0</div>
          <div class="truncate text-xs text-slate-400">Total Employee</div>
        </div>
      </div>

      <div class="flex items-center gap-4 rounded-xl bg-[#111a3a] px-5 py-4 ring-1 ring-white/5">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-500/15">
          <i class="fa-regular fa-clock text-emerald-300"></i>
        </div>
        <div class="min-w-0">
          <div id="stat-present" class="text-2xl font-semibold leading-tight text-white">0 Days</div>
          <div class="truncate text-xs text-slate-400">Present</div>
        </div>
      </div>

      <div class="flex items-center gap-4 rounded-xl bg-[#111a3a] px-5 py-4 ring-1 ring-white/5">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-amber-500/15">
          <i class="fa-solid fa-clock text-amber-300"></i>
        </div>
        <div class="min-w-0">
          <div id="stat-late" class="text-2xl font-semibold leading-tight text-white">0</div>
          <div class="truncate text-xs text-slate-400">Late</div>
        </div>
      </div>

      <div class="flex items-center gap-4 rounded-xl bg-[#111a3a] px-5 py-4 ring-1 ring-white/5">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-rose-500/15">
          <i class="fa-solid fa-clock-rotate-left text-rose-300"></i>
        </div>
        <div class="min-w-0">
          <div id="stat-absent" class="text-2xl font-semibold leading-tight text-white">0</div>
          <div class="truncate text-xs text-slate-400">Absent</div>
        </div>
      </div>

      <div class="flex items-center gap-4 rounded-xl bg-[#111a3a] px-5 py-4 ring-1 ring-white/5">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-indigo-500/15">
          <i class="fa-regular fa-calendar-days text-indigo-300"></i>
        </div>
        <div class="min-w-0">
          <div id="stat-leave" class="text-2xl font-semibold leading-tight text-white">0</div>
          <div class="truncate text-xs text-slate-400">On Leave</div>
        </div>
      </div>
    </div>

    <!-- Toolbar -->
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
      <div class="flex flex-wrap items-center gap-3">
        <button class="flex items-center gap-2 rounded-lg border border-white/10 bg-[#0f1732] px-3 py-2 text-sm text-slate-300 hover:border-white/20">
          <i class="fa-regular fa-calendar text-slate-500"></i>
          01 May 2026 - 31 May 2026
          <i class="fa-solid fa-chevron-down text-xs text-slate-500"></i>
        </button>

        <select id="department-filter"
          class="appearance-none rounded-lg border border-white/10 bg-[#0f1732] px-3 py-2 text-sm text-slate-300 hover:border-white/20 focus:outline-none">
          <option value="All Departments">All Departments</option>
        </select>

        <select id="location-filter"
          class="appearance-none rounded-lg border border-white/10 bg-[#0f1732] px-3 py-2 text-sm text-slate-300 hover:border-white/20 focus:outline-none">
          <option value="All Locations">All Locations</option>
          <option value="Head Office">Head Office</option>
          <option value="Branch North">Branch North</option>
          <option value="Branch South">Branch South</option>
        </select>
      </div>

      <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 rounded-lg border border-white/10 bg-[#0f1732] px-3 py-2 text-sm text-slate-300 hover:border-white/20">
          <i class="fa-solid fa-arrow-up-from-bracket"></i>
          Export
        </button>
        <button class="flex items-center gap-2 rounded-lg bg-sky-500 px-4 py-2 text-sm font-medium text-white hover:bg-sky-400">
          <i class="fa-solid fa-filter"></i>
          Filter
        </button>
      </div>
    </div>

    <!-- Table -->
    <div class="overflow-hidden rounded-xl bg-[#0f1732] ring-1 ring-white/5">
      <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
          <thead>
            <tr class="border-b border-white/5 text-xs uppercase tracking-wide text-slate-500">
              <th class="px-5 py-2 font-medium">Employee</th>
              <th class="px-5 py-2 font-medium">Department</th>
              <th class="px-5 py-2 font-medium">Present Days</th>
              <th class="px-5 py-2 font-medium">Late Days</th>
              <th class="px-5 py-2 font-medium">Absent Days</th>
              <th class="px-5 py-2 font-medium">On Leave</th>
              <th class="px-5 py-2 font-medium">Attendance %</th>
              <th class="px-5 py-2 font-medium">Status</th>
              <th class="px-5 py-2 font-medium">Action</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <!-- rows injected by JS -->
          </tbody>
        </table>
      </div>

      <!-- Footer / pagination -->
      <div class="flex flex-wrap items-center justify-between gap-3 border-t border-white/5 px-5 py-3">
        <span id="data-as-of" class="text-xs text-slate-500">Data as of: —</span>
        <div id="pagination" class="flex items-center gap-1"></div>
      </div>
    </div>

  </div>

<script>
  // ---------------------------------------------------------------------
  // Dynamic data — replace this array with the response from your API
  // (e.g. fetch('/api/attendance').then(r => r.json())) and re-render.
  // Every stat card, table row, filter option, and pagination number is
  // derived from this data, so swapping it out is all you need to do.
  // ---------------------------------------------------------------------
  let EMPLOYEES = [
    { id: "EMP00123", name: "James Nas",   department: "Finance",   present: 20,   late: 0,   absent: 0,    onLeave: 10, status: "Active" },
    { id: "EMP00124", name: "Daniol Mar",  department: "Finance",   present: 20,   late: 19,  absent: 0,    onLeave: 0,  status: "Inactive" },
    { id: "EMP00125", name: "Rey Evidor",  department: "Inventory", present: 1,    late: 1,   absent: 0,    onLeave: 0,  status: "Active" },
    { id: "EMP00126", name: "Lux Nash",    department: "Finance",   present: 0,    late: 0,   absent: 1000, onLeave: 5,  status: "Inactive" },
    { id: "EMP00127", name: "Tiles Iam",   department: "ITSM",      present: 21,   late: 21,  absent: 0,    onLeave: 0,  status: "Active" },
    { id: "EMP00128", name: "Silvi Silva", department: "HR",        present: 23,   late: 23,  absent: 45,   onLeave: 10, status: "Active" },
    { id: "EMP00129", name: "Woo WAA",     department: "B.I",       present: 3,    late: 0,   absent: 0,    onLeave: 0,  status: "Inactive" },
    { id: "EMP00130", name: "Ihh OHH",     department: "Finance",   present: 1000, late: 0,   absent: 0,    onLeave: 0,  status: "Active" },
    { id: "EMP00131", name: "Derek Ram",   department: "ITSM",      present: 267,  late: 200, absent: 150,  onLeave: 15, status: "Active" },
  ];

  const PAGE_SIZE = 9;
  let currentPage = 1;
  let filters = { department: "All Departments", location: "All Locations" };

  function attendancePct(row) {
    const totalDays = row.present + row.absent;
    if (totalDays === 0) return 0;
    return (row.present / totalDays) * 100;
  }

  function populateDepartmentOptions() {
    const select = document.getElementById("department-filter");
    const depts = ["All Departments", ...new Set(EMPLOYEES.map(e => e.department))];
    select.innerHTML = depts.map(d => `<option value="${d}">${d}</option>`).join("");
  }

  function getFiltered() {
    return EMPLOYEES.filter(e =>
      (filters.department === "All Departments" || e.department === filters.department)
      // wire a real "location" field on your employee objects to filter by location too
    );
  }

  function renderStats() {
    document.getElementById("stat-total").textContent = EMPLOYEES.length;
    document.getElementById("stat-present").textContent = EMPLOYEES.reduce((s, e) => s + e.present, 0) + " Days";
    document.getElementById("stat-late").textContent = EMPLOYEES.filter(e => e.late > 0).length;
    document.getElementById("stat-absent").textContent = EMPLOYEES.filter(e => e.absent > 0).length;
    document.getElementById("stat-leave").textContent = EMPLOYEES.reduce((s, e) => s + e.onLeave, 0);
  }

  function statusPillHtml(status) {
    const isActive = status === "Active";
    const classes = isActive
      ? "bg-emerald-500/15 text-emerald-400"
      : "bg-slate-500/20 text-slate-400";
    return `<span class="inline-flex items-center rounded-md px-2.5 py-0.5 text-xs font-medium ${classes}">${status.toUpperCase()}</span>`;
  }

  function renderTable() {
    const filtered = getFiltered();
    const totalPages = Math.max(1, Math.ceil(filtered.length / PAGE_SIZE));
    if (currentPage > totalPages) currentPage = totalPages;
    const start = (currentPage - 1) * PAGE_SIZE;
    const pageRows = filtered.slice(start, start + PAGE_SIZE);

    const tbody = document.getElementById("table-body");

    if (pageRows.length === 0) {
      tbody.innerHTML = `
        <tr>
          <td colspan="9" class="px-5 py-10 text-center text-slate-500">
            No employees match the selected filters.
          </td>
        </tr>`;
    } else {
      tbody.innerHTML = pageRows.map(row => `
        <tr class="border-b border-white/5 last:border-none hover:bg-white/[0.03]">
          <td class="px-5 py-2">
            <div class="flex items-center gap-2.5">
              <i class="fa-regular fa-circle-user text-xl text-slate-500"></i>
              <div>
                <div class="font-medium text-white leading-tight">${row.name}</div>
                <div class="text-xs text-slate-500 leading-tight">${row.id}</div>
              </div>
            </div>
          </td>
          <td class="px-5 py-2 text-slate-300">${row.department}</td>
          <td class="px-5 py-2 text-slate-300">${row.present}</td>
          <td class="px-5 py-2 text-slate-300">${row.late}</td>
          <td class="px-5 py-2 text-slate-300">${row.absent}</td> 
          <td class="px-5 py-2 text-slate-300">${row.onLeave}</td>
          <td class="px-5 py-2 text-slate-300">${attendancePct(row).toFixed(2)}%</td>
          <td class="px-5 py-2">${statusPillHtml(row.status)}</td>
          <td class="px-5 py-2">
            <button
  class="rounded-md border border-white/10 px-3 py-1 text-xs text-slate-300 hover:border-white/30"
  onclick="window.location.href='employee-attendance'">
  View
</button>
          </td>
        </tr>
      `).join("");
    }

    renderPagination(totalPages);

    document.getElementById("data-as-of").textContent =
      "Data as of: " + new Date().toLocaleString("en-US", {
        month: "short", day: "numeric", year: "numeric", hour: "numeric", minute: "2-digit"
      });
  }

  function renderPagination(totalPages) {
    const el = document.getElementById("pagination");
    let html = `
      <button onclick="goToPage(${currentPage - 1})" ${currentPage === 1 ? "disabled" : ""}
        class="flex h-7 w-7 items-center justify-center rounded-md text-slate-400 hover:bg-white/5 disabled:opacity-30">
        <i class="fa-solid fa-chevron-left text-xs"></i>
      </button>`;

    const pagesToShow = Math.min(totalPages, 3);
    for (let p = 1; p <= pagesToShow; p++) {
      html += `
        <button onclick="goToPage(${p})"
          class="flex h-7 w-7 items-center justify-center rounded-md text-xs ${p === currentPage ? "bg-sky-500 text-white" : "text-slate-400 hover:bg-white/5"}">
          ${p}
        </button>`;
    }
    if (totalPages > 3) {
      html += `<span class="px-1 text-slate-500">...</span>`;
    }

    html += `
      <button onclick="goToPage(${currentPage + 1})" ${currentPage === totalPages ? "disabled" : ""}
        class="flex h-7 w-7 items-center justify-center rounded-md text-slate-400 hover:bg-white/5 disabled:opacity-30">
        <i class="fa-solid fa-chevron-right text-xs"></i>
      </button>`;

    el.innerHTML = html;
  }

  function goToPage(p) {
    if (p < 1) return;
    currentPage = p;
    renderTable();
  }

  function viewEmployee(id) {
    // hook this up to your actual employee detail page / route
    console.log("View employee", id);
  }

  document.getElementById("department-filter").addEventListener("change", (e) => {
    filters.department = e.target.value;
    currentPage = 1;
    renderTable();
  });

  document.getElementById("location-filter").addEventListener("change", (e) => {
    filters.location = e.target.value;
    currentPage = 1;
    renderTable();
  });

  // Initial render
  populateDepartmentOptions();
  renderStats();
  renderTable();
</script>

</body>
</html>