<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Seating Arrangement</title>
  </head>
  <body>
    <header class="">
        <h2>Seating Arrangement</h2>
    </header>
    <fieldset>
    <legend>Details</legend>
    <form class="form" action="SeatingArrangementFormatting.php" method="post">
      <div id="Row">
      <label  for="yearSelect">Second Year: </label><br/>
      <label for="Defaulter">Defaulters: </label><input type="text" placeholder="eg. 1,2,3,4,5" name="seDefaulter" pattern="^([0-9]+,)*[0-9]+$" required> If no defaulters enter 0<br/><br/>
      <label  for="yearSelect">Third Year: </label><br/>
      <label for="Defaulter">Defaulters: </label><input type="text" placeholder="eg. 1,2,3,4,5" name="teDefaulter" pattern="^([0-9]+,)*[0-9]+$" required> If no defaulters enter 0<br/><br/>
      <label  for="yearSelect">Fourth Year: </label><br/>
      <label for="Defaulter">Defaulters: </label><input type="text" placeholder="eg. 1,2,3,4,5" name="beDefaulter" pattern="^([0-9]+,)*[0-9]+$" required> If no defaulters enter 0<br/><br/>
      </div>
      <br/>
    <input type="submit" value="Submit" id="submit" onclick="alert('Printing Seating Arrangement');">
    </form>
    </fieldset>
  </body>
</html>
