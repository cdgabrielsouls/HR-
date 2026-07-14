<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendance</title>

<!-- Google Font: Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
            },
        },
    };
</script>

<style>
    /* Placeholder color isn't a Tailwind utility on its own without the plugin,
       so keep this tiny rule for the Employee ID input */
    #empID::placeholder {
        color: #9bb1d3;
    }
</style>
</head>

<body class="bg-[#f5f5f7] font-sans m-0 p-0">

    <!-- NAVBAR -->
    <header class="w-full h-[80px] sm:h-[108px] bg-[#1B3A6B] flex items-center px-6 sm:px-[60px] shadow-[0_2px_8px_rgba(0,0,0,.08)]">
        <img src="images/logo.png" alt="Nexora Logo" class="h-12 sm:h-[72px] w-auto object-contain">
    </header>

    <!-- MAIN -->
    <div class="w-full min-h-[calc(100vh-80px)] sm:min-h-[calc(100vh-108px)] flex justify-center items-center px-4 py-8">

        <div class="w-full max-w-[510px] text-center">

            <div id="date" class="text-lg sm:text-2xl md:text-[25.4px] text-[#132B52] mb-[-6px] sm:mb-[-12px]"></div>

            <div id="clock"
                class="text-[72px] sm:text-[120px] md:text-[160px] lg:text-[194px] font-semibold text-[#132B52] leading-[0.9] mb-6 sm:mb-[30px] flex justify-center items-center w-full text-center">
            </div>

            <div class="mt-8 sm:mt-[60px]">

                <div class="w-full h-[60px] sm:h-[75px] bg-[#132B52] rounded-[10px] flex items-center px-4 sm:px-7 mb-5 sm:mb-6">
                    <span class="text-white text-base sm:text-[22px] font-medium mr-3 sm:mr-5 whitespace-nowrap">Employee ID:</span>
                    <input
                        type="text"
                        id="empID"
                        autocomplete="off"
                        class="flex-1 h-full border-none outline-none bg-transparent text-white text-base sm:text-2xl min-w-0">
                </div>

                <button id="attendanceBtn"
                    class="w-full h-[80px] sm:h-[114px] border-none rounded-[7.9px] bg-[#132B52] text-white text-xl sm:text-[28.6px] font-normal cursor-pointer transition-colors duration-[250ms] mb-5 sm:mb-6 flex justify-center items-center hover:bg-[#0f2e59] disabled:hover:bg-[#6c757d]">
                    ◴ Clock In
                </button>

                <div id="captureBtn"
                    class="w-full h-[50px] bg-[#173d73] text-white rounded-md flex justify-center items-center mb-5 text-base sm:text-xl cursor-pointer select-none">
                    [◉] Capture Photo
                </div>

                <video id="video" autoplay playsinline
                    class="hidden w-full rounded-[10px] my-5 mx-auto"></video>

                <canvas id="canvas" class="hidden"></canvas>

                <img id="photo" class="hidden w-full rounded-[10px] mt-5 mx-auto" alt="Captured attendance photo">

                <div class="text-lg sm:text-xl md:text-[22px] text-[#333] leading-relaxed text-left sm:text-center">
                    <div>Clock In Time: <span id="clockIn"></span></div>
                </div>

            </div>

        </div>

    </div>

<script>

const clock=document.getElementById("clock");
const date=document.getElementById("date");

function updateClock(){

    const now=new Date();

    clock.innerHTML=now.toLocaleTimeString([],{
        hour:'2-digit',
        minute:'2-digit',
        hour12:false
    });

    date.innerHTML=now.toLocaleDateString('en-US',{
        weekday:'long',
        year:'numeric',
        month:'long',
        day:'numeric'
    });

}

updateClock();
setInterval(updateClock,1000);

let clockedIn=false;

const btn=document.getElementById("attendanceBtn");

btn.onclick=function(){

    const id=document.getElementById("empID").value.trim();

    if(id==""){
        alert("Please enter Employee ID.");
        return;
    }

    const now=new Date().toLocaleTimeString();

    if(!clockedIn){

        if(confirm("Clock in now?")){

            document.getElementById("clockIn").innerHTML=now;

            alert("You have successfully Clocked In.");

            btn.innerHTML="◴ Clock Out";

            clockedIn=true;

        }

    }

    else{

        if(confirm("Clock out now?")){

            document.getElementById("clockOut").innerHTML=now;

            alert("You have successfully Clocked Out.");

            btn.disabled=true;

            btn.innerHTML="Completed";

            btn.classList.remove("bg-[#132B52]","hover:bg-[#0f2e59]");
            btn.classList.add("bg-[#6c757d]","cursor-not-allowed");

        }

    }

}

const captureBtn = document.getElementById("captureBtn");
const video = document.getElementById("video");
const canvas = document.getElementById("canvas");
const photo = document.getElementById("photo");

let stream = null;
let cameraOpen = false;

captureBtn.addEventListener("click", async () => {

    if(!cameraOpen){

        try{

            stream = await navigator.mediaDevices.getUserMedia({
                video:true
            });

            video.srcObject = stream;
            video.classList.remove("hidden");

            captureBtn.innerHTML = "Take Photo";

            cameraOpen = true;

        }catch(err){

            alert("Unable to access camera.");

        }

    }else{

        const ctx = canvas.getContext("2d");

        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        ctx.drawImage(video,0,0);

        const image = canvas.toDataURL("image/png");

        photo.src = image;
        photo.classList.remove("hidden");

        video.classList.add("hidden");

        stream.getTracks().forEach(track=>track.stop());

        captureBtn.innerHTML = "Retake Photo";

        cameraOpen = false;

    }

});

</script>

</body>
</html>