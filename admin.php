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
    <h3 class="dashboard_logo" id="dashboard_logo">ADMIN</h3>
    <div class="dashboard_sidebar_user">
        <img src="ts.png" alt="User image." id="userImage"/>
        <span>user</span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <li>
                <a href="#manage" onclick="toggleNestedList('user')"><i class="fa fa-dashboard menuIcons"></i><span class="menuText">User management</span></a>
		<ul class="nested-list" id="user">
                        <li><a href="#user-view">View</a></li>
                        <li><a href="#user-modify">Modify</a></li>
                        <li><a href="#user-delete">Delete</a></li>
                </ul>
            </li>
            <li>
                <a href="#course" onclick="toggleNestedList('courses')"><i class="fa fa-graduation-cap menuIcons"></i><span class="menuText">Courses</span></a>
	        <ul class="nested-list" id="courses">
                        <li><a href="#course-details">Course offerings</a></li>
                        <li><a href="#course-register">Registration</a></li>
                </ul>
            </li>
            <li>
                <a href="#grades" onclick="toggleNestedList('grades')"><i class="fa fa-user-plus menuIcons"></i><span class="menuText">Grades</span></a>
	        <ul class="nested-list" id="grades">
                        <li><a href="#grades-access">Access</a></li>
                        <li><a href="#grades-manage">Manage</a></li>
                </ul>
            </li>
            <li>
                <a href="#attendance" onclick="toggleNestedList('attendance')"><i class="fa fa-clipboard menuIcons"></i><span class="menuText">Attendance</span></a>
	        <ul class="nested-list" id="attendance">
                        <li><a href="#attend-view">View</a></li>
                        <li><a href="#attend-manage">Manage</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
            <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
    <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
    <a href="logout.php" id="logoutBtn"><i class=" fa fa-power-off"></i>Log-out</a>
    </div>
                <div class="dashboard_content ">
                    <div class="dashboard_content_main"><div>
	<session id="user-view">
        <h3>Existing Students</h3>
        <table border='1'>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123456</td>
                    <td>John Doe</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
</session>
</div>

</div>
                </div>

            </div>
        </div>
        <script>
var sidebarIsOpen=true;
toggleBtn.addEventListener( 'click',(event)=>{
    event.preventDefault();
    if(sidebarIsOpen){
        dashboard_sidebar.style.width='10%';
        dashboard_sidebar.style.transition='0.3s all';
        dashboard_content_container.style.width='90%';
        dashboard_logo.style.fontSize='20px';
        userImage.style.width='60px';
        menuIcons=document.getElementsByClassName('menuText');
        for(var i=0;i<menuIcons.length;i++){
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
        for(var i=0;i<menuIcons.length;i++){
            menuIcons[i].style.display='inline-block';
        }
        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign='left';
        sidebarIsOpen=true;
    }
});
function toggleNestedList(id) {
	var nestedList = document.getElementById(id);
	nestedList.style.display = (nestedList.style.display === 'block') ? 'none' : 'block';
}
</script>
    </body>
</html>