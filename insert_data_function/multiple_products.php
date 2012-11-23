<!DOCTYPE html>
<html>
  <?php require_once 'header.php'; ?>
  <body>
    <div id="content">
      <h2>New Multiple Products</h2>
      <br />
      <div><a href="index.php" class="right">All Products</a></div>
      <br /><br />
      <form id="products" method="POST" action="create.php" >
        <?php for ($i=1; $i<=3; $i++) { ?>
          <i><?php echo $i ?>. Name :</i><br />
          <input name="products[<?php echo $i ?>][name]" type="text" value="" />
          <input name="multiple" type="hidden" value="true" /><br />
          <i>Description :</i><br />
          <textarea rows="6" name="products[<?php echo $i ?>][description]"> </textarea><br />
        <?php } ?>
        <input id="product_submit" type="button" value="Save" onclick="submit();" />
      </form>
    </div>
  </body>
</html>