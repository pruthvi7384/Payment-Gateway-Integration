<?php
    include '../components/Navigation__Bar.php';
    // rzp_test_Aj0dkuZlhAmub5
?>

    <!-- ---------------Donation Form----------------- -->
        <div class="container" id="donation__form">
            <div class="row">
                <div class="col-xl-12 text-center text-uppercase">
                    <h4 style="font-weight: bold">Donate To Our Ngo</h4>
                    <p style="font-weight: bold">Help to needed !</p>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-xl-6" id="donation__form__body">
                    <form class="row g-3">
                        <div class="col-xl-12">
                            <input type="text" id="name" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                        <div class="col-xl-12">
                            <input type="email" id="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>
                        <div class="col-xl-12">
                            <input type="number" id="number" class="form-control" placeholder="Enter Your Phone Number" required>
                        </div>
                        <div class="col-xl-12">
                            <input type="number" id="donation_amount" class="form-control" placeholder="Enter Donation Amount" required>
                        </div>
                        <div class="col-xl-12 text-center">
                            <button value="Pay Now" type="button" onClick="pay_now()" class="btn btn-success text-uppercase" style="font-weight: bold">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- ------------X---Donation Form---X-------------- -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            function pay_now(){
                var name=jQuery('#name').val();
                var email=jQuery('#email').val();
                var phone=jQuery('#number').val();
                var donation_amount=jQuery('#donation_amount').val();
                var options = {
                    "key": "rzp_test_JVUgsumzvjEx6L",
                    "amount":donation_amount*100, 
                    "currency": "INR",
                    "name": "NGO DONATION",
                    "description": "Help To Needed",
                    "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ33skj6_4nrPClptlOhbGtaPySgBWnJyGNGsSFEPiA7gf3gcPRU9vpgvUFen3ToGnoj_E&usqp=CAU",
                    "handler": function (response){
                        jQuery.ajax({
                                type:'post',
                                url:'payment_process.php',
                                data:"payment_id="+response.razorpay_payment_id+"&name="+name+"&email="+email+"&donation_amount="+donation_amount+"&phone="+phone,
                                success:function(result){
                                    window.location.href="ThankYou.php?id="+response.razorpay_payment_id;
                                }
                            });
                    },
                    "prefill": {
                        "name": name,
                        "email": email,
                        "contact": phone
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response){
                    alert(response.error.reason);
                });
                rzp1.open();
            }
        </script>
    <!-------------------Donation Script-------------------- -->

<?php
    include '../components/Footer.php';
?>