<html>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>My Courses</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <header>
            <h1>Welcome to My Student Website</h1>
            <nav>
                <a href='#about'>About</a>
                <a href='#projects'>Projects</a>
                <a href='#contact'>Contact</a>
            </nav>
        </header>

        <div id='mainContainer'>
            <div id='headingcontainer'>
                <h1 id='headingmycourse'>My Courses</h1>
            </div>
            <div id='searchbar'>
                <input id='searchcourse' name='searchcourse' type='text' placeholder='search Courses'>
            </div>
            <div id='courseContainer'>
                <div id='courseTab'>
                    <input type='button' name='upcomming/ongoing' id='tab1' value='Upcomming/Ongoing'></input>
                    <input type='button' name='completed' id='tab2' value='Completed'></input>
                </div>
                <div id='courseList'>
                    <div id='course1'><p>Course Name: </p><p>Course Provider: </p><p>Course Duration</p></div>
                    <div id='course2'><p>Course Name: 2</p><p>Course Provider: </p><p>Course Duration</p></div>
                    <div id='course1'><p>Course Name: </p><p>Course Provider: </p><p>Course Duration</p></div>
                    <div id='course2'><p>Course Name: 2</p><p>Course Provider: </p><p>Course Duration</p></div>
                </div>
            </div>
        </div>
    </body>
</html>