<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap DateTimePicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libsatetimepicker/417.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Include Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Include Bootstrap DateTimePicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <form>
        <div class="form-group">
            <label for="birthday">Birthday:</label>
            <div class='input-group date' id='birthdayPicker'>
                <input type='text' class="form-control" name="birthday" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </form>

    <script>
        // Initialize the datetime picker
        $(function () {
            $('#birthdayPicker').datetimepicker({
                format: 'YYYY-MM-DD',  // Set the desired date format
                maxDate: moment(),     // Set the maximum date to the current date
                useCurrent: false      // Do not set the current date as default
            });
        });
    </script>
</body>
</html>