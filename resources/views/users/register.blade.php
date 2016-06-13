@extends('layouts.user')


@section('title', 'Register')

@section('content')

    <div class="row register">
        <div class="small-12 columns">
            <h2>Registration</h2>
            @if (session('success'))
                <div data-alert class="alert-box success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{url('/')}}">
                    <div class="row panel">
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="row">
                                    <div class="large-5 columns">
                                        <label>First Name
                                            <input type="text" name="first_name" placeholder="First Name" />
                                        </label>
                                    </div>
                                    <div class="large-5 columns">
                                        <label>Last Name
                                            <input type="text" name="last_name" placeholder="Last Name" />
                                        </label>
                                    </div>
                                    <div class="large-2 columns">
                                        <div class="row collapse">
                                            <label>Age
                                                <input type="number" name="age" placeholder="Age" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="row">
                                    <div class="large-5 columns">
                                        <label>Phone Number (parent)
                                            <input type="text" name="phone" placeholder="Phone" />
                                        </label>
                                    </div>
                                    <div class="large-2 columns">
                                        <label>Grade
                                            <input type="number" name="grade" placeholder="Grade" />
                                        </label>
                                    </div>
                                    <div class="large-5 columns">
                                        <div class="row collapse">
                                            <label>School
                                                <input type="text" name="school" placeholder="School" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>Address
                                            <input type="text" name="address" placeholder="Address" />
                                        </label>
                                    </div>
                                    <div class="large-1 columns">
                                        <label>Suite/Apt
                                            <input type="number" name="apt" placeholder="Suite/Apt" />
                                        </label>
                                    </div>
                                    <div class="large-4 columns">
                                        <div class="row collapse">
                                            <label>City
                                                <input type="text" name="city" placeholder="City" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="large-1 columns">
                                        <label>State
                                            <input type="text" name="state" placeholder="State" />
                                        </label>
                                    </div>
                                    <div class="large-2 columns">
                                        <label>Zip Code
                                            <input type="number" name="zip" placeholder="Zip Code" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="small-12 columns">
                            <div class="row">
                                <h4>Emergency Contact</h4>
                                <div class="row">
                                    <div class="large-7 columns">
                                        <label>Emergency Contact
                                            <input type="text" name="emergency_contact" placeholder="Emergency Contact" />
                                        </label>
                                    </div>
                                    <div class="large-2 columns">
                                        <label>Relationship
                                            <input type="text" name="relationship" placeholder="Relationship" />
                                        </label>
                                    </div>
                                    <div class="large-3 columns">
                                        <label>Emergency Phone
                                            <input type="text" name="emergency_phone" placeholder="Emergency Phone" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="row">
                                    <div class="large-12 columns">
                                        <label>Medical Info
                                            <textarea rows="5" name="medical_info" placeholder="Medicines, allergies, conditions"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button" id="studentRegister" name="submit">Submit</button>
                    </div>

            </form>
        </div>
    </div>

@endsection
