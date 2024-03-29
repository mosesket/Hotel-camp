    <!-- Section Booking -->
    <div class="section">
        <div class="widget-booking-form">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <!-- Booking Complete -->
                            <div class="booking-complete">
                                <h5>BOOKING</h5>
                                <h2>Your Reservation Completed</h2>
                                <div class="complete-message">
                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.    
                                </div>
                            </div>
                            <!-- Booking Complete End -->
                            <!-- Booking Form -->
                            <div class="booking-form">
                                <h5>BOOKING FORM</h5>
                                <h2>Personal Info</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.</p>
                                <div class="data-form">
                                    <form action="booking.php" id="booking-form" method="post">
                                        <input type="hidden" name="form-room" value="Royal Single Room">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkin" id="form-checkin" value="04/20/2016" placeholder="CHECK IN" class="datepicker">
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkout" id="form-checkout" value="05/22/2016" placeholder="CHECK OUT" class="datepicker">
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-adults" id="form-adults">
                                                    <option value="">ADULTS</option>
                                                    <option value="1">1 ADULT</option>
                                                    <option value="2" selected="">2 ADULT</option>
                                                    <option value="3">3 ADULT</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-childrens" id="form-childrens">
                                                    <option value="">CHILDRENS</option>
                                                    <option value="1" selected="">1 CHILDREN</option>
                                                    <option value="2">2 CHILDREN</option>
                                                    <option value="3">3 CHILDREN</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-name" id="form-name" placeholder="YOUR NAME">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-surname" id="form-surname" placeholder="YOUR SURNAME">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-email" id="form-email" placeholder="YOUR EMAIL ADDRESS">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-phone" id="form-phone" placeholder="YOUR PHONE">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-address1" id="form-address1" placeholder="ADDRESS LINE 1">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-address2" id="form-address2" placeholder="ADDRESS LINE 2">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-city" id="form-city" placeholder="CITY">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-country" id="form-country" placeholder="COUNTRY">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea cols="6" rows="8" name="form-requirements" id="form-requirements" placeholder="SPECIAL REQUIREMENTS"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="BOOK NOW BY EMAIL" class="btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Booking Form End -->
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <!-- Booking Detail -->
                            <div class="booking-detail">
                                <h5>BOOKING DETAILS</h5>
                                <h2>Selected Room</h2>
                                <div class="detail-room">
                                    <div class="room-photo">
                                        <a href="rooms-detail.html" data-background="{{ asset('img/photo-room-5.jpg') }}"></a>
                                    </div>
                                    <div class="room-desc">
                                        <h3><a href="rooms-detail.html">Single Room</a></h3>
                                        <h4>$ 230 <small>PER NIGHT</small></h4>
                                    </div>
                                </div>
                                <div class="detail-info">
                                    <ul>
                                        <li>
                                            <label>CHECK IN</label>
                                            <p>04/20/2016</p>
                                        </li>
                                        <li>
                                            <label>CHECK OUT</label>
                                            <p>04/22/2016</p>
                                        </li>
                                        <li>
                                            <label>ADULTS</label>
                                            <p>2 PERSON</p>
                                        </li>
                                        <li>
                                            <label>CHILDRENS</label>
                                            <p>1 CHILDREN</p>
                                        </li>
                                        <li>
                                            <label>NIGHT</label>
                                            <p>2 NIGHT</p>
                                        </li>
                                        <li>
                                            <label>TAX (10%)</label>
                                            <p>$ 50</p>
                                        </li>
                                        <li class="total">
                                            <label>TOTAL PRICE</label>
                                            <p>$ 510</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Booking Detail End -->
                            <!-- Booking Help -->
                            <div class="booking-help">
                                <h5>HELP</h5>
                                <h2>Need Booking Help?</h2>
                                <p>If you need help with booking, Our advisor team are 24/7 at your service to help you.</p>
                                <p><a href="mailto:help@thegrandiumhotel.com">help@thegrandiumhotel.com</a></p>
                                <h3><i class="fa fa-phone-square"></i>1-800-123-45-67</h3>
                            </div>
                            <!-- Booking Help End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Booking End -->
