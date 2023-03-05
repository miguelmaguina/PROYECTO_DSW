function filtrarPorSubcategoria(subcategoria) {
    // Realizar petición AJAX
    $.ajax({
      url: '../DAO/ProductosxSubCat.php',
      type: 'POST',
      data: { subcategoria: subcategoria },
      success: function(response) {
        // Actualizar la lista de productos con los datos obtenidos
        $('#lista_productos').html(response);
      }
    });
  }