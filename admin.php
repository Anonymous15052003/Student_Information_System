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
                        <li><a href="#manage" onclick="toggleNestedList('user')"><i class="fa fa-dashboard menuIcons"></i><span class="menuText">User management</span></a>
                            <ul class="nested-list" id="user">
                                <li><a href="#user-view" onclick="toggleSection('user-view')">View</a></li>
                                <li><a href="#user-delete" onclick="toggleSection('user-delete')">Delete</a></li>
                            </ul>
                        </li>
                        <li><a href="#course" onclick="toggleNestedList('courses')"><i class="fa fa-graduation-cap menuIcons"></i><span class="menuText">Courses</span></a>
                            <ul class="nested-list" id="courses">
                                <li><a href="#course-offer" onclick="toggleSection('course-offer')">Course offerings</a></li>
                                <li><a href="#course-register" onclick="toggleSection('course-register')">Registration</a></li>
                            </ul>
                        </li>
                        <li><a href="#grades"><i class="fa fa-user-plus menuIcons"></i><span class="menuText">Grades</span></a></li>
                        <li><a href="#attendance"><i class="fa fa-clipboard menuIcons"></i><span class="menuText">Attendance</span></a></li>
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
			            <section id="user-view">
				            <h2 align="center">USERS</h2><hr>
                            <ul>
                                <li>James Potter</li>
                                <li>Regulus Black</li>
                                <li>Remus Lupin</li>
                                <li>Sirius Black</li>
                            </ul>
			            </section>
                        <section id="user-delete">
				            <h2 align="center">USERS</h2><hr>
                            <ul>
                                <li user-id='1'>James Potter<button onclick="deleteUser(1)">Delete</button></li>
                                <li user-id='2'>Regulus Black<button onclick="deleteUser(2)">Delete</button></li>
                                <li user-id='3'>Remus Lupin<button onclick="deleteUser(3)">Delete</button></li>
                                <li user-id='4'>Sirius Black<button onclick="deleteUser(4)">Delete</button></li>
                            </ul>
			            </section>
                        <section id="course-offer">
                            <h2>COURSES AVAILABLE</h2><hr>
                            <ul>
                                <li>
                                    <h3>Faculty of Engineering and Technology</h3>
                                    <ul>
                                        <li>CSE</li>
                                        <li>CSIT</li>
                                        <li>EEE</li>
                                        <li>ECE</li>
                                        <li>Mechanical</li>
                                        <li>Civil</li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>Faculty of Commerce and and Management Studies</h3>
                                    <ul>
                                        <li>B.B.A</li>
                                        <li>M.B.A</li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>Faculty of Arts,Humanity and Social Studies</h3>
                                    <ul>
                                        <li>BA in Journalism and Mass Communication</li>
                                        <li>BA in Journalism,English and Psycology</li>
                                        <li>BA in Political Science,Economics and Journalism</li>
                                        <li>MA in English</li>
                                        <li>M.Sc in Pyscology</li>
                                        <li>MA in Journalism and Communication</li>
                                        <li>Ph.D in English</li>
                                    </ul>
                                </li>
                            </ul>
                        </section>
                        <section id="course-register">
                            <h2>COURSE REGISTRATION</h2><hr><br>
                            <form id="courseRegistrationForm">
                                <label for="firstName">First Name:</label>
                                <input type="text" id="firstName" name="firstName" required><br><br>
                                <label for="lastName">Last Name:</label>
                                <input type="text" id="lastName" name="lastName" required><br><br>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required><br><br>
                                <label for="course">Select Course:</label>
                                <select id="course" name="course" required>
                                    <option value="" disabled selected>Select a course</option>
                                    <option value="engineering">Faculty of Engineering and Technology</option>
                                    <option value="commerce">Faculty of Commerce and and Management Studies</option>
                                    <option value="arts">Faculty of Arts,Humanity and Social Studies</option>
                                </select><br><br>
                                <button type="button" onclick="submitForm()">Submit</button>
                            </form>
                        </section>
                        <section id="grades">

                        </section>
                        <section id="attendance">

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
            function toggleNestedList(id) 
            {
                var nestedList = document.getElementById(id);
                nestedList.style.display = (nestedList.style.display === 'block') ? 'none' : 'block';
            }
            function toggleSection(sectionId) 
            {
                var section = document.getElementById(sectionId);
                if (section.style.display === 'none') 
                {
                    section.style.display = 'block';
                } else 
                {
                    section.style.display = 'none';
                }
            }
            function deleteUser(userId) 
            {
                console.log(`Deleting user with ID ${userId}`);
                const row = document.querySelector(`tr[data-user-id="${userId}"]`);
                if (row)
                {
                    row.remove();
                }
            }
            function submitForm() 
            {
                const formData = {
                    firstName: document.getElementById('firstName').value,
                    lastName: document.getElementById('lastName').value,
                    email: document.getElementById('email').value,
                    course: document.getElementById('course').value,
                };
                console.log('Form Data:', formData);
            }
        </script>
    </body>
</html>