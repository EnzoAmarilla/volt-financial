<div id="form-team" class="background-form-partner lazyload">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="div-bg-form">
                    <h6 class="text-title-tv">{{__("translations.Let's team up 2")}}<span class="yellow-text">!</span></h6>
                    <p class="text-form-tv mt-4">{{__("translations.partner-text")}}</p>
                    <p class="title-hero-grey mt-5">{{__("translations.your-info")}}</p>
                    <form action="/become-a-partner" method="POST" class="w-100 mt-3">
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
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="companyName" placeholder="{{__("translations.Company")}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="website" placeholder="{{__("translations.Website")}}">
                        </div>
                        {{-- <div class="mb-4">
                            <textarea rows="6" class="form-control bg-input-form border-radius-2px" name="message" placeholder="{{__("translations.Message")}}" required></textarea>
                        </div> --}}
                        <p class="text-form-tv">{{__("translations.warning-text")}} <a data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                        <div class="mb-4 mt-4 form-check">
                            <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="yellow-text"> *</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-font button-form">{{__("translations.submit")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>