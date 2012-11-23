<!DOCTYPE html>
<html>
  <?php require_once 'header.php'; ?>
  <body>
    <div id="content">
      <h2>All Product</h2>
      <br />
      <div><a href="new.php" class="right">Add New Product</a></div>
      <br /><br />
      <?php
      require_once 'includes/php/active_queries.php';
      $products = select('products');
      ?>
      <table width="100%">
        <?php foreach ($products as $product) { ?>
          <tr>
            <td><?php echo $product['name']; ?></td>
          </tr>
        <?php } ?>
      </table>

    </div>
  </body>
</html>