<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register | SelfPayNet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="{{ asset('loginPages/css/style.css') }}" />
    </head>
    <style>
        .fm{
            font-size: 14px;
        }
    </style>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5"></div>
                </div>
                <div class="row justify-content-center" style="margin-top: -120px;">
                    <div class="col-md-12 col-lg-12">
                        <div class="wrap d-md-flex">
                            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                                <div class="text w-100">
                                    <img src="{{ asset('jen/assets/img/logo-trnasparent.png') }}" width="200px;" />
                                    <br />
                                    <br />
                                    <h2>Welcome to SelfPayNet</h2>
                                    <p>Already have an account</p>

                                    <a href="{{ url('login') }}" class="btn btn-white btn-outline-white">Sign In</a>
                                </div>
                            </div>
                            <div class="login-wrap p-4 p-lg-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Register</h3>
                                    </div>
                                </div>
                                <form method="POST" action="{{ url('doctor/account') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Name of Company</label>
                                        <input type="text" name="company_name" class="form-control" placeholder="Name of Company" required />
                                        @error('company_name')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required />
                                        @error('email')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone" required />
                                        @error('phone')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Speciality</label>
                                        <div class="input-group">
                                            <select name="speciality" id="speciality" class="form-control" >
                                                <option class="" value="">Choose one</option>
                                                @foreach ( $speciality as $speacility )
                                                <option class="" value="{{ $speacility->depart }}">{{ $speacility->depart }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('speciality')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Zip Code</label>
                                        <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" required />
                                        @error('zip_code')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                                        @error('password')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password Confirm</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm" required />
                                        @error('password_confirmation')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label class="checkbox-wrap checkbox-primary mb-0">
                                                Remember Me
                                                <input type="checkbox" checked />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password</a>
                                            @endif
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
