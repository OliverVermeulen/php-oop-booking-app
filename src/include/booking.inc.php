<!-- Booking Page Module -->
<main class="booking-page">
    <div class="accommodation-booking">
        <h2>Bag End</h2>
        <img src="/php-oop-booking-app/src/images/bag-end.jpg" alt="Bag-end" class="accommodation-img">

        <div class="accommodation-data">
            <div class="accommodation-info">
                <p class="accommodation-location">The Shire, Ariandor</p>
                <p class="accommodation-description">Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a Hobbit-hole, and that means comfort.</p>
            </div>

            <form action="" method="post" class="booking-form">
                <div class="pricing">
                    <p class="price-per-night">R 1200 ZAR </p>
                    <p> per night</p>
                </div>
                <div class="booking-inputs">
                    <div class="check-in-out">
                        <input type="date" name="stay-length" class="stay-length">
                        <input type="date" name="stay-length" class="stay-length">
                    </div>
                    <input type="submit" value="Reserve" class="booking-btn">
                    <select class="booking-btn" name="accommodations">
                        <option value="volvo">Addams Family House</option>
                        <option value="saab">Pineapple House</option>
                        <option value="mercedes">ghfh</option>
                        <option value="audi">fghfg</option>
                    </select>
                </div>
                <div class="booking-costs">
                    <p class="price-breakdown">R1200 x 10 nights</p>
                    <p class="total">R12000</p>
                </div>
            </form>
        </div>
    </div>
</main>