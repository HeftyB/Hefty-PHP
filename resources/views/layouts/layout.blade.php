<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> -->
    <link href="tailwind.css" rel="stylesheet">
    <title>HeftyB</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg rounded navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown10">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900">Dashboard</a>
            <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Team</a>
            <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Projects</a>
            <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Calendar</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
          <span class="sr-only">View notifications</span>
          <!-- Heroicon name: bell -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="ml-3 relative">
          <div>
            <button class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
          <!--
            Profile dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900">Dashboard</a>
      <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Team</a>
      <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Projects</a>
      <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Calendar</a>
    </div>
  </div>
</nav>





    <div class="wrapper">
        @yield("content")
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

</body>
</html>


