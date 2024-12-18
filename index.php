<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative Login & Registration</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Bangers&family=DM+Serif+Text:ital@0;1&family=Delius&family=Playwrite+DE+VA+Guides&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Yatra+One&family=Yuji+Mai&display=swap');
      *{
        margin: 0;
        padding: 0;
      }
      body{
        font-family: "Bangers", serif;
        font-weight: 200;
        font-style: normal;
      }
      /* Background Overlay Effect */
      .bg-overlay {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
      }
      /* Form Animation */
      @keyframes slideIn {
      0% {
        opacity: 0;
        transform: translateX(50px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }
    .animated-form {
      animation: slideIn 1.2s ease-out;
    }
  </style>
  </head>
  <body class="h-screen w-screen bg-black flex items-center justify-center text-gray-100">
    <!-- Main Container -->
    <div class="flex w-full max-w-6xl h-[90vh] bg-black shadow-lg rounded-lg overflow-hidden">
      <!-- Left Image Section -->
      <div
        class="relative hidden md:flex md:w-1/2 bg-[url('./assets/img/pexels-pixabay-248747.jpg')] bg-contain bg-center bg-overlay bg-no-repeat top-12"
      >
        <div class="absolute inset-0 flex flex-col items-center justify-center text-yellow-300 m-5">
          <h1 class="text-4xl font-bold mb-4">Welcome!</h1>
          <p class="text-center text-lg px-6">
            Join us today and experience creativity at its peak.
          </p>
        </div>
      </div>

      <!-- Right Form Section -->
      <div class="w-full md:w-1/2 flex items-center justify-center m-auto p-10">
        <div class="w-full animated-form">
          <!-- Tab Navigation -->
          <div class="flex justify-center space-x-8 mb-6">
            <button
              id="login-tab"
              class="fa-solid fa-right-to-bracket tab-btn text-yellow-400 font-bold text-[30px] hover:text-yellow-300"
              onclick="showForm('login')"
            >
            </button>
            <button
              id="register-tab"
              class="fa-solid fa-registered tab-btn text-gray-400 font-bold text-[30px] hover:text-yellow-300"
              onclick="showForm('register')"
            >
            </button>
          </div>

          <!-- Login Form -->
          <form id="login-form" style="display: block">
            <h2 class="text-3xl font-bold text-yellow-400 text-center mb-6">Login</h2>
            <div class="space-y-4">
              <div>
                <label for="username" class="fa-solid fa-user block mb-2 ml-2 text-yellow-500"></label>
                <input
                  type="text"
                  id="username"
                  placeholder="Enter your username"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <div>
                <label for="password" class="fa-solid fa-lock block mb-2 ml-2 text-yellow-500"></label>
                <input
                  type="password"
                  id="password"
                  placeholder="Enter your password"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <button
                type="submit"
                class="w-full bg-yellow-400 hover:bg-yellow-300 text-gray-800 font-bold py-2 rounded-lg transition-all duration-300"
              >
                Login
              </button>
            </div>
          </form>

          <!-- Registration Form -->
          <form id="register-form" style="display: none">
            <h2 class="text-3xl font-bold text-yellow-400 text-center mb-6">Register</h2>
            <div class="space-y-4">
              <div>
                <label for="username" class="block mb-1 text-gray-300">Username</label>
                <input
                  type="text"
                  id="username"
                  placeholder="Choose a username"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <div>
                <label for="phone" class="block mb-1 text-gray-300">Phone</label>
                <input
                  type="text"
                  id="Phone"
                  placeholder="Enter your phone"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <div>
                <label for="email-register" class="block mb-1 text-gray-300">Email</label>
                <input
                  type="email"
                  id="email-register"
                  placeholder="Enter your email"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <div>
                <label for="password-register" class="block mb-1 text-gray-300">Password</label>
                <input
                  type="password"
                  id="password-register"
                  placeholder="Create a password"
                  class="w-full px-4 py-2 bg-gray-700 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                />
              </div>
              <button
                type="submit"
                class="w-full bg-yellow-400 hover:bg-yellow-300 text-gray-800 font-bold py-2 rounded-lg transition-all duration-300"
              >
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      function showForm(form) {
        document.getElementById('login-form').style.display =
          form === 'login' ? 'block' : 'none';
        document.getElementById('register-form').style.display =
          form === 'register' ? 'block' : 'none';
        document
          .getElementById('login-tab')
          .classList.toggle('text-yellow-400', form === 'login');
        document
          .getElementById('register-tab')
          .classList.toggle('text-yellow-400', form === 'register');
        document
          .getElementById('login-tab')
          .classList.toggle('text-gray-400', form !== 'login');
        document
          .getElementById('register-tab')
          .classList.toggle('text-gray-400', form !== 'register');
      }
    </script>
  </body>
</html>
