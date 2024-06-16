<!-- join.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
@include('includes.spinner')

@include('includes.navbar')
<!-- Navbar End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Join our School Kids</h1>
                        <form action="{{ route('insertKid') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <input type="text" id="gname" name="gname" class="form-control border-0" placeholder="Gurdian Name"value="{{ old('gname') }}"><br>
                                        <!-- <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name"> -->
                                        <label for="gname">Gurdian Name</label>
                                        @error('gname')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <!-- <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}"><br> -->
                                    <input type="text" id="email" name="email" class="form-control border-0" placeholder="Gurdian Email" value="{{ old('email') }}"><br>
                                        <!-- <input type="email" class="form-control border-0" id="email" placeholder="Gurdian Email"> -->
                                        <label for="email">Gurdian Email</label>
                                        @error('email')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <input type="text" id="cname" name="cname" class="form-control border-0" placeholder="Child Name" value="{{ old('cname') }}"><br>
                                        <label for="cname">Child Name</label>
                                        @error('cname')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <input type="text" id="age" name="age" class="form-control border-0" placeholder="Child Age" value="{{ old('age') }}"><br>
                                        <label for="age">Child Age</label>
                                        @error('age')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                     <input type="text" id="phone" name="phone" class="form-control border-0" placeholder="Gurdian Phone Number" value="{{ old('phone') }}"><br>
                                        <label for="phone">Gurdian Phone Number</label>
                                        @error('phone')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <label for="class">Available Classes in Kider</label>
                                <select name="class" id="class" class="form-control">
                                    <option value="">Please Select Classes you want to Enroll</option>
                                    <option value="Art" {{ old('class') == 'Art' ? 'selected' : '' }}>Art & Drawing</option>
                                    <option value="paint" {{ old('class') == 'paint' ? 'selected' : '' }}>Color Management</option>
                                    <option value="sport" {{ old('class') == 'sport' ? 'selected' : '' }}>Athletic & Dance</option>
                                    <option value="lang" {{ old('class') == 'lang' ? 'selected' : '' }}>Language & Speaking</option>
                                    <option value="rel" {{ old('class') == 'rel' ? 'selected' : '' }}>Religion & History</option>
                                    <option value="know" {{ old('class') == 'know' ? 'selected' : '' }}>General Knowledge</option>
                                </select>
                                @error('class')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                
                                <br><br>
                                <button class="btn btn-primary w-100 py-3" type="submit" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/img/appointment.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call To Action Start -->
@include('includes.call')
<!-- Call To Action End -->

<!-- Footer Start -->
@include('includes.footer')
@include('includes.footerjs')
</body>
</html>
