<?php
session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Table: Fourth Year</title>
    <script src="timeTable.js"></script>
    <style>
      table,td,th{
        border: 2px solid black;
      }
      table th{
        width:140px;
      }
      table td{
        width:140px;
      }
    table td input{
        width:90%;
        margin: 2%;
      }
    </style>
  </head>
  <body>
    <header>
        <h1>Time Table: Fourth Year</h1>
    </header>
      <label for="Add">Add Row</label>:
      <select name="RowCount" title="RolwCount">
      <option value="One" id="one">1 Subject</option>
      <option value="two" id="two">2 Subjects</option>
    </select>
    <button name="Add" onclick="addRow()">Add</button>
    <br/><br/>
      <form id="form1" action="beTimeTableSession.php" method="post">
          <input type="hidden" name="Year" id="year" value="BE"/>
        <input type="hidden" name="Arrangement"  id="Arrangement" value="" title="Arrangement"/>
        <table>
          <tbody id="table">
          <tr>
            <th >Date</th>
            <th >Subject</th>
          </tr>
        </tbody>
        </table>
        <br/><br/>
        <input type="Submit" name="submit"/>
      </form>
  </body>
</html>
