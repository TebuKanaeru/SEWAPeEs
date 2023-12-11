    <div class="co-form-cf">
        <div class="confirmation-message">
            <p>Segera lakukan pembayaran</p>
        </div>

        <div class="confirmation-details">
            <label for="orderId">Nomor ID:</label>
            <span id="orderId"></span>
        </div>

        <div class="confirmation-details">
            <label for="name">Nama:</label>
            <span id="name"></span>
        </div>

        <div class="confirmation-details">
            <label for="email">Email:</label>
            <span id="email"></span>
        </div>

        <div class="confirmation-details">
            <label for="address">Alamat:</label>
            <span id="address"></span>
        </div>

        <div class="confirmation-details">
            <label for="phone">Nomor Handphone:</label>
            <span id="phone"></span>
        </div>

        <div class="confirmation-details">
            <label for="startDate">Awal Sewa:</label>
            <span id="startDate"></span>
        </div>

        <div class="confirmation-details">
            <label for="endDate">Akhir Sewa:</label>
            <span id="endDate"></span>
        </div>

        <div class="confirmation-details">
            <label for="numOfProducts">Jumlah Produk:</label>
            <span id="numOfProducts"></span>
        </div>

        <div id="productDetails" class="confirmation-details">
            <label for="productDetails">Detail Produk:</label>
            <span id="productDetails"></span>
        </div>

        <div class="confirmation-details">
            <label for="totalAmount">Total Biaya:</label>
            <span id="totalAmount"></span>
        </div>

        <div class="back-to-shop">
            <a href="shoplist.php">Kembali ke Toko</a>
        </div>
    </div>

    <script>
    const urlParams = new URLSearchParams(window.location.search);
    const orderId = urlParams.get('order_id');
    const name = decodeURIComponent(urlParams.get('name'));
    const email = decodeURIComponent(urlParams.get('email'));
    const address = decodeURIComponent(urlParams.get('address'));
    const phone = decodeURIComponent(urlParams.get('phone'));
    const startDate = new Date(urlParams.get('startDate')).toLocaleDateString('id-ID');
    const endDate = new Date(urlParams.get('endDate')).toLocaleDateString('id-ID');
    const numOfProducts = decodeURIComponent(urlParams.get('numOfProducts'));
    const totalAmount = decodeURIComponent(urlParams.get('totalAmount'));
    const productDetails = decodeURIComponent(urlParams.get('productDetails'));

    document.getElementById('orderId').textContent = orderId;
    document.getElementById('name').textContent = name;
    document.getElementById('email').textContent = email;
    document.getElementById('address').textContent = address;
    document.getElementById('phone').textContent = phone;
    document.getElementById('startDate').textContent = startDate;
    document.getElementById('endDate').textContent = endDate;
    document.getElementById('numOfProducts').textContent = numOfProducts;
    document.getElementById('productDetails').textContent = productDetails;
    document.getElementById('totalAmount').textContent = `Rp ${parseFloat(totalAmount).toLocaleString()}`;
    </script>