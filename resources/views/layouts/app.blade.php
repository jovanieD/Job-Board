<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/dropdown.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bevan&family=Russo+One&display=swap" rel="stylesheet">
  <title>Job Board</title>
</head>
<body>
<header class=" text-white body-font">
  <div class="container mx-auto flex flex-wrap p-5  md:flex-row items-center">
    <a class="flex ml-6 title-font font-medium items-center text-black mb-4 md:mb-0">
      <span class="ml-3 text-xl">Job Board</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center  text-base justify-center">
      <div class="left_btn" >

        <button type="button" class="static mr-2 px-6 py-2 border-2 border-blue-400 text-black font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Job Search</button>
        
        <div class="dropdown static mr-2 px-6 py-2 border-2 border-blue-400 text-black font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" style="color:black;">
  <button onclick="myFunction()" class="dropbtn">JOB EVENT</button>
  <div id="myDropdown" class="dropdown-content rounded-r-lg">
    <a href="#">testing for</a>
    <a href="#">drop menus</a>
    <a href="#">link menus</a>
  </div>
</div>
        
      </div>
      <button type="button" class="inline-block mr-3 px-6 py-2.5 bg-blue-400 text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out"><a href="{{url('/auth_create')}}">Job Seekers</a></button>
      <button type="button" class="inline-block px-6 py-2  border-2 border-blue-400 text-black  font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"><a href="{{url('/auth_create')}}">Employers</a></button>
    </nav>
  </div>
</header>

<section class="text-black justify-center body-font">
  <div class="container px-5 py-40 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
    <h1 id="name" class="sm:text-4xl font-extrabold font-medium title-font mb-2 text-black">Job Board</h1>
      <p class="lg:w-2/3 py-5 mx-auto leading-relaxed text-base">Job seeking wouldint be a nightmare anymore!</p>
    </div>
    <center>
    <div class="rounded-full bg-white drop-shadow flex max-w-4xl">
            <input
                type="text"
                placeholder="Search job'"
                class="w-full rounded-full py-2 px-4" />
            <button class="bg-blue-400 rounded-full  py-1 px-8 border-2 border-blue-400 text-black  font-medium text-xs leading-tight lowercase rounded-full hover:bg-black hover:bg-blue-600 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                <p class="font-semibold text-base">search</p>
            </button>
   </div>
   </center>

   <section class="text-black ">
    <div class="container px-5 py-24 mx-auto flex items-center md:flex-row flex-col">
      <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
      <h1 id ="jobhiring" class="md:text-3xl text-2xl font-medium title-font text-black">Job Hiring Board</h1></div>
    </div>

    <div class="mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-black text-sm bg-gray-100 rounded-tl rounded-bl">Position</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-black text-sm bg-gray-100">Company</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-black text-sm bg-gray-100">Location</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-black text-sm bg-gray-100">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
    </div>

  </section>
</section>


<footer class="text-white bg-blue-600 rounded-t-lg body-font">
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 py-5">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Job Seeker</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-800">Job Search</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Upload Resume</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Carrer Advice</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Search Tips</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Job Alert</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Find Companies</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Help</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 py-5">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Employers</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-800">Job Posting</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">View Resume</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 py-5">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Job Board</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-800">About Us</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Contact Us</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">Carrer Wih Us</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800"> Send Feedback</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 py-5">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Stay Connected</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-800">Job Posting</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-800">View Resume</a>
          </li>
          
        </nav>
      </div>
    </div>
  </div>
</footer>

<script src="/js/dropmenus.js"></script>
</body>
</html>