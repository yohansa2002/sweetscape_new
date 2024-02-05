@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated & Join Our Newsletter</span></h2>
                    <p>Get the freshest SweetScape Bakery updates and offers right to your inbox! Plus, enjoy 10% off on your birthday when you share the date with us! </p>
                </div>
                <form >
                    
                    <div class="input-group d-flex justify-content-center">
                        {{-- <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here"> --}}
                        <div class="input-group-append">
                            <button class="btn btn-primary">
                                <a href="{{url('subscribe_form')}}" style="color: white;">Subscribe</a>
                            </button> 
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

