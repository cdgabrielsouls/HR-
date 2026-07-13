<!DOCTYPE html>
<html lang="en"> <link rel="icon" href="<?php echo e(asset('images/Nexora_Logo_Transparent(1).png')); ?>" type="image/png">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    /* =========================================================
       ROOT
    ========================================================= */
    :root{
      --bg:#132C5B;
      --bg-2:#102854;
      --sidebar:#14305F;
      --card:#173767;
      --card-2:#183B71;
      --card-3:#122F5D;
      --accent:#2D7EFF;
      --accent-2:#3F8CFF;
      --text:#FFFFFF;
      --muted:#A5B8D8;
      --muted-2:#7F97BF;
      --line:rgba(255,255,255,.05);
      --line-2:rgba(255,255,255,.08);
      --shadow:0 12px 30px rgba(4,10,28,.28);
      --shadow-soft:0 8px 20px rgba(0,0,0,.18);
      --radius:22px;
      --radius-lg:24px;
      --radius-sm:14px;
      --nav-h:84px;
      --sidebar-w:258px;
      --font:-apple-system, BlinkMacSystemFont, "Segoe UI", Inter, Arial, sans-serif;
    }

    *{
      box-sizing:border-box;
      margin:0;
      padding:0;
    }

    html,body{
      width:100%;
      height:100%;
      background:var(--bg);
      font-family: "Inter", sans-serif;
      color:var(--text);
      overflow:hidden;
    }

    body{
      opacity:0;
      animation:pageFade .9s ease forwards;
      background:
        radial-gradient(circle at 15% 15%, rgba(61,132,255,.08), transparent 24%),
        radial-gradient(circle at 85% 8%, rgba(61,132,255,.06), transparent 18%),
        linear-gradient(180deg, #183667 0%, #132C5B 100%);
    }

    @keyframes pageFade{
      from{opacity:0; transform:translateY(8px);}
      to{opacity:1; transform:translateY(0);}
    }

    button,input{
      font-family:inherit;
      border:none;
      outline:none;
      background:none;
      color:inherit;
    }

    /* =========================================================
       APP LAYOUT
    ========================================================= */
    .app{
      display:grid;
      grid-template-columns:var(--sidebar-w) 1fr;
      grid-template-rows:var(--nav-h) 1fr;
      width:100vw;
      height:100vh;
      gap:0;
      position:relative;
    }

    /* =========================================================
       TOP NAV
    ========================================================= */
    .topbar{
      grid-column:1 / -1;
      grid-row:1;
      height:var(--nav-h);
      background:#132B52;
      border-bottom:1px solid rgba(255,255,255,.03);
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:0 20px 0 1px;
      box-shadow:0 1px 0 rgba(255,255,255,.03) inset;
      z-index:10;
      height: 150px;
    }
.brand{
    display:flex;
    align-items:center;
}

.brand-image{
 height: 86px;    /* Adjust mo kung gusto mong mas malaki */
    width:auto;
    object-fit:contain;
    display:block;
}

    .brand-mark{
      width:48px;
      height:48px;
      flex:0 0 48px;
      filter:drop-shadow(0 0 10px rgba(45,126,255,.16));
    }

    .brand-text{
      line-height:1;
    }

    .brand-name{
      font-size:18px;
      font-weight:800;
      letter-spacing:2.2px;
    }

    .brand-sub{
      font-size:7.5px;
      margin-top:4px;
      letter-spacing:1.4px;
      color:#66A6FF;
      opacity:.72;
      text-transform:uppercase;
      font-weight:600;
    }

.top-profile{
    width:44px;
    height:44px;
    border-radius:50%;
    display:grid;
    place-items:center;
    background:rgba(255,255,255,.06);
    box-shadow:inset 0 0 0 1px rgba(255,255,255,.06);
}

.top-profile svg{
    width:40px;
    height:40px;
}
    /* =========================================================
       SIDEBAR
    ========================================================= */
    .sidebar{
      grid-column:1;
      grid-row:2;
      background:linear-gradient(180deg, #0B1E3D 45%, #15467b 100%);
      border-right:1px solid rgba(255,255,255,.04);
      padding:16px 14px 14px 14px;
      position:relative;
      display:flex;
      flex-direction:column;
      min-height:0;
    }

    .search{
      position:relative;
      margin-bottom:20px;
      
    }

    .search input{
      width:100%;
      height:30px;
      border-radius:8px;
      padding:0 34px 0 12px;
      font-size:11px;
      background:#1A3B72;
      color:#D8E6FF;
      border:1px solid rgba(255,255,255,.05);
      box-shadow:inset 0 1px 0 rgba(255,255,255,.03);
      font-style:italic;
    }

    .search input::placeholder{
      color:#90A7CC;
    }

    .search svg{
      position:absolute;
      right:10px;
      top:50%;
      transform:translateY(-50%);
      width:13px;
      height:13px;
      opacity:.7;
    }

    .nav-scroll{
      overflow:auto;
      padding-right:2px;
    }

    .hero-logo{
    width:200px;
    height:180px;
    display:flex;
    align-items:center;
    justify-content:center;
    opacity:.18;
    animation:heroFloat 8s ease-in-out infinite;
    pointer-events:none;
    user-select:none;
    
}

.hero-logo img{
    width:125%;
    height:100%;
    object-fit:contain;
    filter:
        drop-shadow(0 0 18px rgba(45,126,255,.25))
        drop-shadow(0 0 35px rgba(45,126,255,.15));
        opacity:.4;
}

@keyframes heroFloat{
    0%,100%{
        transform:translateY(-50%) rotate(0deg);
    }
    50%{
        transform:translateY(calc(-50% - 8px)) rotate(3deg);
    }
}

    .nav-scroll::-webkit-scrollbar{
      width:4px;
    }

    .nav-scroll::-webkit-scrollbar-thumb{
      background:rgba(255,255,255,.08);
      border-radius:10px;
    }

    .nav-group{
      margin-bottom:20px;
    }

    .nav-head{
      font-size:12px;
      font-weight:700;
      color:#FFFFFF;
      letter-spacing:.5px;
      margin:0 0 9px 10px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      opacity:.92;
    }

    .nav-head .caret{
      width:10px;
      height:10px;
      opacity:.7;
      margin-right:6px;
    }

    .nav-list{
      list-style:none;
      display:flex;
      flex-direction:column;
      gap:4px;
    }

    .nav-item{
      height:32px;
      border-radius:16px;
      display:flex;
      align-items:center;
      gap:10px;
      padding:0 12px 0 14px;
      color:#C5D6F3;
      font-size:13px;
      
      position:relative;
      transition:all .22s ease;
      cursor:pointer;
    }

    .nav-item svg{
      width:13px;
      height:13px;
      opacity:.92;
      flex:0 0 auto;
    }

    .nav-item:hover{
      background:rgba(61,140,255,.08);
      color:#FFFFFF;
      box-shadow:0 0 0 1px rgba(61,140,255,.06), 0 0 18px rgba(45,126,255,.12);
    }

    .nav-item.active{
      background:linear-gradient(180deg, #264B8D 0%, #244882 100%);
      color:#FFFFFF;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.05),
        0 6px 18px rgba(4,10,28,.2),
        0 0 18px rgba(45,126,255,.16);
      animation:activePulse 2.5s ease-in-out infinite;
    }

    @keyframes activePulse{
      0%,100%{box-shadow:inset 0 1px 0 rgba(255,255,255,.05), 0 6px 18px rgba(4,10,28,.2), 0 0 18px rgba(45,126,255,.16);}
      50%{box-shadow:inset 0 1px 0 rgba(255,255,255,.06), 0 8px 20px rgba(4,10,28,.24), 0 0 22px rgba(45,126,255,.22);}
    }

    .sidebar-handle{
      position:absolute;
      right:-8px;
      top:47.5%;
      width:16px;
      height:16px;
      border-radius:50%;
      background:#244882;
      border:1px solid rgba(255,255,255,.08);
      display:grid;
      place-items:center;
      box-shadow:0 4px 10px rgba(0,0,0,.2);
      z-index:5;
    }

    .sidebar-handle svg{
      width:8px;
      height:8px;
      opacity:.9;
    }

    .user-card{
      margin-top:auto;
      height:44px;
      border-radius:18px;
      background:linear-gradient(180deg, #0b1e3d49 5%, #15467b 100%);
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:0 10px 0 18px;
      box-shadow:var(--shadow-soft), inset 0 1px 0 rgba(255,255,255,.05);
      border:1px solid rgba(255,255,255,.05);
      position:relative;
    }

    .user-name{
      font-size:11px;
      font-weight:700;
      color:#FFFFFF;
      line-height:1.15;
    }

    .user-role{
      font-size:9px;
      color:#B6CAE8;
      margin-top:2px;
    }

    .user-avatar{
      width:30px;
      height:30px;
      border-radius:50%;
      background:rgba(255,255,255,.98);
      display:grid;
      place-items:center;
      box-shadow:0 3px 10px rgba(0,0,0,.18);
      flex:0 0 auto;
    }

    .user-avatar svg{
      width:26px;
      height:26px;
    }

    /* =========================================================
       MAIN
    ========================================================= */
    .main{
      grid-column:2;
      grid-row:2;
      min-height:0;
      overflow:auto;
      padding:13px 18px 18px 18px;
      background: #1B3A6B;
    }

    .main::-webkit-scrollbar{
      width:8px;
      height:8px;
    }

    .main::-webkit-scrollbar-thumb{
      background:rgba(255,255,255,.08);
      border-radius:10px;
    }

    .dashboard{
    display:grid;
    grid-template-columns:1fr;
    gap:-3px ;
    border:none;
    height:50%;
    margin-top: 10px;
  margin-left: 8px;
}

    .card{
 
      border-radius:22px;
      position:relative;
      overflow:hidden;
      transform:translateY(16px);
      opacity:0;
      animation:cardIn .7s cubic-bezier(.2,.8,.2,1) forwards;
     
     

}
    @keyframes cardIn{
      to{opacity:1; transform:translateY(0);}
    }

    .welcome-card{ grid-column:1 / -1; grid-row:1; animation-delay:.08s; }
    .stat-1{ grid-column:1; grid-row:2; animation-delay:.15s; }
    .trend-card{ grid-column:1; grid-row:3 / 5; animation-delay:.23s; }
    .att-card{ grid-column:2; grid-row:3; animation-delay:.31s; }
    .leave-card{ grid-column:2; grid-row:4; animation-delay:.38s; }

    .welcome-card {
      margin-left: 10px;
      width:98%;
    }
  
    .welcome-card .inner{
      height: 142px;
       width:1818px;
      padding:1px 0px 1px 0px;
      display:flex;
      align-items:stretch;
      justify-content:space-between;
      gap:20px;
      background-color: #0B1E3D;
      
    }

    .welcome-left{
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      padding-top:8px;
      margin-left: 25px
    }

    .eyebrow{
      font-size:11.9px;
      font-weight:500;
      letter-spacing:.4px;
      color:#F4F8FF;
      text-transform:uppercase;
      
    }

    .eyebrow .live{
      color:#E53232;
      margin-left:3px;
    }

    .welcome-title{
      margin-top:-1px;
      font-size:22.2px;
      font-weight:500;
      letter-spacing:-.5px;
    }

    .welcome-sub{
      margin-top: 14px;
      font-size:11.9px;
      line-height:1.35;
      color:#90A7CC;
      max-width:400px;
      font-style: italic;
    }

    .welcome-right{
    flex:1;
    position:relative;
    display:flex;
    justify-content:flex-end;
    align-items:center;
    overflow:hidden;
}

.hero-logo{
    position:absolute;
    right:70px;          /* distance from right */
    top:50%;
    transform:translateY(-50%);
    width:250px;
    height:250px;
    opacity:.70;         /* was .18 */
    pointer-events:none;
    user-select:none;
    animation:heroFloat 8s ease-in-out infinite;
}

.hero-logo img{
    width:100%;
    height:100%;
    object-fit:contain;
    filter:
        drop-shadow(0 0 20px rgba(45,126,255,.20))
        drop-shadow(0 0 40px rgba(45,126,255,.12));
}

    @keyframes floatMark{
      0%,100%{transform:translateY(0);}
      50%{transform:translateY(-7px);}
    }


  

    /* =========================================================
       STATS ROW
    ========================================================= */
 .stats-grid{
    display: flex;
    flex-direction: row;
    gap:29px;
    box-shadow:0 1px 0 rgba(255,255,255,.03) inset;
    padding:5.5px 5px 5px 8px;
    width: 1818px;
}


/* Base style */
.mini-card{
    height:56px;
    border-radius:20px;
    background:#0B1E3D;
    border:1px solid var(--line);
    padding:6px 16px;
    width:100%;
}

/* Individual widths */
.mini-card-1{
    width:584px;
}

.mini-card-2{
    width:583px;
}

.mini-card-3{
    width:585px;
}
.mini-top{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
}

.mini-icon{
  margin-top:2px;
    width:39px;
    height:39px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:rgba(255,255,255,.05);
    flex-shrink:0;
}

  .mini-icon svg{
    width:20px;
    height:20px;
}

    .pill{
      height:18px;
      padding:0 10px;
      border-radius:999px;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      font-size:7px;
      font-weight:800;
      letter-spacing:.2px;
      box-shadow:inset 0 1px 0 rgba(255,255,255,.06);
    }

    .pill.red{
      background:#350808;
      color: #f00;;
    }

    .pill.green{
      background:#084B20;
      color:#4EDB7F;
    }

    .mini-label{
      font-size:11.9px;
      color:#E7F0FF;
      margin-top:1px;
    }

    .mini-value{
      margin-top:1px;
      font-size:22.2px;
      line-height:.95;
      font-weight:700;
      letter-spacing:-1px;
    }

    .mini-sub{
      margin-top:-1px;
      font-size: 8.7px;
      color:#93A9CC;
    }

    /* =========================================================
       TREND CARD
    ========================================================= */
    .trend-card{
      padding:18px 18px 16px 18px;
    }

    .trend-header{
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      margin-bottom:10px;
    }

    .trend-title{
      font-size:18px;
      font-weight:800;
      letter-spacing:-.2px;
    }

    .trend-sub{
      margin-top:4px;
      font-size:12px;
      color:#95ABD0;
    }

    .trend-range{
      min-width:98px;
      height:28px;
      padding:0 15px;
      border-radius:999px;
      background:rgba(255,255,255,.03);
      border:1px solid rgba(255,255,255,.05);
      color:#AFC2E1;
      font-size:10px;
      display:flex;
      align-items:center;
      justify-content:center;
      margin-top:2px;
    }

    .trend-hero{
      margin-top:16px;
      display:flex;
      align-items:flex-end;
      gap:10px;
    }

    .trend-big{
      font-size:58px;
      line-height:.9;
      font-weight:800;
      letter-spacing:-2px;
    }

    .trend-growth{
      height:20px;
      padding:0 8px;
      border-radius:999px;
      background:rgba(38,201,99,.15);
      color:#4FD980;
      font-size:10px;
      font-weight:800;
      display:inline-flex;
      align-items:center;
      align-self:center;
      margin-bottom:6px;
    }

    .trend-growth-text{
      font-size:12px;
      color:#A1B6D8;
      margin-bottom:8px;
    }

    .chart-wrap{
      margin-top:4px;
      width:100%;
      height:280px;
      position:relative;
    }

    .grid-label{
      position:absolute;
      left:0;
      width:32px;
      text-align:left;
      color:#A0B4D5;
      font-size:11px;
    }

    .chart-svg{
      width:100%;
      height:100%;
      display:block;
    }

    .chart-point{
      opacity:0;
      transform-origin:center;
      animation:pointPop .45s ease forwards;
    }

    @keyframes pointPop{
      from{opacity:0; transform:scale(.2);}
      to{opacity:1; transform:scale(1);}
    }

    /* =========================================================
       ATTENDANCE CARD
    ========================================================= */
    .att-card{
      padding:18px 16px 14px 16px;
    }

    .att-top{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
    }

    .att-title{
      font-size:14px;
      font-weight:700;
    }

    .att-sub{
      margin-top:3px;
      font-size:10px;
      color:#90A7CC;
    }

    .att-perc{
      text-align:right;
    }

    .att-perc .value{
      font-size:18px;
      font-weight:800;
      line-height:1;
    }

    .att-perc .chip{
      margin-top:6px;
      display:inline-flex;
      height:17px;
      border-radius:999px;
      padding:0 7px;
      align-items:center;
      justify-content:center;
      background:rgba(38,201,99,.15);
      color:#4CD97E;
      font-size:9px;
      font-weight:800;
    }

    .bars{
      margin-top:20px;
      height:160px;
      display:flex;
      align-items:flex-end;
      justify-content:space-between;
      gap:18px;
      padding:0 12px 0 12px;
      position:relative;
    }

    .bars::before{
      content:"";
      position:absolute;
      left:0;
      right:0;
      top:0;
      bottom:22px;
      background:
        linear-gradient(to top, transparent 0 19%, rgba(255,255,255,.04) 19% 20%, transparent 20% 39%, rgba(255,255,255,.04) 39% 40%, transparent 40% 59%, rgba(255,255,255,.04) 59% 60%, transparent 60% 79%, rgba(255,255,255,.04) 79% 80%, transparent 80% 100%);
      pointer-events:none;
    }

    .y-labels{
      position:absolute;
      left:0;
      top:59px;
      width:28px;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
      height:135px;
      color:#96ACCF;
      font-size:10px;
      z-index:2;
    }

    .bar-col{
      width:32px;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:flex-end;
      gap:9px;
      z-index:2;
    }

    .bar-track{
      width:20px;
      height:136px;
      display:flex;
      align-items:flex-end;
      justify-content:center;
    }

    .bar{
      width:20px;
      border-radius:12px;
      background:linear-gradient(180deg, #2D7EFF 0%, #2273F7 100%);
      box-shadow:0 4px 18px rgba(45,126,255,.3), inset 0 1px 0 rgba(255,255,255,.12);
      transform-origin:bottom;
      transform:scaleY(0);
      animation:growBar .9s cubic-bezier(.2,.8,.2,1) forwards;
    }

    .bar-col:nth-child(1) .bar{ animation-delay:.2s; }
    .bar-col:nth-child(2) .bar{ animation-delay:.34s; }
    .bar-col:nth-child(3) .bar{ animation-delay:.48s; }
    .bar-col:nth-child(4) .bar{ animation-delay:.62s; }

    @keyframes growBar{
      to{transform:scaleY(1);}
    }

    .bar-label{
      font-size:11px;
      color:#A8BADC;
      letter-spacing:.25px;
    }

    /* =========================================================
       LEAVE CARD
    ========================================================= */
    .leave-card{
      padding:18px 18px 16px 18px;
    }

    .leave-head{
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
    }

    .leave-title{
      font-size:15px;
      font-weight:700;
    }

    .leave-value{
      font-size:35px;
      font-weight:800;
      letter-spacing:-1px;
      line-height:.95;
    }

    .leave-sub{
      margin-top:10px;
      font-size:11px;
      color:#97ADCF;
      max-width:180px;
      line-height:1.45;
    }

    /* =========================================================
       TILT
    ========================================================= */
    .tilt{
      transform-style:preserve-3d;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */
    @media (max-width: 1180px){
      .dashboard{
        grid-template-columns:minmax(0, 1fr) 270px;
        min-width:860px;
      }
      .welcome-right{ flex-basis:360px; }
    }

    @media (max-width: 980px){
      html,body{
        overflow:auto;
      }
      .app{
        grid-template-columns:1fr;
        grid-template-rows:var(--nav-h) auto auto;
        height:auto;
        min-height:100vh;
      }
      .sidebar{
        grid-column:1;
        grid-row:2;
        min-height:auto;
      }
      .main{
        grid-column:1;
        grid-row:3;
      }
      .dashboard{
        min-width:0;
        grid-template-columns:1fr;
        grid-template-rows:auto auto auto auto auto;
      }
      .welcome-card,
      .stat-1,
      .trend-card,
      .att-card,
      .leave-card{
        grid-column:auto;
        grid-row:auto;
      }
      .stats-grid{
        grid-template-columns:5fr;
      }
      .sidebar-handle{
        display:none;
      }
    }

    @media (max-width: 640px){
      .topbar{
        padding:0 16px;
      }
      .main{
        padding:12px;
      }
      .welcome-card .inner{
        flex-direction:column;
      }
      .welcome-right{
        flex-basis:auto;
        width:100%;
        justify-content:space-between;
      }
      .hero-mark{
        width:120px;
        height:90px;
      }
      .trend-big{
        font-size:46px;
      }
      .leave-value{
        font-size:30px;
      }
    }

    .app{
    transition:grid-template-columns .35s ease;
}

.sidebar{
    transition:transform .35s ease, opacity .35s ease;
}

.main{
    transition:all .35s ease;
}

.sidebar-handle{
    cursor:pointer;
    transition:transform .3s ease;
}

/* CLOSED */
.app.sidebar-collapsed{
    grid-template-columns:0 1fr;
}

.app.sidebar-collapsed .sidebar{
    transform:translateX(-100%);
    opacity:0;
    pointer-events:none;
}

.app.sidebar-collapsed .sidebar-handle svg{
    transform:rotate(180deg);
}
.top-right{
    display:flex;
    align-items:center;
    gap:28px;
}

.top-nav{
    display:flex;
    align-items:center;
    gap:30px;
}

.top-nav a{
    color:#C9DAF8;
    text-decoration:none;
    font-size:14px;
    font-weight:400;
    transition:.25s;
    position:relative;
}

.top-nav a:hover{
    color:#fff;
}


.main-grid{
    display:grid;
    grid-template-columns:65.5% 33%;
    gap:12px;
    margin-top:4px;
    margin-left: 10px;
}

@media(max-width:1200px){
    .main-grid{
        grid-template-columns:1fr;
    }
}

/* ===============================
   PANEL
=================================*/

.panel{
   background: rgba(16,35,69,.98);
    border:1px solid rgba(104,147,219,.08);
    border-radius:20px;
    padding:12px 20px;    /* dating 20px */
    overflow:hidden;
}

/* ===============================
   HEADER
=================================*/

.panel-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
   
}

.panel-title{
    font-size:18px;
    font-weight:600;
    color:white;
    display:flex;
    align-items:center;
    gap:10px;
}

.growth{
    background:#0d5d28;
    color:#3cff82;
    padding:5px 10px;
    border-radius:999px;
    font-size:10px;
    font-weight:600;
}

.subtitle{
    margin-top:6px;
    font-size:11px;
    color:rgba(219,232,255,.45);
}

.date-pill{
    border:1px solid rgba(255,255,255,.1);
    background:#17345f;
    border-radius:999px;
    padding:10px 16px;
    color:rgba(255,255,255,.8);
    font-size:10px;
    white-space:nowrap;
}

/* ===============================
   CHART
=================================*/

.chart-wrapper{
    width:100%;
    overflow-x:auto;
    margin-top:-18px;

}

.chart-wrapper svg{
    width:100%;
    min-width:760px;
    height:380px;
}

/* ===============================
   SVG
=================================*/

.grid-bg line{
    stroke:rgba(196,214,255,.18);
    stroke-width:1;
}

.axis-label{
    fill:rgba(219,232,255,.6);
    font-size:11px;
}

.grid-value{
    fill:rgba(219,232,255,.7);
    font-size:11px;
}

.chart-line-blue{
    fill:none;
    stroke:#1f7ff6;
    stroke-width:3;
    stroke-linecap:round;
    stroke-linejoin:round;
    filter:drop-shadow(0 0 4px rgba(31,127,246,.2));
}

.chart-line-red{
    fill:none;
    stroke:#ea170c;
    stroke-width:3;
    stroke-linecap:round;
    stroke-linejoin:round;
    filter:drop-shadow(0 0 3px rgba(234,23,12,.15));
}
.attendance-bar{
    width:32px;
    border-radius:999px;

    background:linear-gradient(
        180deg,
        #2f8dff 0%,
        #2a78d8 100%
    );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.12),
        0 8px 18px rgba(46,125,255,.18);

    transition:.3s;
}

.attendance-bar:hover{
    transform:translateY(-3px);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.15),
        0 14px 30px rgba(46,125,255,.28);
}

/* ==========================
   TOP NAV DROPDOWN
========================== */

.nav-arrow{
    width:14px;
    height:14px;

    transition:
        transform .28s ease,
        color .28s ease;

    transform-origin:center;
    opacity:.8;
}

.nav-dropdown:hover .nav-arrow{
    transform:rotate(180deg);
    opacity:1;
}

.top-nav{
    display:flex;
    align-items:center;
    gap:1px;
}

.nav-dropdown{
    position:relative;
}

.nav-dropdown > a{
    color:#FFFFFF;
    text-decoration:none;
    font-size:20px;
    padding:10px 18px;

    display:flex;
    align-items:center;
    gap:8px;

    border-radius:999px;

    transition:
        background .25s ease,
        color .25s ease,
        transform .25s ease,
        box-shadow .25s ease;
}
/* Hover */
/* Hover */
.nav-dropdown > a:hover{
    color:#66A6FF; /* light blue text */

    background:#1B3A6B;

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.08),
        

    transform:translateY(-1px);
    font-weight:700;
}

/* Active click */
.nav-dropdown > a:active{
    transform:scale(.97);
}

/* Dropdown */
.dropdown-menu{
    position:absolute;
    top:120%;
    left:50%;
    transform:translateX(-50%) translateY(10px);

    width:220px;

    /* Glass Effect */x
    background: #132B52;
  

    border-radius:18px;

    box-shadow:
        0 20px 45px rgba(0,0,0,.25),
        inset 0 1px 0 rgba(21, 21, 21, 0.7);

    padding:10px;

    opacity:0;
    visibility:hidden;

    transition:.3s ease;

    z-index:999;
}

.nav-dropdown:hover .dropdown-menu{
    opacity:1;
    visibility:visible;
    transform:translateX(-50%) translateY(0);
}

.dropdown-menu a{
    display:block;
    text-decoration:none;

    color: #C9DAF8;

    padding:11px 14px;

    border-radius:10px;

    font-size:13px;
    font-weight:500;

    transition:.2s;
}

.dropdown-menu a:hover{
    background:#f3f6fb;
    color:#2D7EFF;
}

.container{
    width:1200px;
    height:640px;
}


.att-panel{
    width:480px;
    background:rgba(16,35,69,.98);
    border:1px solid rgba(104,147,219,.08);
    border-radius:24px;
    padding:18px;
    box-shadow:inset 0 1px 0 rgba(255,255,255,.03);
}

/* HEADER */

.att-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:24px;
}

.att-title{
    font-size:18px;
    font-weight:600;
    color:#fff;
}

.att-subtitle{
    margin-top:4px;
    font-size:12px;
    color:rgba(219,232,255,.45);
}

.att-value{
    text-align:right;
}

.att-percent{
    font-size:34px;
    font-weight:700;
    color:#fff;
    line-height:1;
}

.att-badge{
    display:inline-flex;
    justify-content:center;
    align-items:center;
    margin-top:10px;
    padding:0 12px;
    height:24px;
    border-radius:999px;
    background:#0b6328;
    color:#35ff7a;
    font-size:10px;
    font-weight:600;
}

/* CHART */

.att-chart{
    position:relative;
    height:300px;
}

/* Y LABELS */

.att-y-labels{
    position:absolute;
    left:0;
    top:0;
    bottom:32px;

    display:flex;
    flex-direction:column;
    justify-content:space-between;

    width:32px;

    color:rgba(219,232,255,.45);
    font-size:13px;
}

/* GRAPH */

.att-graph{
    position:absolute;
    left:40px;
    right:0;
    top:0;
    bottom:32px;
}

/* GRID */

.att-grid{
    position:absolute;
    inset:0;

    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.att-grid div{
    border-top:1px solid rgba(255,255,255,.08);
}

/* BARS */

.att-bars{
    position:absolute;
    inset:0;

    display:flex;
    justify-content:space-around;
    align-items:flex-end;
} 

.att-bar-item{
    display:flex;
    flex-direction:column;
    align-items:center;
}

.att-bar{
    width:24px;
    border-radius:999px;
    background:#1B6FC8;
    
}

.att-month{
    margin-top:12px;
    font-size:12px;
    color:rgba(219,232,255,.6);
}

/* =========================================================
   PROFILE DROPDOWN
========================================================= */
.profile-dropdown{
    position:relative;
}

.profile-dropdown .profile-menu{
    position:absolute;
    top:120%;
    right:0;
    left:auto;
    transform:translateY(10px);

    width:160px;
    background:#132B52;
    border-radius:16px;

    box-shadow:
        0 20px 45px rgba(0,0,0,.25),
        inset 0 1px 0 rgba(21,21,21,.7);

    padding:8px;
    opacity:0;
    visibility:hidden;
    transition:.3s ease;
    z-index:999;
}

.profile-dropdown:hover .profile-menu{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

.profile-menu a{
    display:flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:#FFB4B4;
    padding:10px 12px;
    border-radius:10px;
    font-size:13px;
    font-weight:600;
    transition:.2s;
}

.profile-menu a:hover{
    background:#2c1414;
    color:#ff6b6b;
}

.profile-menu a svg{
    width:15px;
    height:15px;
}
  </style>
</head>
<body>
  <!--<div class="app">-->
    <!-- =====================================================
         TOP NAVBAR
    ====================================================== -->
    <header class="topbar">
    <!-- Left -->
    <div class="brand">
        <img src="<?php echo e(asset('images/logo.png')); ?>" class="brand-image" alt="Header Logo">
    </div>

   <div class="top-right">
   <nav class="top-nav">

    <div class="nav-dropdown">
        <a href="dashboard">Dashboard</a>

        
    </div>

    <div class="nav-dropdown">
       <a >
    Workforce

    <svg class="nav-arrow" viewBox="0 0 24 24" fill="none">
        <path
            d="M6 9L12 15L18 9"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"/>
    </svg>
</a>

        <div class="dropdown-menu">
    <a href="<?php echo e(route('employees.index')); ?>">Employee List</a>
    <a href="<?php echo e(route('departments.index')); ?>">Department List</a>
</div>
    </div>

    <div class="nav-dropdown">
        <a href="<?php echo e(route('onboarding.step1')); ?>">Employee Onboarding

          
</a>  
       
    </div>

    <div class="nav-dropdown">
        <a href="#">Reports and Analytics  <svg class="nav-arrow" viewBox="0 0 24 24" fill="none">
        <path
            d="M6 9L12 15L18 9"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"/>
    </svg></a>
       

        <div class="dropdown-menu">
            <a href="#">Placeholder 1</a>
            <a href="#">Placeholder 2</a>
           
        </div>
    </div>

    <div class="nav-dropdown">
        <a href="#">Leave Management</a>

        <div class="dropdown-menu">
            <a href="#">Placeholder 1</a>
            <a href="#">Placeholder 2</a>
            <a href="#">Placeholder 3</a>
        </div>
    </div>

</nav>

    <div class="profile-dropdown">
    <div class="top-profile" aria-label="Profile">
        <svg viewBox="0 0 36 36" fill="none">
            <circle cx="18" cy="18" r="17" fill="white" opacity=".97"/>
            <circle cx="18" cy="13" r="5.2" fill="#223B63"/>
            <path d="M8.8 28.3C10.7 23.8 14.1 21.7 18 21.7C21.9 21.7 25.3 23.8 27.2 28.3" fill="#223B63"/>
        </svg>
    </div>

    <div class="profile-menu">
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;" 
                    class="w-full">
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M15 17l5-5-5-5M20 12H9M13 5H7a2 2 0 00-2 2v10a2 2 0 002 2h6"
                              stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Logout
                </a>
            </button>
        </form>
    </div>
</div>
</div>
</header>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->
    <main class="main">
      <section class="dashboard">
        <!-- Welcome -->
        <article class="card welcome-card tilt">
          <div class="inner">
            <div class="welcome-left">
              <div class="eyebrow">HR OPERATIONS <span class="live">• LIVE</span></div>
             <h1 class="text-white text-3xl font-bold">
    Welcome back, <?php echo e(session('employee_name')); ?>

</h1>
             <div class="welcome-sub">Here's your organizational workforce snapshot: track headcount, attendance and hiring at a glance.</div>
            </div>

            
            <div class="welcome-right">
              <div class="hero-logo">
    <img src="<?php echo e(asset('images/Nexora_Logo_Transparent(1).png')); ?>" alt="Hero Logo">
</div>
              
              

            <!-- <a href="<?php echo e(route('employees.create')); ?>" class="export-btn">
   
    
    <span>◴ Nexora Attendance Hub </span>
</a>-->
            </div>
          </div>
        </article>

        <!-- Stats -->
<article class="card stat-1 tilt">
    <div class="stats-grid">

        <!-- Total Employees -->
        <div class="mini-card mini-card-1">

            <div class="mini-top">
    <div style="display:flex;align-items:flex-start;gap:12px;">

        <div class="mini-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <circle cx="9" cy="10" r="3" stroke="#DCEBFF" stroke-width="1.8"/>
                <circle cx="16.3" cy="11.2" r="2.4" stroke="#DCEBFF" stroke-width="1.8"/>
                <path d="M4.8 18.4C6 15.8 7.9 14.7 10.1 14.7C12.3 14.7 14.1 15.8 15.3 18.4" stroke="#DCEBFF" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M15.4 18.2C16 16.8 17.2 16.1 18.4 16.1C19.5 16.1 20.4 16.5 21 17.4" stroke="#DCEBFF" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </div>

        <div>
            <div class="mini-label">Total Employees</div>

            <div style="display:flex;align-items:flex-end;gap:8px;margin-top:0px;">
                <div class="mini-value counter" data-target="<?php echo e($employeeCount); ?>">0</div>
                <div class="mini-sub">vs. last month</div>
            </div>
        </div>

    </div>

    <div class="pill red">-4.5%</div>
</div>
</div>
        <!-- Present Today -->
        <div class="mini-card mini-card-2">

            <div class="mini-top">
    <div style="display:flex;align-items:flex-start;gap:12px;">

        <div class="mini-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="7" stroke="#DCEBFF" stroke-width="1.8"/>
                <path d="M12 8V12L14.8 14.2" stroke="#DCEBFF" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div>
            <div class="mini-label">Present Today</div>

            <div style="display:flex;align-items:flex-end;gap:8px;margin-top:0px;">
                <div class="mini-value counter" data-target="647">0</div>
                <div class="mini-sub">98.6% of workforce</div>
            </div>
        </div>

    </div>

    <div class="pill green">+2.3%</div>
</div>
</div>

        <!-- On Leave -->
        <div class="mini-card mini-card-3">

           <div class="mini-top">
    <div style="display:flex;align-items:flex-start;gap:12px;">

        <div class="mini-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <rect x="5" y="6" width="14" height="13" rx="2" stroke="#DCEBFF" stroke-width="1.8"/>
                <path d="M8 4V8" stroke="#DCEBFF" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M16 4V8" stroke="#DCEBFF" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </div>

        <div>
            <div class="mini-label">On Leave</div>

            <div style="display:flex;align-items:flex-end;gap:8px;margin-top:0px;">
                <div class="mini-value counter" data-target="3">0</div>
                <div class="mini-sub">Today, across 3 depts.</div>
            </div>
        </div>

    </div>

    <div class="pill red">-6.1%</div>
</div>
    </div>
    </div>
</article>


<div class="container">
        <!-- Main Grid -->
   <section class="main-grid">

<div class="panel">

    <div class="panel-header">

        <div>
            <h2 class="panel-title">
                Workforce Trend
                <span class="growth">+6.7%</span>
                 <p class="subtitle">
                Hires vs. Exits across the year
            </p>
            </h2>

           
        </div>

        <div class="date-pill">
            Jan - Dec 2026
        </div>

    </div>

    <div class="chart-wrapper">

<svg viewBox="0 0 760 360">

<!-- Y LABELS -->

<text x="-45" y="40" class="grid-value">50</text>
<text x="-45" y="72" class="grid-value">45</text>
<text x="-45" y="104" class="grid-value">40</text>
<text x="-45" y="136" class="grid-value">35</text>
<text x="-45" y="168" class="grid-value">30</text>
<text x="-45" y="200" class="grid-value">25</text>
<text x="-45" y="232" class="grid-value">20</text>
<text x="-45" y="264" class="grid-value">15</text>
<text x="-45" y="296" class="grid-value">10</text>
<text x="-45" y="328" class="grid-value">5</text>

<!-- GRID -->

<g class="grid-bg">
<line x1="2" y1="40" x2="900" y2="40"/>
<line x1="2" y1="72" x2="900" y2="72"/>
<line x1="2" y1="104" x2="900" y2="104"/>
<line x1="2" y1="136" x2="900" y2="136"/>
<line x1="2" y1="168" x2="900" y2="168"/>
<line x1="2" y1="200" x2="900" y2="200"/>
<line x1="2" y1="232" x2="900" y2="232"/>
<line x1="2" y1="264" x2="900" y2="264"/>
<line x1="2" y1="296" x2="900" y2="296"/>
<line x1="2" y1="328" x2="900" y2="328"/>
</g>

<!-- X LABELS -->

<text x="70" y="350" class="axis-label">JAN</text>
<text x="190" y="350" class="axis-label">FEB</text>
<text x="312" y="350" class="axis-label">MAR</text>
<text x="435" y="350" class="axis-label">APR</text>
<text x="560" y="350" class="axis-label">MAY</text>
<text x="682" y="350" class="axis-label">JUN</text>
<text x="805" y="350" class="axis-label">JUL</text>

<!-- BLUE -->

<path
class="chart-line-blue"
d="
M70 200
L95 180
L120 160
L145 140
L170 122
L195 110
L220 102
L245 95
L270 95
L295 102
L320 112
L345 126
L370 160
L395 190
L420 220
L445 240
L470 248
L495 248
L520 230
L545 195
L570 150
L595 125
L620 125
L645 125
L670 105
L695 98
L720 80
L742 50"
/>

<!-- RED -->

<path
class="chart-line-red"
d="
M70 285
L88 265
L106 285
L124 295
L142 300
L160 295
L178 280
L196 290
L214 290
L232 275
L250 235
L268 235
L286 250
L304 280
L322 305
L340 310
L358 320
L376 320
L394 305
L412 280
L430 245
L448 225
L466 225
L484 225
L502 210
L520 190
L538 190
L556 200
L574 210
L592 225
L610 285
L628 285
L646 285
L664 270
L682 280
L700 250
L718 230
L742 220"
/>

</svg>

    </div>

</div>

<div class="att-panel">

    <div class="att-header">

        <div>
            <h3 class="att-title">Attendance Rate</h3>
            <p class="att-subtitle">Company-wide average</p>
        </div>

        <div class="att-value">
            <div class="att-percent">93.67%</div>
            <div class="att-badge">↑ 9.7%</div>
        </div>

    </div>

    <div class="att-chart">

        <div class="att-y-labels">
            <span>100%</span>
            <span>80%</span>
            <span>60%</span>
            <span>40%</span>
            <span>20%</span>
        </div>

        <div class="att-graph">

            <div class="att-grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="att-bars">

                <div class="att-bar-item">
                    <div class="att-bar" style="height:130px;"></div>
                    <span class="att-month">APR</span>
                </div>

                <div class="att-bar-item">
                    <div class="att-bar" style="height:110px;"></div>
                    <span class="att-month">MAY</span>
                </div>

                <div class="att-bar-item">
                    <div class="att-bar" style="height:145px;"></div>
                    <span class="att-month">JUN</span>
                </div>

                <div class="att-bar-item">
                    <div class="att-bar" style="height:120px;"></div>
                    <span class="att-month">JUL</span>
                </div>

                <div class="att-bar-item">
                    <div class="att-bar" style="height:135px;"></div>
                    <span class="att-month">AUG</span>
                </div>
                

            </div>

        </div>

    </div>

</div>

</section>
</div>

        

  <script>
    /* =========================================================
       COUNTER ANIMATION
    ========================================================= */
    const counters = document.querySelectorAll('.counter');

    function animateCounter(el){
      const target = parseInt(el.dataset.target, 10);
      const duration = 1450;
      const start = performance.now();

      function update(now){
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(target * eased);
        el.textContent = current.toLocaleString();
        if(progress < 1) requestAnimationFrame(update);
      }

      requestAnimationFrame(update);
    }

    counters.forEach((counter, index) => {
      setTimeout(() => animateCounter(counter), 320 + index * 110);
    });

    /* =========================================================
       SVG PATH DRAW ANIMATION
    ========================================================= */
    const trendPath = document.getElementById('trendPath');
    const trendGlow = document.getElementById('trendGlow');

    function animatePath(path, duration){
      const length = path.getTotalLength();
      path.style.strokeDasharray = length;
      path.style.strokeDashoffset = length;
      path.getBoundingClientRect();
      path.style.transition = `stroke-dashoffset ${duration}ms cubic-bezier(.22,.8,.2,1)`;
      requestAnimationFrame(() => {
        path.style.strokeDashoffset = '0';
      });
    }

    setTimeout(() => {
      animatePath(trendGlow, 1500);
      animatePath(trendPath, 1600);
    }, 420);

    /* =========================================================
       SUBTLE CARD TILT
    ========================================================= */
    const tiltCards = document.querySelectorAll('.tilt');

    tiltCards.forEach(card => {
      let raf = null;

      function onMove(e){
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const px = x / rect.width;
        const py = y / rect.height;

        const rotateY = (px - 0.5) * 4.6;
        const rotateX = (0.5 - py) * 4.2;

        if(raf) cancelAnimationFrame(raf);
        raf = requestAnimationFrame(() => {
          card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(0)`;
        });
      }

      function reset(){
        if(raf) cancelAnimationFrame(raf);
        card.style.transform = 'perspective(900px) rotateX(0deg) rotateY(0deg) translateY(0)';
      }

      card.addEventListener('mousemove', onMove);
      card.addEventListener('mouseleave', reset);
    });  
    
    /* =====================================
   SIDEBAR TOGGLE
===================================== */

const app = document.querySelector(".app");
const sidebarToggle = document.getElementById("sidebarToggle");

sidebarToggle.addEventListener("click", () => {
    app.classList.toggle("sidebar-collapsed");
});</script>
</body>
</html><?php /**PATH C:\Users\cjjamie\Desktop\Nexora\hr-system\resources\views/dashboard/index.blade.php ENDPATH**/ ?>