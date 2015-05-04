<?php
session_start();

//This checks to see if the user is trying to access the file without logging in first and then if they havent
// it returns them to the login page.
if(!isset($_SESSION['login'])){ 
    if(empty($_POST)){ 
        header("Location: http://web.engr.oregonstate.edu/~skeenda/assignment4/login.php"); 
        
        session_destroy();
    } 
    
    else{  
        $_SESSION['login'] = true; 
        
    }
}

//If the above passes then it moves into this
if($_SESSION['login'] == true){
    if($_GET['logout'] == true) {
        header("Location: http://web.engr.oregonstate.edu/~skeenda/assignment4/login.php");
        session_destroy();   
    }
	//Makes sure the page isnt accessed from outside of the username needed
    if($_POST['username'] == null || $_POST['username'] == '' ) {
        echo "<br>A username must be entered";
        echo "<br>Click <a href='login.php'>here</a> to return to the login screen.";   
    }
    else {
		//Sets the username to that which was entered by the user
        $_SESSION['userName'] = $_POST['username'];
        $userName = $_SESSION['userName'];
		// If this is the first visit then it sets the visits to 0
        if(!isset($_SESSION['visits'])) {
            $_SESSION['visits'] = 0;   
            echo "Hello " . $userName . " you have visited this page " . $_SESSION['visits'] . " times before. "; 
            echo "<br>Click <a href='login.php?logout=true'>here</a> to logout.";
			
            echo "<br>Click <a href= 'http://web.engr.oregonstate.edu/~skeenda/Assignment4/content2.php?login=true'>here</a> to visit Content 2.";
        }
		// I this is not the first entry then it sets the value of visits to add 1 each time that the page is 
		//accessed and the user hasnt logged out
        else {
            $_SESSION['visits'] = $_SESSION['visits'] + 1 ;  
            echo "Hello " . $userName . " you have visited this page " . $_SESSION['visits'] . " times before. "; 
            //Had to change this from the full addrss b/c it was saying that the page doesnt exist
			echo "<br>Click <a href='login.php?logout=true'>here</a> to logout.";
			
            echo "<br>Click <a href= 'http://web.engr.oregonstate.edu/~skeenda/Assignment4/content2.php?login=true'>here</a> to visit Content 2.";

        }
    }

 
}
?>