@extends('layout.contact')

@section('title', 'Contact')

@section('content')

    {{--<script async defer--}}
            {{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6SZ3Y0LGv6kecQTynpa1heqEYchzI1NE&callback=initMap">--}}
    {{--</script>--}}

    <div class="row">
        <div class="small-12 columns">
            <h2>Contact Us</h2>
            <h3>Please feel free to message us with any questions you have!</h3>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <form method="POST" action="http://192.168.33.11/obct/public/contact" id="contactForm" name="contactForm">
                <div class="row">
                    <div class="large-12 columns">
                        <label>Name
                            <input type="text" placeholder="Name" name="name" for="name" id="name" />
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Phone
                            <input type="text" placeholder="(123) 123-1234" name="phone" for="phone" id="phone" />
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email
                            <input type="text" placeholder="email@email.com" name="email" for="email" id="email" />
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Input Label
                            <textarea rows="5" type="text" placeholder="Message for OBCT..." name="message" for="message" id="message"></textarea>
                        </label>
                    </div>
                </div>
                <button class="button success" id="submitForm" value="submit" for="submit" style="width: 200px" onsubmit="validate()">Submit</button>
            </form>
        </div>

        <div class="small-6 columns">
            {{--<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJRW8utolz9YgRAeVJedATr7E&key=AIzaSyC6SZ3Y0LGv6kecQTynpa1heqEYchzI1NE" allowfullscreen></iframe>--}}

        </div>
    </div>

    <script type="text/javascript">
        function validate()
        {
            if (document.contactForm.name.value === '') {
                alert('Please fill in your name');
                return false;
            }
        }
    </script>

@endsection
