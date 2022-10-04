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