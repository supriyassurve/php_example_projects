<!DOCTYPE html>
<html>
  <?php require_once 'header.php'; ?>
  <body>
    <div id="content">
      <h2>New Product</h2>
      <br />
      <div><a href="index.php" class="right">All Products</a></div>
      <br /><br />
      <form id="product" method="POST" action="create.php" >
        <i>Name :</i><br />
        <input name="product[name]" type="text" value="" /><br />
        <i>Description :</i><br />
        <textarea rows="6" name="product[description]"> </textarea><br />
        <input id="product_submit" type="button" value="Save" onclick="submit();" />
      </form>
    </div>
  </body>
</html>