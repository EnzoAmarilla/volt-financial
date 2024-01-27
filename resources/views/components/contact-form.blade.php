<!-- Modal Contact -->
<div class="modal modal-slide-up fade" id="modal-form-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="bg-form-color">
                <div class="container pt-3 pb-1">
                    <div class="row p-2">
                        <div class="col-2 d-flex justify-content-start m-0">
                            <button type="button" class="close text-white" onclick="modal_doble_inactive()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="col-9 title-form-contact m-0">
                            <p class="title-hero-grey">{{__("translations.Contact Volt")}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-bg-form-contact">
                <h6 class="text-title-tv text-center">{{__("translations.I want to be energy independent")}}<span class="yellow-text">!</span></h6>
                <p class="title-hero-grey mt-4">{{__("translations.Your Information")}}</p>
                <form action="/contact-form" method="POST" class="w-100 mt-3">
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
                    <div class="container p-0">
                        <h6 class="text-white">{{__("translations.interested")}}</h6>
                        <div class="row">
                            <div class="col-4 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxSolar" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{__("translations.Solar")}}</label>
                            </div>
                            <div class="col-4 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxBatteries" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{__("translations.Batteries")}}</label>
                            </div> 
                            <div class="col-4 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxRoof" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{__("translations.Roof")}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxEvChargers" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">
                                    {{__("translations.EV Chargers")}}
                                </label>
                            </div>
                            <div class="col-4 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxEnergyEfficiency" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">{{__("translations.Energy Efficiency")}}</label>
                            </div> 
                            <div class="col-4 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxAc&Heat" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">
                                    {{__("translations.AC & Heat")}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <p class="text-form-tv">{{__("translations.warning-text")}} <a data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                    <div class="mb-4 mt-4 form-check">
                        <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="yellow-text"> *</span></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-font button-form">{{__("translations.submit-2")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Contact -->