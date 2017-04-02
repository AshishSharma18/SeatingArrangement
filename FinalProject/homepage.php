<?php
/*
 * Unset the session vaariable since it is the first page and the session starts here
 */
session_unset();
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Home Page</title>
</head>
    <body>
    <header>
        <h1>Seating Arrangment</h1>
       <link rel="stylesheet" href="custom.css">
    </header>
        <form method="post" action="homePageSessionState.php">
            <div>
                Exam: &nbsp;
                <select name="Exam" title="exam">
                    <option value="Unit Test 1">Unit Test 1</option>
                    <option value= "Unit Test 2">Unit Test 2</option>
                </select><br/><br/>
                Semester:&nbsp;
                <select name="Semester" id="sem" title="Semester">
                    <option value="odd">Odd Semester</option>
                    <option value= "even">Even Semester</option>
                </select>
                <br/><br/>
            </div>
            <div id="slot1">
                <header>First Slot</header>
                <label for="startTime1">Start Time:</label><input type="time" name="startTime1" title="startTime1" required/><br/><br/>
                <label for="endTime1">End Time:</label><input type="time" name="endTime1" title="endTime1" required/><br/><br/>
            </div>
            <div id="slot2">
                <header>Second Slot</header>
                <label for="startTime2">Start Time:</label><input type="time" name="startTime2" title="startTime2" required/><br/><br/>
                <label for="endTime2">End Time:</label><input type="time" name="endTime2" title="endTime2" required/><br/><br/>
            </div>
            <label for="noClass">No. Of Available Class Room</label><input type="number" min="0" max="5" title="noClass" name="noClass" pattern="^[1-5]$" required/><br/><br/>
            <input type="submit" value="Start">
        </form>
    </body>
</html>
