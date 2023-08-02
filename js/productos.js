// Utilizamos JavaScript para hacer una petición AJAX al archivo PHP que consulta la base de datos
// y obtiene la lista de productos.

// Creamos una función para realizar la petición AJAX
function fetchProducts() {
    // Creamos un objeto XMLHttpRequest para realizar la petición
    const xhr = new XMLHttpRequest();
  
    // Especificamos la URL del archivo PHP que consulta la base de datos
    const url = 'ruta_a_tu_archivo_php.php';
  
    // Configuramos la petición GET
    xhr.open('GET', url, true);
  
    // Definimos la función que se ejecutará cuando la petición se complete
    xhr.onload = function () {
      if (xhr.status === 200) {
        // La respuesta del servidor se encuentra en xhr.responseText
        // Aquí asumimos que el servidor devuelve un JSON con la lista de productos
        const productList = JSON.parse(xhr.responseText);
  
        // Llamamos a la función que mostrará la lista de productos en la página
        displayProducts(productList);
      } else {
        console.error('Error al obtener la lista de productos.');
      }
    };
  
    // Definimos la función que se ejecutará en caso de error
    xhr.onerror = function () {
      console.error('Error de red al obtener la lista de productos.');
    };
  
    // Enviamos la petición
    xhr.send();
  }
  
  // Creamos una función para mostrar la lista de productos en la página
  function displayProducts(products) {
    const productListElement = document.getElementById('product-list');
  
    // Iteramos sobre la lista de productos y creamos elementos HTML para mostrarlos en la página
    products.forEach(function (product) {
      const li = document.createElement('li');
      li.textContent = `${product.nombre} - ${product.descripcion}`;
      productListElement.appendChild(li);
    });
  }
  
  // Llamamos a la función para obtener y mostrar la lista de productos cuando la página se cargue
  window.onload = function () {
    fetchProducts();
  };
  