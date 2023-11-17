<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    </head>
    <body>
        <div id ="dashboardMainContainer">
            <div class="dashboard_sidebar" id="dashboard_sidebar">
                <h3 class="dashboard_logo" id="dashboard_logo">STUDENT</h3>
                <div class="dashboard_sidebar_user">
                </div>
                <div class="dashboard_sidebar_menus">
                    <ul class="dashboard_menu_lists">
                        <li><a href="#manage" onclick="toggleSection('details')"><i class="fa fa-dashboard menuIcons"></i><span class="menuText">Details</span></a></li>
                        <li><a href="#grades" onclick="toggleSection('grades')"><i class="fa fa-user-plus menuIcons"></i><span class="menuText">Grades</span></a></li>
                        <li><a href="#attendance" onclick="toggleSection('attendance')"><i class="fa fa-clipboard menuIcons"></i><span class="menuText">Attendance</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="dashboard_content_container" id="dashboard_content_container">
                <div class="dashboard_topNav">
                    <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                    <a href="logout.php" id="logoutBtn"><i class=" fa fa-power-off"></i>Log-out</a>
                </div>
                <div class="dashboard_content ">
                    <div class="dashboard_content_main">
			            <section id="details">
				            <h2 align="center">DETAILS</h2><hr>
                            <p>Name:james</p>
                            <p>Age:21</p>
			            </section>
                        <section id="grades">
				            <h2 align="center">GRADES</h2><hr>
                            <p>Math:91</p>
			            </section>
                        <section id="attendance">
                            <h2 align="center">ATTENDANCE</h2><hr>
                            <p>77%</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var sidebarIsOpen=true;
            toggleBtn.addEventListener( 'click',(event)=>{
            event.preventDefault();
            if(sidebarIsOpen)
            {
                dashboard_sidebar.style.width='10%';
                dashboard_sidebar.style.transition='0.3s all';
                dashboard_content_container.style.width='90%';
                dashboard_logo.style.fontSize='20px';
                userImage.style.width='60px';
                menuIcons=document.getElementsByClassName('menuText');
                for(var i=0;i<menuIcons.length;i++)
                {
                    menuIcons[i].style.display='none';
                }
                document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign='center';
                sidebarIsOpen=false;
            }
            else{
                dashboard_sidebar.style.width='20%';
                dashboard_content_container.style.width='80%';
                dashboard_logo.style.fontSize='20px';
                userImage.style.width='80px';
                menuIcons=document.getElementsByClassName('menuText');
                for(var i=0;i<menuIcons.length;i++)
                {
                    menuIcons[i].style.display='inline-block';
                }
                document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign='left';
                sidebarIsOpen=true;
            }
            });
            function toggleSection(sectionId) 
            {
                var section = document.getElementById(sectionId);
                if (section.style.display === 'none') 
                {
                    section.style.display = 'block';
                } 
                else 
                {
                    section.style.display = 'none';
                }
            }
        </script>
    </body>
</html>
