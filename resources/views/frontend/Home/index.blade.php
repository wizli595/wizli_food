@extends('frontend.layouts.master')

@section('content')
    <!--=============================
                            BANNER START
                        ==============================-->
    @include('frontend.Home.components.slider')
    <!--=============================
                            BANNER END
                        =============================-->


    <!--=============================
                                    WHY CHOOSE START
                             ==============================-->
    @include('frontend.Home.components.why-choose')
    <!--=============================
                                                                                                WHY CHOOSE END
                                                                                            ==============================-->


    <!--=============================
                      OFFER ITEM START
                    ==============================-->
    @include('frontend.Home.components.offer-item')
    <!-- CART POPUT START -->
    <div class="fp__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="fp__cart_popup_img">
                            <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="fp__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->
    <!--=============================
                    OFFER ITEM END
            ==============================-->


    <!--=============================
                MENU ITEM START
                    ==============================-->
    @include('frontend.Home.components.menu-item')
    <!--=============================
                MENU ITEM END
                 ==============================-->


    <!--=============================
                ADD SLIDER START
                ==============================-->

    @include('frontend.Home.components.ad-slider')
    <!--=============================
                ADD SLIDER END
                ==============================-->

    <!--=============================
                TEAM START
                ==============================-->
    @include('frontend.Home.components.team')
    <!--=============================
                TEAM END
                ==============================-->


    <!--=============================
                                                                                                DOWNLOAD APP START
                                                                                            ==============================-->
    @include('frontend.Home.components.app-download')
    <!--=============================
                                                                                                DOWNLOAD APP END
                                                                                            ==============================-->


    <!--=============================
                                                                                               TESTIMONIAL  START
                                                                                            ==============================-->
    @include('frontend.Home.components.testimonial')
    <!--=============================
                                                                                                TESTIMONIAL END
                                                                                            ==============================-->


    <!--=============================
                                                                                                COUNTER START
                                                    ==============================-->
    @include('frontend.Home.components.counter')
    <!--=============================
                                                        COUNTER END
                                                     ==============================-->


    <!--=============================
                                                                                                BLOG 2 START
                                                                                            ==============================-->
    @include('frontend.Home.components.blog')
    <!--=============================
                                                                                                BLOG 2 END
                                                                                            ==============================-->
@endsection
