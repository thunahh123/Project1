<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Author: Thu Nguyen, 000832893
        Date:  6th Dec, 2022
        Purpose: Project 1 full-stack to-do list application
        Statement of Authorship: I, Thu Nguyen, 000832893 certify that this material is my
		original work. No other person's work has been used without due acknowledgement.
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List - Project 1</title>
    <link rel="stylesheet" href="css/todolist.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <script src="js/todoListApp.js"></script>

</head>
<body>
    
    <header>
    <h1>Project1 - To Do List by Emily Nguyen</h1>
    </header>
    <main>
        <div id="signInDiv">
            <h1>Organize your work today</h1>
            <form action="get" id="signInForm">
                <input type="text" name="userName" id="userName" placeholder="Enter your username"> <br>
                <input type="password" name="password" id="password" placeholder="Enter password"><br>
                <button id="signInButton">Sign In</button>
            </form>
            <div>
            <p id="showRegisterForm">Click here to register new account</p>
            </div> 

        </div>

        <div id="signUpDiv">
        <h1>Organize your work today</h1>
            <form action="get" id="signUpForm">
                <input type="text" name="newUserName" id="newUserName" placeholder="Create your username"><br>
                <input type="text" name="reEnterNewUserName" id="reEnterNewUserName" placeholder="Re-enter your username"><br>
                <input type="password" name="newPw" id="newPw" placeholder="Enter your password"><br>
                <input type="password" name="reEnterNewPw" id="reEnterNewPw" placeholder="Re-enter your password"><br>
                <button id="registerButton">Register</button>
                <button id="cancelButton">Cancel</button>
            </form>
            <div>Already sign up? Go to log in</div>
        </div>


    </main>

    
    
</body>
</html>