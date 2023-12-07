<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="booking">
        <h1 class="heading">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>Name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>Email :</span>
                <input type="text" placeholder="enter your email" name="email">
            </div>
             <div class="inputbox">
                <span>Phone :</span>
                <input type="text" placeholder="enter your number" name="phone">
            </div>
            <div class="inputbox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
             <div class="inputbox">
                <span>Where To :</span>
                <input type="text" placeholder="enter your visit" name="location">
            </div>
            <div class="inputbox">
                <span>Howmany:</span>
                <input type="number" placeholder="enter your guest" name="guest">
            </div>
             <div class="inputbox">
                <span>Arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>Leaving :</span>
                <input type="date" name="leaving">
            </div>
            <div class="inputbox">
            <input type="submit" value="submit" class="btn" name="send">
            </div>

        </div>
        </form>
    </section>
    </body>
</html>