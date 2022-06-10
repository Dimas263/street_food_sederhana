<?=include_once ("header.php")?>

    <!-- page-banner-section
        ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Book A Table</h1>
            <span>reservation</span>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- page-ban-list -->
    <div class="container">
        <ul class="page-ban-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="reservation">Book a Table</a></li>
        </ul>
    </div>
    <!-- end page-ban-list -->


    <!-- contact-section
        ================================================== -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-box">
                <div class="title-section">
                    <h2>Book a Table</h2>
                    <span> </span>
                </div>
                <form id="reservation-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="name">Your Name:</label>
                            <input name="name" id="name" type="text" placeholder="Enter your name">
                        </div>
                        <div class="col-sm-6">
                            <label for="time">Time:</label>
                            <input name="time" id="time" type="text" placeholder="12:00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="date">Date:</label>
                            <input name="date" id="date" type="text" placeholder="05/23">
                        </div>
                        <div class="col-sm-6">
                            <label for="guest">Guest:</label>
                            <input name="guest" id="guest" type="text" placeholder="2">
                        </div>
                    </div>
                    <label for="comment">Message:</label>
                    <textarea name="comment" id="comment" placeholder="Enter message"></textarea>
                    <div class="center-button">
                        <input type="submit" id="submit_reservation" value="Reservations">
                        <div id="msg" class="message"></div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- End contact section -->

<?=include_once ("footer.php")?>