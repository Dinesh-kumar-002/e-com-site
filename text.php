<?php
      while($row=mysqli_fetch_assoc($products)){
      ?>
      <div class="card m-3">
  <img src="<?php echo row["product_image"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pumkin</h5><h4 class="text-success">Rs.39/kg</h4>
    <p class="card-text">Fresh vegetable directly got from farmers</p>
     <input type="number" class="form-range p-2 border-0 rounded mt-3 bg-success number" style="width: 45px;height :40px; background-color: rgba(0,0,255,.1)" max="5" min="1" value="1">
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>
     



        <?php
      }
        ?>







        <?php
// Connect to database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'my_database';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Initialize cart
$cart = array();

// Check if add to cart button was clicked
if (isset($_POST['add_to_cart'])) {
    // Get product ID and quantity
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    
    // Add product to cart
    $cart[$product_id] = $quantity;
}

// Display products
while ($row = mysqli_fetch_assoc($result)) {
    // Product details
    $product_id = $row['id'];
    $product_name = $row['name'];
    $product_price = $row['price'];
    
    // Display product
    echo "<div>";
    echo "<h3>$product_name</h3>";
    echo "<p>Price: $product_price</p>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='product_id' value='$product_id'>";
    echo "<input type='number' name='quantity' value='1' min='1'>";
    echo "<input type='submit' name='add_to_cart' value='Add to Cart'>";
    echo "</form>";
    echo "</div>";
}

// Display cart
echo "<h3>Cart</h3>";
echo "<ul>";
foreach ($cart as $product_id => $quantity) {
    // Get product details
    $sql = "SELECT * FROM products WHERE id='$product_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $product_name = $row['name'];
    $product_price = $row['price'];
    
    // Display cart item
    echo "<li>$product_name - Quantity: $quantity - Price: " . ($product_price * $quantity) . "</li>";
}
echo "</ul>";

// Close connection
mysqli_close($conn);
?>