<div class="shoplist">
        <span>
        Sewa Perbulan
        </span>
    </div>

    <div class="container-cart">
        <table id="product-table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr data-id="1" data-name="Product 1" data-price="300000">
                    <td>
                        <div class="product-info">
                            <span>Playstation 4</span>
                        </div>
                    </td>
                    <td>Rp 300,000</td>
                    <td><input type="number" class="quantity-input" value="0" min="0"></td>
                    <td><button class="add-to-cart-btn" onclick="addToCart(1)">+Keranjang</button></td>
                </tr>

                <tr data-id="2" data-name="Product 2" data-price="400000">
                    <td>
                        <div class="product-info">
                            <span>Playstation 4 Slim</span>
                        </div>
                    </td>
                    <td>Rp 400,000</td>
                    <td><input type="number" class="quantity-input" value="0" min="0"></td>
                    <td><button class="add-to-cart-btn" onclick="addToCart(2)">+Keranjang</button></td>
                </tr>
                
                <tr data-id="3" data-name="Product 3" data-price="500000">
                    <td>
                        <div class="product-info">
                            <span>Playstation 4 Pro</span>
                        </div>
                    </td>
                    <td>Rp 500,000</td>
                    <td><input type="number" class="quantity-input" value="0" min="0"></td>
                    <td><button class="add-to-cart-btn" onclick="addToCart(3)">+Keranjang</button></td>
                </tr>
                
                <tr data-id="4" data-name="Product 4" data-price="700000">
                    <td>
                        <div class="product-info">
                            <span>Playstation 5 SE</span>
                        </div>
                    </td>
                    <td>Rp 700,000</td>
                    <td><input type="number" class="quantity-input" value="0" min="0"></td>
                    <td><button class="add-to-cart-btn" onclick="addToCart(4)">+Keranjang</button></td>
                </tr>
                
                <tr data-id="5" data-name="Product 5" data-price="600000">
                    <td>
                        <div class="product-info">
                            <span>Playstation 5 DE</span>
                        </div>
                    </td>
                    <td>Rp 600,000</td>
                    <td><input type="number" class="quantity-input" value="0" min="0"></td>
                    <td><button class="add-to-cart-btn" onclick="addToCart(5)">+Keranjang</button></td>
                </tr>
            </tbody>
        </table>

        <table id="cart">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart-body"></tbody>
        </table>

        <p class="warning" id="warning-message"></p>

        <button class="checkout-btn" onclick="goToCheckout()">Checkout</button>
    </div>

<script>
const cartItems = [];

function addToCart(id) {
    const productRow = document.querySelector(`#product-table tr[data-id="${id}"]`);
    const productName = productRow.querySelector('td:first-child span').textContent;
    const productPrice = parseInt(productRow.dataset.price);
    const productQuantity = parseInt(productRow.querySelector('.quantity-input').value, 10);
    const productImage = productRow.dataset.image; // Ambil path gambar dari atribut data-image

    const existingItem = cartItems.find(item => item.id === id);

    if (existingItem) {
        existingItem.quantity += productQuantity;
    } else {
        cartItems.push({ id, name: productName, price: productPrice, quantity: productQuantity, image: productImage });
    }

    displayCart();
}

function displayCart() {
    const cartBody = document.getElementById('cart-body');
    cartBody.innerHTML = '';

    cartItems.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <div class="product-info">
                    <span>${item.name}</span>
                </div>
            </td>
            <td>Rp ${item.price.toLocaleString()}</td>
            <td>${item.quantity}</td>
            <td>Rp ${(item.price * item.quantity).toLocaleString()}</td>
        `;
        cartBody.appendChild(row);
    });
}

function generateRandomOrderId() {
    let uniqueId;
    do {
        uniqueId = Math.floor(Math.random() * 9000) + 1000;
    } while (hasRepeatedDigits(uniqueId));

    return uniqueId;
}

function hasRepeatedDigits(number) {
    const digitSet = new Set();
    const digits = number.toString().split('');

    for (const digit of digits) {
        if (digitSet.has(digit)) {
            return true; // Ada pengulangan digit
        }
        digitSet.add(digit);
    }

    return false; // Tidak ada pengulangan digit
}

function goToCheckout() {
            if (cartItems.length === 0) {
                alert('Keranjang Kosong, isi terlebuh dahulu!.');
            } else {
                let totalAmount = 0;
                cartItems.forEach(item => {
                    totalAmount += item.price * item.quantity;
                });

                if (totalAmount === 0) {
                    alert('Total biaya 0, tambah produk terlebih dahulu!.');
                } else {
                    const numOfProducts = cartItems.reduce((acc, item) => acc + item.quantity, 0);
                    const productDetails = cartItems.map(({ name, quantity }) => ({ name, quantity }));
                    const productDetailsJSON = encodeURIComponent(JSON.stringify(productDetails));
                    const orderId = generateRandomOrderId();
                    window.location.href = `<?= site_url('checkout') ?>?order_id=${orderId}&total=${totalAmount}&numOfProducts=${numOfProducts}&productDetails=${productDetailsJSON}`;
                }
            }
        }
</script>

</body>