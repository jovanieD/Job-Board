<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/dropdown.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bevan&family=Russo+One&display=swap" rel="stylesheet">
  <title>Job Board</title>
</head>
<body>
<header class="text-white body-font flex flex-row-reverse h-20">
  <div class="py-4 flex ">
    <div class="dropdown text-black  px-4 py-4 ">
  <button onclick="myFunction()" class="dropbtn">Jovanie Dasian</button>
  <div id="myDropdown" class="dropdown-content rounded-r-lg">
    <a href="#">testing for</a>
    <a href="#">drop menus</a>
    <a href="#">link menus</a>
  </div>
</div>
  <div class="w-12 h-12  sm:mr-8 sm:mb-0 mb-4 inline-flex  rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <img src="/21103861.jpg" class="rounded-full" alt="">
  </div>
  </div>
</header>

<section class="text-gray-600 body-font ">

  <div class="container px-5 py-10 mx-auto flex flex-wrap">

    <div class="flex">
      <div class="p-4 ">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-20 h-20 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <img src="/21103861.jpg" class="rounded-full" alt="">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 py-5 font-bold text-[28px] ">Jovanie Dasian</h2>
          </div>
        </div>
      </div>

    </div>

    <div class="lg:w-3/5 md:w-1/2 object-cover ">
    <div class="container mx-auto">
      <div class="p-4">

      <h1 class="md:text-3xl text-2xl font-medium title-font text-black">Job Hiring Board</h1></div>

      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Plan</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Speed</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Storage</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Start</td>
            <td class="px-4 py-3">5 Mb/s</td>
            <td class="px-4 py-3">15 GB</td>
            <td class="px-4 py-3 text-lg text-gray-900">Free</td>
            <td class="w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25 Mb/s</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25 GB</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$24</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Business</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">36 Mb/s</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">40 GB</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$50</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">48 Mb/s</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">120 GB</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$72</td>
            <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
</div>

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

<script src="/js/jobseeker/profiledrop.js"></script>
</body>
</html>