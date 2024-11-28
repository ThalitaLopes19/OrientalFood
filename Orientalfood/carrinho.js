
     const cart = [];

        function addToCart(itemId) {
            const itemElement = document.querySelector(`.food-item[data-id="${itemId}"]`);
            const itemName = itemElement.dataset.name;
            const itemPrice = parseFloat(itemElement.dataset.price);

            const cartItem = { name: itemName, price: itemPrice };
            cart.push(cartItem);

            updateCart();
        }

        function updateCart() {
            const cartItemsElement = document.getElementById('cart-items');
            cartItemsElement.innerHTML = '';

            let total = 0;

            cart.forEach(item => {
                const cartItemElement = document.createElement('li');
                cartItemElement.classList.add('item');
                cartItemElement.innerHTML = `
                    <span>${item.name}</span>
                    <span>R$${item.price.toFixed(2)}</span>
                `;
                cartItemsElement.appendChild(cartItemElement);

                total += item.price;
            });

            const cartTotalElement = document.createElement('li');
            cartTotalElement.classList.add('item');
            cartTotalElement.innerHTML = `
                <strong>Total:</strong>
                <span>R$${total.toFixed(2)}</span>
            `;
            cartItemsElement.appendChild(cartTotalElement);

            const cartElement = document.getElementById('cart');
            if (cart.length > 0) {
                cartElement.style.display = 'block';
            } else {
                cartElement.style.display = 'none';
            }
        }