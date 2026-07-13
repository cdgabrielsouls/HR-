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
            <img src="<?php echo e(asset('images/logo.png')); ?>" class="h-[86px] w-auto object-contain block" alt="Header Logo">
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
                        <a href="<?php echo e(route('employees.index')); ?>" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Employee List</a>
                        <a href="<?php echo e(route('departments.index')); ?>" class="block no-underline text-[#C9DAF8] py-[11px] px-3.5 rounded-[10px] text-[13px] font-medium transition-all duration-200 hover:bg-[#f3f6fb] hover:text-[#2D7EFF]">Department List</a>
                    </div>
                </div>
 
                <div class="relative group">
                    <a href="<?php echo e(route('onboarding.step1')); ?>" class="text-white no-underline text-xl py-2.5 px-[18px] flex items-center gap-2 rounded-full transition-all duration-250 hover:text-[#66A6FF] hover:bg-[#1B3A6B] hover:-translate-y-px hover:font-bold active:scale-[.97]">
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
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">1</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4-"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">2</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-blue-500 text-white font-bold shadow-lg shadow-blue-500/40 z-10">3</div>
    <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">4</div>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">

      <!-- Left: form -->
      <div class="flex-1">
        <h2 class="text-white text-sm font-bold tracking-wide mb-6">
    REQUIRED DOCUMENTS
</h2>

<form
    action="<?php echo e(route('onboarding.storeStep3')); ?>"
    method="POST"
    enctype="multipart/form-data"
    class="space-y-6">

    <?php echo csrf_field(); ?>

    <!-- Birth Certificate -->
    <div>
        <label class="block text-slate-300 text-xs mb-1">
            Birth Certificate
        </label>

        <div class="relative">
           <input type="file" name="birth_certificate"
                class="w-[1335px] h-[45px] bg-[#0D1730] text-white text-sm rounded px-3 outline-none cursor-pointer"
            />
        </div>
    </div>

    <!-- Curriculum Vitae -->
    <div>
        <label class="block text-slate-300 text-xs mb-1">
            Curriculum Vitae
        </label>

        <div class="relative">
            <input type="file" name="curriculum_vitae"
                class="w-[1335px] h-[45px] bg-[#0D1730] text-white text-sm rounded px-3 outline-none cursor-pointer"
            />
        </div>
    </div>

    <!-- Valid ID -->
    <div>
        <label class="block text-slate-300 text-xs mb-1">
            Valid ID
        </label>

        <div class="relative">
           <input type="file" name="valid_id"
                class="w-[1335px] h-[45px] bg-[#0D1730] text-white text-sm rounded px-3 outline-none cursor-pointer"
            />
        </div>
    </div>

    <!-- Medical Certificate -->
    <div>
        <label class="block text-slate-300 text-xs mb-1">
            Medical Certificate
        </label>

        <div class="relative">
           <input type="file" name="medical_certificate"
                class="w-[1335px] h-[45px] bg-[#0D1730] text-white text-sm rounded px-3 outline-none cursor-pointer"
            />
        </div>
    </div>

    <!-- Navigation Buttons -->
    <!-- Back Button -->
    <a href="<?php echo e(route('onboarding.step2')); ?>"
   class="inline-flex items-center gap-2 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold px-6 py-2.5 rounded shadow transition">
    BACK
</a>

    <!-- Next Button -->
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

     

    </div>
  </div>
  


    </div>

   </div>

</body>
</html>
<?php /**PATH C:\Users\cjjamie\Desktop\Nexora\hr-system\resources\views/employees/onboarding/step3.blade.php ENDPATH**/ ?>