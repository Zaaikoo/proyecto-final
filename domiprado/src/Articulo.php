<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <script src="https://kit.fontawesome.com/28c762fe61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/Principal.css">
    <link rel="stylesheet" href="./assets/css/Articulos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <!--header - menu-->
    <?php include './components/header.php';?>

    <!--portada - menu-->
    <div class="container-all" id="move-content">

        <div class="article-container-cover">
            <div class="container-info-cover">
                <h1>¡REVISA TUS PRODUCTOS!</h1>
                <p>Observa muy bien antes de finalizar la compra...</p>
            </div>
        </div>

        <div class="container-content">
        <div class="cart-container">
            <h2>Productos en tu carrito</h2>
            <div id="cartItems"></div>
            <button id="checkoutButton">Finalizar Compra</button>
        </div>
            

            
        </div>

        <!-- Contenedor para mostrar los productos añadidos al carrito -->
        

        <div class="container-footer">
            <footer>
                <div class="logo-footer">
                    <img src="./assets/img/imagenes/DomiPrado.png" alt="">
                </div>
                <div class="redes-footer">
                    <a href="#"><i class="fa-brands fa-instagram icon-redes-footer"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp icon-redes-footer"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g icon-redes-footer"></i></a>
                </div>
                <hr>
                <h4>2024 DomiPrado - Todos Los Derechos Reservados</h4>
            </footer>
        </div>
    </div>

    <script src="/domiprado/src/assets/js/script.js"></script>
    <script>
        // Mostrar los productos en el carrito al cargar la página
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const cartItemsContainer = document.getElementById("cartItems");

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = "<p>No hay productos en el carrito.</p>";
        } else {
            const totalPrice = cart.reduce((total, item) => total + item.price, 0); // Calcular el precio total
            cartItemsContainer.innerHTML = `
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${cart.map(item => `
                            <tr class="cart-item">
                                <td><img src="${item.image}" alt="${item.name}" class="cart-item-image"></td>
                                <td class="cart-item-name">${item.name}</td>
                                <td class="cart-item-price">$${item.price}</td>
                                <td>
                                    <button class="remove-item-button" onclick="removeFromCart('${item.name}')">Eliminar</button>
                                </td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
            `;
            // Agregar el total al final
            cartItemsContainer.innerHTML += `<p>Total: $${totalPrice}</p>`;
        }

        // Función para finalizar la compra        
        document.getElementById("checkoutButton").onclick = function() {
            if (cart.length === 0) {
                alert("No hay productos en el carrito para finalizar la compra.");
                return; // Salir si no hay productos
            }

            const totalPrice = cart.reduce((total, item) => total + item.price, 0); // Calcular el precio total
            alert(`Compra finalizada...\nTotal: $${totalPrice}`); // Mostrar el total en el alert

            // Vaciar el carrito
            localStorage.removeItem("cart"); // Elimina el carrito del localStorage
            location.reload(); // Recarga la página para actualizar la vista del carrito
        };



        function removeFromCart(productName) {
            const updatedCart = cart.filter(item => item.name !== productName);
            localStorage.setItem("cart", JSON.stringify(updatedCart));
            location.reload(); // Recarga la página para actualizar la vista del carrito
        }


        // Función para finalizar la compra
        document.getElementById("checkoutButton").onclick = function() {
            alert("Finalizando compra...");
            // Aquí puedes agregar la lógica para procesar el pago o redirigir a otra página.
        };
    </script>
</body>
</html>
