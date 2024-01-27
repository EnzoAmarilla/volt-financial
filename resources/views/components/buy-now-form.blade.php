<!-- Modal Buy Now -->
<div class="modal modal-slide-up fade" id="modal-form-buy-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="bg-form-color">
                <div class="container pt-3 pb-1">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-start m-0">
                            <button type="button" class="close text-white" onclick="modal_doble_inactive()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="col-6 d-flex justify-content-start title-form m-0">
                            <p class="title-hero-grey">{{__("translations.Qualify")}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-bg-form">
                <h6 class="text-title-tv text-center-md text-center-sm">{{__("translations.Your home may qualify")}}<span class="yellow-text">!</span></h6>
                <p class="text-form-tv mt-4">{{__("translations.buynow-text")}}</p>
                <p class="title-hero-grey mt-5">{{__("translations.Your Information")}}</p>
                <form action="/buy-now-form" method="POST" class="w-100 mt-3">
                    @csrf
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="amount" placeholder="{{__("translations.Average Monthly Electric Bill (USD)")}}">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="street_address" placeholder="{{__("translations.Street Address")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="city" placeholder="{{__("translations.City")}}" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="zip" placeholder="{{__("translations.Zip")}}" required>
                    </div>
                    <div class="mb-4 mt-4 form-check">
                        <input type="checkbox" class="form-check-input" name="checkboxHomeOwner" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{__("translations.I'm a home owner")}}<span class="yellow-text"> *</span></label>
                    </div>
                    <p class="text-form-tv">{{__("translations.warning-text")}} <a data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                    <div class="mb-4 mt-4 form-check">
                        <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="yellow-text"> *</span></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-font button-form">{{__("translations.Do I Qualify")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Buy Now -->