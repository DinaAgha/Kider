<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.head')
</head>
@include('includes.spinner')

@include('includes.navbar')
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Become A Teachers</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Become A Teachers</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">

                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Become A Teacher</h1>
                                <p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="tname" placeholder="Full Name">
                                                <label for="tname">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="temail" placeholder="Email">
                                                <label for="temail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="intgr" class="form-control border-0" id="level" placeholder="Teaching grade level">
                                                <label for="level">Teaching grade level</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="exp" placeholder="Experience Years">
                                                <label for="exp">Experience Years</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="phone"class="form-control border-0" placeholder="Phone Number" id="tphone" >
                                                <label for="tphone"> Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/img/call-to-action.jpg')}}" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                            
                      

                <!-- Call To Action Start -->

        <!-- Call To Action End -->


        <!-- Footer Start -->
        
       @include('includes.footer')
       @include('includes.footerjs')
</body>

</html>