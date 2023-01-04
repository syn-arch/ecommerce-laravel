@extends('layout.home')

@section('content')
<!-- Contact -->
<section class="section-wrap contact pb-40">
    <div class="container">
        <div class="row">

            <div class="col-md-8 mb-40">
                <form id="contact-form" action="#">

                    <div class="contact-name">
                        <input name="name" id="name" type="text" placeholder="Name*">
                    </div>
                    <div class="contact-email">
                        <input name="mail" id="mail" type="email" placeholder="E-mail*">
                    </div>
                    <div class="contact-subject">
                        <input name="subject" id="subject" type="text" placeholder="Subject">
                    </div>

                    <textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
                    <input type="submit" class="btn btn-lg btn-dark btn-submit" value="Send message"
                        id="submit-message">
                    <div id="msg" class="message"></div>
                </form>
            </div> <!-- end col -->

            <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
                <div class="contact-item">
                    <h6>Address</h6>
                    <address>Zenna inc.<br>
                        546 Little Lonsdale st<br>
                        Philippines<br>
                        PH 62058</address>
                </div> <!-- end address -->

                <div class="contact-item">
                    <h6>Information</h6>
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:theme@support.com">theme@support.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><span>+1 (800) 888 5260 52 63</span>
                        </li>
                        <li>
                            <i class="fa fa-print"></i><span>+1 (800) 888 5260 52 64</span>
                        </li>
                    </ul>
                </div> <!-- end information -->

                <div class="contact-item">
                    <h6>Business hours</h6>
                    <ul>
                        <li>Monday – Friday: 9am to 20 pm</li>
                        <li>Saturday: 9am to 17 pm</li>
                        <li>Sunday: day off</li>
                    </ul>
                </div> <!-- end business hours -->
            </div>

        </div>
    </div>
</section> <!-- end contact -->

<!-- Google Map -->
<div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>
@endsection
