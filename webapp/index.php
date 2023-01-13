<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<<<<<<< HEAD
<h2>Popular Products</h2>
<div style="margin-bottom: 2em;">
	<b>Sortiert nach: </b>  
	<select id="sort-direction">
		<option> None </option>  
		<option value="category"> Caregory </option>  
		<option value="ascending">Name(descending) </option>  
		<option value="descending">Name(ascending) </option>
	</select>  
</div>
<table>
	<thead>
		<tr>
			<th>SKU</th>
			<th>Name</th>
			<th>Category_Id</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Logo</th>
		</tr>
	</thead>
	<tbody id="products-table"></tbody>
</table>

<script src="controller/home.js"></script>
<?php require "view/blocks/page_end.php"; ?>
=======

<h2>Our most popular products</h2>

<!-- Plain JS implementation -->
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Stock</th>
    </tr>
  </thead>
  <tbody id="products-table">
  </tbody>
</table>

<script>
const updateProductTable = async function (table, productsToInsert) {
  const columns = ['name', 'price', 'stock'];

  // Insert the table rows for the found products
  const newTableRows = productsToInsert.map((product) => {
    let thing = document.createElement('tr');

    const tds = [];

    for (let i = 0; i < columns.length; i++) {
      let column = columns[i];

      let td = document.createElement('td');
      if(column == 'stock') {
        if (product[column] <= 3) {
          td.style.color = 'red'
        } else {
          td.style.color = 'black';
        }
      }
      td.innerText = product[column]; // dunno lol
      thing.appendChild(td);
    }

    return thing
  })

  table.replaceChildren(...newTableRows)
}

const init = async function () { // an async wrapper function which allows me to use await instead of .then()
  const result1 = await fetch('API/V1/popular-products')
  const products = await result1.json()

  console.log(products)

  updateProductTable(document.querySelector('#products-table'), products);
}

init();
</script>

<?php require "view/blocks/page_end.php"; ?>
>>>>>>> 7cba93e3e8267a5553c9b9bccfc57723ecf96d4e
