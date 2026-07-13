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
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">1</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4-"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">2</div>
      <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#0d1730] text-white font-bold z-10">3</div>
    <div class="w-40 border-t-2 border-dashed border-slate-500 mx-4"></div>
      <div class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-blue-500 text-white font-bold shadow-lg shadow-blue-500/40 z-10">4</div>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">

    
      <!-- Left: form -->
      <div class="flex-1">
        <!-- Step 4 Content -->
<h2 class="text-white text-sm font-bold tracking-wide mb-6">
    COMPANY POLICIES & ACKNOWLEDGMENT
</h2>

 <form 
action="{{ route('onboarding.storeStep4') }}" 
method="POST"
> @csrf

<div class="w-[1335px] bg-[#0D1730] rounded-xl p-8 space-y-8">

    <!-- Policy 1 -->
    <div class="border-b border-white/10 pb-6">
        <h3 class="text-white font-semibold mb-3">
            Employee Handbook Acknowledgment
        </h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
            As part of the onboarding process, I acknowledge that I have read,
            understood, and agree to comply with the following company policies.
            I understand that failure to follow these policies may result in
            disciplinary action in accordance with company procedures.
        </p>

        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
           <input 
    type="checkbox" 
   

    class="mt-1 w-4 h-4"
>
            <span>
                I certify that the employee has read and signed the physical copy
                of the Company's Employee Handbook and has authorized Human
                Resources to record this acknowledgment electronically.
            </span>
        </label>
    </div>

    <!-- Policy 2 -->
    <div class="border-b border-white/10 pb-6">
        <h3 class="text-white font-semibold mb-3">Code of Conduct Sign-Off</h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
            I certify that the employee has read and signed the physical copy of the Company's Code of Conduct and has authorized Human Resources to record this acknowledgment electronically.
</p>
        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
            <input 
    type="checkbox" 
 

    class="mt-1 w-4 h-4"
>
            <span>
                I certify that the employee has read and signed the physical copy
                of the Company's Employee Handbook and has authorized Human
                Resources to record this acknowledgment electronically.
            </span>
        </label>
    </div>

    <!-- Policy 3 -->
    <div class="border-b border-white/10 pb-6">
        <h3 class="text-white font-semibold mb-3">Confidentiality & Non-Disclosure Agreement (NDA)</h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
           I understand that during my employment I may have access to confidential and proprietary information belonging to the Company, its customers, or its business partners. I agree to protect this information and not disclose, copy, or use it for unauthorized purposes during or after my employment, except as required to perform my assigned duties or as authorized by the Company.
        </p>

        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
            <input 
    type="checkbox" 
  

    class="mt-1 w-4 h-4"
>
            <span>
                I confirm that I have read, understood, and agree to comply with the Company's Confidentiality and Non-Disclosure Agreement (NDA), including my responsibility to protect confidential information.
            </span>
        </label>
    </div>

    <!-- Policy 4 -->
    <div class="border-b border-white/10 pb-6">
        <h3 class="text-white font-semibold mb-3">Health & Safety Policy Acknowledgment</h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
            I agree to comply with all workplace health and safety policies, procedures, and emergency protocols established by the Company. I understand that maintaining a safe working environment is a shared responsibility, and I will promptly report any hazards, unsafe conditions, accidents, or incidents.
        </p>

        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
            <input 
    type="checkbox" 
 
        class="mt-1 w-4 h-4"
>
            <span>
                I confirm that I have read, understood, and agree to follow the Company's Health and Safety policies, procedures, and workplace safety requirements.
            </span>
        </label>
    </div>

    <!-- Policy 5 -->
    <div class="border-b border-white/10 pb-6">
        <h3 class="text-white font-semibold mb-3">Anti-Harassment Policy Sign-Off</h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
            I understand that the Company is committed to providing a workplace that is free from harassment, discrimination, bullying, and retaliation. I agree to treat all individuals with dignity and respect and to report any inappropriate behavior through the appropriate reporting channels. I understand that violations of this policy may result in disciplinary action.
        </p>

        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
            <input 
    type="checkbox" 
   

    class="mt-1 w-4 h-4"
>
            <span>
               I confirm that I have read, understood, and agree to comply with the Company's Anti-Harassment Policy and will contribute to maintaining a respectful, safe, and inclusive workplace.
            </span>
        </label>
    </div>

    <!-- Policy 6 -->
    <div>
        <h3 class="text-white font-semibold mb-3">Policy Title 6</h3>

        <p class="text-slate-300 text-sm leading-7 mb-4">
            As part of the onboarding process, I acknowledge that I have read,
            understood, and agree to comply with the following company policies.
            I understand that failure to follow these policies may result in
            disciplinary action in accordance with company procedures.
        </p>

        <label class="flex items-start gap-3 text-slate-300 text-sm cursor-pointer">
            <input 
    type="checkbox" 
   
 class="mt-1 w-4 h-4"
>
            <span>
                I certify that the employee has read and signed the physical copy
                of the Company's Employee Handbook and has authorized Human
                Resources to record this acknowledgment electronically.
            </span>
        </label>
    </div>

   
</div>

<!-- Navigation Buttons -->

 



<div class="pt-6 flex gap-4">

<a href="{{ route('onboarding.step3') }}"
class="inline-flex items-center gap-2 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold px-6 py-2.5 rounded shadow transition">
BACK
</a>


<button type="submit"
class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-6 py-2.5 rounded shadow-lg shadow-blue-900/40 transition">

FINISH

</button>

</div>


</form>
  </div>
  


    </div>

    

   </div>

</body>
</html>
