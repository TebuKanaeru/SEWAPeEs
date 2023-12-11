<div class="co-form">
        <span>
        Checkout Form
        </span>
    </div>

    <div class="container-co">
        <form class="payment-form">
            <span id="orderId" class="order-id"></span>

            <label for="name">Nama:</label>
            <input type="text" id="name" class="payment-input" required>

            <label for="email">Email:</label>
            <input type="email" id="email" class="payment-input" required>
            <p id="emailError" class="error-message"></p>

            <label for="address">Alamat:</label>
            <textarea id="address" class="payment-input" required></textarea>

            <label for="phone">Nomor Handpone:</label>
            <input type="tel" id="phone" class="payment-input" required>

            <label for="startDate">Awal Sewa:</label>
            <input type="date" id="startDate" class="payment-input" required>

            <label for="endDate">Akhir Sewa:</label>
            <input type="date" id="endDate" class="payment-input" required>

            <label for="numOfProducts">Jumlah Produk:</label>
            <input type="text" id="numOfProducts" class="payment-input" readonly>

            <div id="productDetails"></div>

            <label for="totalAmount">Total Biaya:</label>
            <input type="text" id="totalAmount" class="payment-input" readonly>

            <button type="button" class="pay-btn" onclick="processPayment()">Sewa Sekarang</button>
        </form>
    </div>

<script>
        const urlParams = new URLSearchParams(window.location.search);
        const orderId = parseInt(urlParams.get('order_id')) || null;
        const totalAmount = urlParams.get('total');
        const numOfProducts = urlParams.get('numOfProducts');
        const productDetails = JSON.parse(urlParams.get('productDetails'));

        const initialTotalAmount = parseFloat(totalAmount);
        document.getElementById('totalAmount').value = `Rp ${initialTotalAmount.toLocaleString()}`;

        const orderIdElement = document.getElementById('orderId');
        orderIdElement.innerHTML = orderId !== null ? `Nomor ID: ${orderId}` : 'Nomor ID: Belum Diketahui';
        document.getElementById('totalAmount').value = `Rp ${parseFloat(totalAmount).toLocaleString()}`;
        document.getElementById('numOfProducts').value = numOfProducts;

        // Display product details
        const productDetailsContainer = document.getElementById('productDetails');
        productDetails.forEach((product, index) => {
            const productLabel = document.createElement('label');
            productLabel.textContent = `Produk ${index + 1}: ${product.name} (Qty: ${product.quantity})`;
            productDetailsContainer.appendChild(productLabel);
        });
        
        function processPayment() {
            // Implement payment processing logic here
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('address').value;
            const phone = document.getElementById('phone').value;
            const startDate = new Date(document.getElementById('startDate').value);
            const endDate = new Date(document.getElementById('endDate').value);

            const formattedStartDate = startDate.toLocaleDateString('id-ID');
            const formattedEndDate = endDate.toLocaleDateString('id-ID');

            // Calculate the number of months between start and end dates
            const monthsDiff = (endDate.getFullYear() - startDate.getFullYear()) * 12 + endDate.getMonth() - startDate.getMonth();

            // Calculate the total amount for each month
            const currentTotalAmount = parseInt(document.getElementById('totalAmount').value.replace(/\D/g, ''), 10);
            const totalAmountPerMonth = currentTotalAmount;

            // Calculate total amount for the entire period
            const totalAmount = totalAmountPerMonth * (monthsDiff + 1); // Adding 1 to include the first month

            // Display the updated total amount
            document.getElementById('totalAmount').value = `Rp ${totalAmount.toLocaleString()}`;
            document.getElementById('totalAmount').value = `Rp ${initialTotalAmount.toLocaleString()}`;


            if (!name || !email || !address || !phone || !startDate || !endDate) {
                alert('Tolong isi formulir yang kosong!');
                return;
            }
            
            alert('Payment successful!\n\n' +
                `Nomor ID: ${orderId !== null ? orderId : 'Belum Diketahui'}\n` +
                `Nama: ${name}\n` +
                `Email: ${email}\n` +
                `Alamat: ${address}\n` +
                `Nomor Handphone: ${phone}\n` +
                `Awal Sewa ${formattedStartDate}\n` +
                `Akhir Sewa ${formattedEndDate}\n` +
                `Total Biaya: Rp ${totalAmount.toLocaleString()}\n` +
                `Jumlah Produk: ${numOfProducts}\n` +
                `Detail Produk: ${JSON.stringify(productDetails)}`);


            // You can redirect to a thank you page or perform other actions
            window.location.href = `<?= site_url('confirm') ?>?order_id=${orderId}&name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&address=${encodeURIComponent(address)}&phone=${encodeURIComponent(phone)}&startDate=${encodeURIComponent(startDate)}&endDate=${encodeURIComponent(endDate)}&totalAmount=${encodeURIComponent(totalAmount)}&numOfProducts=${encodeURIComponent(numOfProducts)}&productDetails=${encodeURIComponent(productDetails)}`;

            // Continue with the payment processing logic
            generatePaymentCode();


        }
</script>