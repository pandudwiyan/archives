<div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Checkout</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <form action="invoice" method="POST">
                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Billing Details</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">

                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nama</label>
                                        <input placeholder="Nama" id="nama" name="nama" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->

                               <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>No Telepon</label>
                                        <input placeholder="No Telpon" id="tlp" name="tlp" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->

                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email</label>
                                        <input placeholder="Email" id="email" name="email" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->


                                <!-- Order Notes Textarea Start -->
                                <div class="order-notes mb-n2">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Alamat</label>
                                        <textarea id="alamat" name="alamat" placeholder="Alamat"  style="height:300px;"></textarea>
                                    </div>
                                </div>
                                <!-- Order Notes Textarea End -->

                            </div>
                            <!-- Different Address End -->
                        </div>
                    
                    <!-- Checkbox Form End -->

                </div>

                <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Your order</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table" id="table_co">
                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="order-button-payment">
                                <button type="submit" class="btn btn-dark btn-hover-primary rounded-0 w-100">Order</button>
                            </div>
                        </div>
                        <!-- Payment Accordion Order Button End -->
                    </div>
                    <!-- Your Order Area End -->
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->