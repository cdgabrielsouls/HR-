<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <style>
        :root{
            --deep-navy:#0B1E3D;
            --navy:#132B52;
            --navy-mid:#1B3A6B;
            --corporate-blue:#1B6FC8;
            --sky-blue:#4A9EE8;
            --light-blue:#7BBEF0;
            --ice-blue:#D6ECFC;
            --off-white:#F4F6FA;
            --slate-200:#E2E8F0;
            --slate-500:#94A3B8;
            --white:#FFFFFF;
            --success:#16A34A;
            --danger:#DC2626;
            --bg:#081530;
            --surface:#132B52;
            --surface-soft:#102444;
            --border:rgba(123,190,240,0.12);
            --border-strong:rgba(123,190,240,0.22);
            --text-primary:#F4F6FA;
            --text-secondary:#B6C2D2;
            --text-muted:#7F97B5;
            --radius-lg:20px;
            --radius-md:14px;
            --radius-sm:10px;
            --shadow-card:0 18px 40px -22px rgba(0,0,0,0.65);
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            min-height:100vh;
            background:
                radial-gradient(1000px 500px at 10% -10%, rgba(27,111,200,0.16), transparent 60%),
                radial-gradient(900px 500px at 100% 0%, rgba(74,158,232,0.10), transparent 55%),
                var(--bg);
            color:var(--text-primary);
            padding:40px 20px;
        }

        .page{
            max-width:1100px;
            margin:0 auto;
        }

        .hero{
            background: linear-gradient(135deg, var(--navy), var(--surface-soft));
            border:1px solid var(--border);
            border-radius:var(--radius-lg);
            padding:28px 30px;
            margin-bottom:24px;
            box-shadow:var(--shadow-card);
        }

        .hero small{
            display:block;
            color:var(--light-blue);
            font-size:12px;
            text-transform:uppercase;
            letter-spacing:1.5px;
            margin-bottom:10px;
            font-weight:bold;
        }

        .hero h1{
            font-size:32px;
            margin-bottom:10px;
        }

        .hero p{
            color:var(--text-secondary);
            max-width:700px;
            line-height:1.6;
            font-size:15px;
        }

        .card{
            background: linear-gradient(165deg, var(--surface), var(--surface-soft));
            border:1px solid var(--border);
            border-radius:var(--radius-lg);
            box-shadow:var(--shadow-card);
            overflow:hidden;
        }

        .card-header{
            padding:22px 28px;
            border-bottom:1px solid var(--border);
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:20px;
            flex-wrap:wrap;
        }

        .card-header h2{
            font-size:22px;
        }

        .card-header p{
            color:var(--text-secondary);
            font-size:14px;
            margin-top:6px;
        }

        .badge{
            background:rgba(74,158,232,0.15);
            color:var(--light-blue);
            padding:8px 14px;
            border-radius:999px;
            font-size:12px;
            font-weight:bold;
        }

        .form-body{
            padding:28px;
        }

        .success-message{
            background:rgba(22,163,74,0.14);
            border:1px solid rgba(22,163,74,0.35);
            color:#86efac;
            padding:14px 16px;
            border-radius:12px;
            margin-bottom:20px;
        }

        .error-box{
            background:rgba(220,38,38,0.12);
            border:1px solid rgba(220,38,38,0.35);
            color:#fecaca;
            padding:14px 16px;
            border-radius:12px;
            margin-bottom:20px;
        }

        .error-box ul{
            padding-left:18px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:20px;
        }

        .form-group{
            display:flex;
            flex-direction:column;
        }

        .form-group.full{
            grid-column:1 / -1;
        }

        label{
            font-size:14px;
            margin-bottom:8px;
            color:var(--off-white);
            font-weight:600;
        }

       input,
select{
            width:100%;
            background:rgba(255,255,255,0.04);
            border:1px solid var(--border-strong);
            color:var(--text-primary);
            padding:14px 15px;
            border-radius:12px;
            outline:none;
            font-size:14px;
            transition:0.2s ease;
        }

        input::placeholder{
            color:var(--text-muted);
        }

        input:focus,
select:focus{
            border-color:var(--sky-blue);
            box-shadow:0 0 0 3px rgba(74,158,232,0.15);
        }

        select{
    appearance:none;
    cursor:pointer;
}

select option{
    background:#132B52;
    color:white;
}

        .form-footer{
            margin-top:28px;
            display:flex;
            justify-content:flex-end;
            gap:12px;
            flex-wrap:wrap;
        }

        .btn{
            border:none;
            border-radius:12px;
            padding:14px 20px;
            font-size:14px;
            font-weight:600;
            cursor:pointer;
            transition:0.2s ease;
        }

        .btn-secondary{
            background:rgba(255,255,255,0.05);
            color:var(--off-white);
            border:1px solid var(--border-strong);
        }

        .btn-secondary:hover{
            background:rgba(255,255,255,0.10);
        }

        .btn-primary{
            background:linear-gradient(135deg, var(--corporate-blue), var(--sky-blue));
            color:white;
            box-shadow:0 12px 25px -12px rgba(27,111,200,0.8);
        }

        .btn-primary:hover{
            transform:translateY(-1px);
            filter:brightness(1.05);
        }

        .mini-note{
            margin-top:16px;
            color:var(--text-muted);
            font-size:13px;
            line-height:1.5;
        }

        @media (max-width: 768px){
            .grid{
                grid-template-columns:1fr;
            }

            .hero h1{
                font-size:26px;
            }

            .card-header{
                padding:20px;
            }

            .form-body{
                padding:20px;
            }
        }
    </style>
</head>
<body>
    <div class="page">

        <div class="hero">
            <small>Human Resources</small>
            <h1>Add Employee</h1>
            <p>
                Fill out the employee information below to save a new employee record in the HR system.
            </p>
        </div>

        <div class="card">
            <div class="card-header">
                <div>
                    <h2>Employee Information</h2>
                    <p>Enter the basic employee details for the new record.</p>
                </div>
                <div class="badge">HR Form</div>
            </div>

            <div class="form-body">

                @if(session('success'))
                    <div class="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="error-box">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid">  
                        <div class="form-group full">
    <label for="profile_picture">Profile Picture</label>

    <input
        type="file"
        id="profile_picture"
        name="profile_picture"
        accept="image/*"
    >
</div>
                        <div class="form-group">
    <label for="first_name">First Name</label>
    <input
        type="text"
        id="first_name"
        name="first_name"
        placeholder="Enter first name"
        value="{{ old('first_name') }}"
    >
</div>

<div class="form-group">
    <label for="middle_name">Middle Name</label>
    <input
        type="text"
        id="middle_name"
        name="middle_name"
        placeholder="Enter middle name"
        value="{{ old('middle_name') }}"
    >
</div>

<div class="form-group">
    <label for="last_name">Last Name</label>
    <input
        type="text"
        id="last_name"
        name="last_name"
        placeholder="Enter last name"
        value="{{ old('last_name') }}"
    >
</div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter email address"
                                value="{{ old('email') }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="Enter phone number"
                                value="{{ old('phone') }}"
                            >
                        </div>

                        <div class="form-group">
    <label for="gender">Gender</label>

    <select id="gender" name="gender">
        <option value=""></option>
        <option>Male</option>
        <option>Female</option>
        <option>Prefer not to say</option>
    </select>
</div>

<div class="form-group">
    <label for="marital_status">Marital Status</label>

    <select id="marital_status" name="marital_status">
        <option value=""></option>
        <option>Single</option>
        <option>Married</option>
        <option>Separated</option>
        <option>Widowed</option>
    </select>
</div>

                        <div class="form-group full">
                            <label for="position">Position</label>
                            <input
                                type="text"
                                id="position"
                                name="position"
                                placeholder="Enter employee position"
                                value="{{ old('position') }}"
                            >
                        </div>

                        <div class="form-group full">
    <label for="address">Address</label>

    <input
        type="text"
        id="address"
        name="address"
        placeholder="Enter complete address"
    >
</div>

                        <div class="form-group">
    <label for="department">Department</label>

    <select id="department" name="department">
        <option value=""></option>
        <option>Human Resources</option>
        <option>Finance</option>
        <option>IT</option>
        <option>Marketing</option>
        <option>Manufacturing</option>
    </select>
</div>
                    </div>

                    <div class="mini-note">
                        Make sure the employee email is unique before saving.
                    </div>

                    <div class="form-footer">
                        <button type="reset" class="btn btn-secondary">Clear Form</button>
                        <button type="submit" class="btn btn-primary">Save Employee</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>