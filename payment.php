<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
      <!-- font goggle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container2">
    <form action="">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" placeholder="Yosefina Aydha">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Example@gmail.com">
                </div>
                <div class="inputBox">
                    <span>Address  :</span>
                    <input type="text" placeholder="room - store - localcity">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>State :</span>
                        <input type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>Zip Code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>
            </div>

            <div class="col">
                <h3 class="title">Payment</h3>
                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="img/footer/paymentt.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name On Card :</span>
                    <input type="text" placeholder="Ms.Yosefina Aydha">
                </div>
                <div class="inputBox">
                    <span>Credit Card number :</span>
                    <input type="number" placeholder="111-222-333-444">
                </div>
                <div class="inputBox">
                    <span>Voucer  :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Discount :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>Total :</span>
                        <input type="text" placeholder="12345">
                    </div>
                </div>
            </div>

        </div>
        <button type="button" class="submit-btn" onclick="location.href='./index.php';">Proceed to Checkout</button>
    </form>
    </div>
</body>
</html>