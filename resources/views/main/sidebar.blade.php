<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Manifestasi Admin</title>
    <link rel="stylesheet" href="{{ url('css/sidebarstyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/cardstyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/tablestyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/formstyle.css') }}">
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Manifestasi</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{ route('chart.dashboard') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{ route('project.index') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Project</span>
       </a>
       <span class="tooltip">Project</span>
     </li>
     <li>
       <a href="{{ route('portofolio.index') }}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Portfolio</span>
       </a>
       <span class="tooltip">Portfolio</span>
     </li>
     <li>
       <a href="{{ route('category.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Category</span>
       </a>
       <span class="tooltip">Category</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Income</span>
       </a>
       <span class="tooltip">Income</span>
     </li>
  
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">nama user</div>
             <div class="job">Engineer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <aside>
      <div class="container" style= height:160px;max-width:1200px;background-color:#754ef9;display:inline-block;position:absolute;"> 
            </div>
        <div class="section-container" style="max-height: 1200px;">
            
            @yield('container')
        </div>
        
    </aside>
  </section>
  <div class="container"> 
          @yield('content')
  </div>
  </body>
{{-- untuk tempat masang library   --}}
@yield('library')

 
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  // let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  //   sidebar.classList.toggle("open");
  //   menuBtnChange(); //calling the function(optional)
  // });


  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>