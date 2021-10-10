<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="./functions.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css"/>
    <title>Car parts</title>
  </head>
  <body>

  <form action="processorder.php" method="post">
    <table class="my-table">
      <tr>
        <td>Item</td><td>Quantity</td>
      </tr>
      <tr>
        <td>Шины</td><td><input type="text" name="tireqty" size="3" maxlength="3"/></td>
      </tr>
      <tr>
        <td>Масло</td><td><input type="text" name="oilqty" size="3" maxlength="3"/></td>
      </tr>
      <tr>
        <td>Свечи зажигания</td><td><input type="text" name="sparkqty" size="3" maxlength="3"/></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Отправить заказ"/></td>
      </tr>
    </table>
  </form>

  </body>
</html>