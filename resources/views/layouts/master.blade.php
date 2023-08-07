<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
   

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

@include('layouts.inc.admin-navbar')

<div id="layoutSidenav">

   
      @include('layouts.inc.admin-sidebar')
    <div id="layoutSidenav_content">
         <main> 
            @yield('content')
         </main>
    </div>
</div>

 

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('assets/js/scripts.js') }}" ></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mysummernote").summernote({
            height: 150,
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

<script>
    $(document).ready(function () {
        var numberOfDays = $('#days').val();

        if (numberOfDays > 0) {
            $('#itineraryFieldsContainer').show();
            generateItineraryFields(numberOfDays);
        } else {
            $('#itineraryFieldsContainer').hide();
            $('#itineraryFieldsContainer').empty();
        }

        $('#days').on('input', function () {
            numberOfDays = $(this).val();

            if (numberOfDays > 0) {
                $('#itineraryFieldsContainer').show();
                generateItineraryFields(numberOfDays);
            } else {
                $('#itineraryFieldsContainer').hide();
                $('#itineraryFieldsContainer').empty();
            }
        });

        function generateItineraryFields(numberOfDays) {
            var itineraryFields = '';

            for (var i = 1; i <= numberOfDays; i++) {
                var itineraryText = $('#itinerary' + i).val() || ''; // Retrieve existing itinerary data

                itineraryFields += `
                    <div class="mb-3">
                        <label for="itinerary${i}">Itinerary - Day ${i}</label>
                        <textarea name="itinerary[${i}]" id="itinerary${i}" rows="3" class="form-control itinerary-editor" required>${itineraryText}</textarea>
                    </div>
                `;
            }

            $('#itineraryFieldsContainer').html(itineraryFields);

            $('.itinerary-editor').summernote({
                height: 200, // Set the desired height of the editor
            });
        }

        $('#holidayForm').on('submit', function (event) {
            event.preventDefault();

            var formData = $(this).serialize();

            // Perform AJAX submission or submit the form normally
            // Adjust the AJAX URL as needed based on the route
            var ajaxUrl = "{{ route('admin.store') }}";

            $.ajax({
                url: ajaxUrl,
                type: "POST",
                data: formData,
                success: function (response) {
                    // Handle the success response
                    console.log(response);
                },
                error: function (xhr) {
                    // Handle the error response
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>






        
</body>
</html>