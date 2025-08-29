<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Login</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
 
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
 
        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }
 
        h1 {
            font-weight: bold;
            margin: 0 0 10px;
            font-size: 1.8em;
        }
 
        p {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
 
        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
            transition: color 0.3s ease;
        }
 
        a:hover {
            color: #ff4b2b;
        }
 
        .button {
            border-radius: 10px;
            border: 1px solid #f36100;
            background-color: #f36100;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            padding: 16px 112px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in, background-color 0.3s ease;
            cursor: pointer;
            margin-top: 36px;
        }
 
        button:active {
            transform: scale(0.95);
        }
 
        form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }
 
        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }
 
        input:focus {
            outline: 2px solid #ff416c;
            background-color: #fff;
        }
 
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.2),
                        0 10px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 520px;
            display: flex;
        }
 
        .form-container {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
 
        .overlay-container {
            width: 50%;
            background: #f36100;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 0 40px;
        }
 
        .copyright {
            position: fixed;
            bottom: 10px;
            right: 15px;
            color: #aaa;
            font-size: 0.8em;
            font-weight: 300;
            z-index: 1001;
        }
 
        /* Tablet & Mobile responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                min-height: auto;
                width: 95%;
            }
 
            .form-container,
            .overlay-container {
                width: 100%;
                height: auto;
                padding: 30px 20px;
            }
 
            .button {
                padding: 12px 40px;
            }
 
            h1 {
                font-size: 1.6em;
            }
        }
 
        /* Mobile tweaks */
        @media (max-width: 480px) {
            h1 {
                font-size: 1.4em;
            }
 
            input {
                padding: 10px 12px;
                font-size: 14px;
            }
 
            .button {
                padding: 10px 112px;
                font-size: 12px;    
               
            }
 
            .copyright {
                font-size: 0.7em;
                bottom: 5px;
                right: 10px;
            }
           
           
        }
    </style>
</head>
 
<body>
 
    <div class="container" id="container">
        <!-- Login Form -->
       
 
        <!-- Overlay / Right Panel -->
        <div class="overlay-container">
            <h1>Hello, Member! ✨</h1>
            <p>Enter your personal details and start your journey with us</p>
        </div>
         <div class="form-container sign-in-container">
            <form action="{{ url('tutor/login') }}" method="post">
                @csrf
                <h1>Member Login 👋</h1>
                <input type="email" placeholder="📧 Email" name="email"  />
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="password" placeholder="🔒 Password" name="password" />
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    </script>
 
    <script>
        @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: @json(session('success'))
            });
        @endif
        @if (session('error'))
            Toast.fire({
                icon: 'error',
                title: @json(session('error'))
            });
        @endif
    </script>
 
</body>
</html>
 
 