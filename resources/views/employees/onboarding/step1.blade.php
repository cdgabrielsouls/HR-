<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Employee Onboarding</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

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
                        <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder 1</a>
                        <a href="#" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Placeholder 2</a>
                       
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
 
<body class="bg-[#1B3A6B] min-h-screen font-sans">

  <div class="pt-[140px]">
    <!-- Employee Onboarding Content -->

<div class="max-w-6xl mx-auto">

   <!-- Title -->
    <h1 class="text-white text-xl font-bold tracking-wide mb-8">EMPLOYEE ONBOARDING</h1>

    <!-- Step indicator -->
    <div class="flex items-center mb-10 max-w-5xl">
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-blue-500 text-white font-bold shadow-lg shadow-blue-500/40 z-10">1</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4-"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">2</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">3</div>
    <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">4</div>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">

      <!-- Left: form -->
      <div class="flex-1">
        <h2 class="text-white text-sm font-bold tracking-wide mb-4">PERSONAL INFORMATION</h2>

@if ($errors->any())
    <div class="bg-red-500 text-white p-3 rounded">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

       <form
    action="{{ route('onboarding.storeStep1') }}"
    method="POST"
    enctype="multipart/form-data"
    class="space-y-4 max-w-3xl">

    @csrf

          <!-- Name row -->
          <div class="flex items-start gap-4">

  <!-- First Name -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">First Name</label>
    <div class="relative">
     <input
    type="text"
    name="first_name"
        class="w-[220px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 pr-8 outline-none focus:ring-1 focus:ring-blue-500"
      />
    </div>
  </div>

  <!-- Middle Name -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Middle Name</label>
    <div class="relative">
      <input
        type="text" name="middle_name"
        class="w-[220px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 pr-8 outline-none focus:ring-1 focus:ring-blue-500"
      />
    </div>
  </div>

  <!-- Last Name -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Last Name</label>
    <div class="relative">
      <input
        type="text" name="last_name"
        class="w-[220px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 pr-8 outline-none focus:ring-1 focus:ring-blue-500"
      />
    </div>
  </div>

  <!-- Suffix -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Suffix</label>
    <div class="relative">
      <input
        type="text"   name="suffix"
        class="w-[118px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 pr-8 outline-none focus:ring-1 focus:ring-blue-500"
      />
    </div>
  </div>

</div>

          <!-- Gender / Marital / Nationality row -->
       <div class="flex items-start gap-6">
            <div class="flex items-start gap-8">

  <!-- Gender -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Gender</label>
    <select  name="gender" class="w-[253px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 outline-none focus:ring-1 focus:ring-blue-500 appearance-none">
      <option>Male</option>
      <option>Female</option>
      <option>Prefer not to say</option>
    </select>
  </div>

  <!-- Marital Status -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Marital Status</label>
    <select  name="marital_status" class="w-[253px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 outline-none focus:ring-1 focus:ring-blue-500 appearance-none">
      <option></option>
      <option>Single</option>
      <option>Married</option>
      <option>Widowed</option>
    </select>
  </div>

  <!-- Nationality -->
  <div>
    <label class="block text-slate-300 text-xs mb-1">Nationality</label>
    <div class="relative">
      <input
    type="text"
    name="nationality"
        class="w-[253px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 pr-8 outline-none focus:ring-1 focus:ring-blue-500"
      />
    </div>
  </div>

</div>
</div>

          <!-- Address -->
          <div>
            <label class="block text-slate-300 text-xs mb-1">Address</label>
            <div class="relative">
              <input type="text"  name="address" class="w-[825px] bg-[#0d1730] text-white text-sm rounded px-3 py-2 pr-8 outline-none focus:ring-1 focus:ring-blue-500" />
              <svg class="w-3.5 h-3.5 text-slate-400 absolute right-2.5 top-1/2 -translate-y-1/2" fill="currentColor" viewBox="0 0 20 20"><path d="M17.414 2.586a2 2 0 010 2.828l-9.9 9.9a1 1 0 01-.44.263l-4 1.143a.5.5 0 01-.617-.618l1.143-4a1 1 0 01.263-.44l9.9-9.9a2 2 0 012.828 0zM15 4l1 1-9.5 9.5-1.5.429.429-1.5L15 4z"/></svg>
            </div>
          </div>

          <!-- Email / Phone row -->
          <div class="flex items-start gap-6 pt-2">
            <div>
              <label class="block text-slate-300 text-xs mb-1">Email</label>
              <div class="relative">
                <input type="email" name="email" class="w-[452px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 py-2 pr-8 outline-none focus:ring-1 focus:ring-blue-500" />
                <svg class="w-3.5 h-3.5 text-slate-400 absolute right-2.5 top-1/2 -translate-y-1/2" fill="currentColor" viewBox="0 0 20 20"><path d="M17.414 2.586a2 2 0 010 2.828l-9.9 9.9a1 1 0 01-.44.263l-4 1.143a.5.5 0 01-.617-.618l1.143-4a1 1 0 01.263-.44l9.9-9.9a2 2 0 012.828 0zM15 4l1 1-9.5 9.5-1.5.429.429-1.5L15 4z"/></svg>
              </div>
            </div>
            <div>
              <label class="block text-slate-300 text-xs mb-1">Phone Number</label>
              <div class="relative">
                <input type="tel"  name="phone" class="w-[253px] h-[28px] bg-[#0d1730] text-white text-sm rounded px-3 py-2 pr-8 outline-none focus:ring-1 focus:ring-blue-500" />
                <svg class="w-3.5 h-3.5 text-slate-400 absolute right-2.5 top-1/2 -translate-y-1/2" fill="currentColor" viewBox="0 0 20 20"><path d="M17.414 2.586a2 2 0 010 2.828l-9.9 9.9a1 1 0 01-.44.263l-4 1.143a.5.5 0 01-.617-.618l1.143-4a1 1 0 01.263-.44l9.9-9.9a2 2 0 012.828 0zM15 4l1 1-9.5 9.5-1.5.429.429-1.5L15 4z"/></svg>
              </div>
            </div>
          </div>

          <!-- Next button -->
          <div class="pt-8">
           <button
    type="submit"
    class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-6 py-2.5 rounded shadow-lg shadow-blue-900/40 transition">
    NEXT

    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="9"/>
        <path stroke-linecap="round" stroke-linejoin="round" d="M10 8l4 4-4 4"/>
    </svg>
</button>
          </div>
        </form>
      </div>

      <!-- Right: profile image -->
      <div class="flex flex-col items-center pt-2">
        <span class="text-slate-300 text-xs tracking-wide mb-3">PROFILE IMAGE</span>
        <div class="w-[300px] h-[300px] rounded-full bg-sky-300 overflow-hidden">

    <img
        id="imagePreview"
        src=""
        class="w-full h-full object-cover hidden">

    <div
        id="placeholder"
        class="w-full h-full flex items-end justify-center">

        <svg class="w-[280px] h-[280px] text-sky-500"
            fill="currentColor"
            viewBox="0 0 24 24">
            <circle cx="12" cy="8.5" r="4"/>
            <path d="M4 20c0-3.5 3.5-6 8-6s8 2.5 8 6"/>
        </svg>

    </div>

</div>
        <label for="profile_picture"
    class="mt-4 inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded shadow transition cursor-pointer">

    Upload Photo

    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 16V4m0 0l-4 4m4-4l4 4M4 16v3a1 1 0 001 1h14a1 1 0 001-1v-3"/>
    </svg>
</label>

<input
    type="file"
    id="profile_picture"
    name="profile_picture"
    accept="image/*"
    class="hidden"
    onchange="previewImage(event)">
      </div>

    </div>
  </div>
  


    </div>

   </div>

   <script>
function previewImage(event) {

    const file = event.target.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function(e) {

        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('imagePreview').classList.remove('hidden');

        document.getElementById('placeholder').classList.add('hidden');
    };

    reader.readAsDataURL(file);
}
</script>

</body>
</html>
