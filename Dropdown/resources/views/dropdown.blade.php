<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Dropdown Example</h1>
    <select id="itemDropdown">
        <option value="">Select an item</option>
    </select>

    <script>
        $(document).ready(function() {
            // Fetch items from the server and populate the dropdown
            $.get('/get-items', function(data) {
                data.forEach(function(item) {
                    $('#itemDropdown').append($('<option>', {
                        value: item.id,
                        text: item.name
                    }));
                });
            });
        });
    </script>
</body>
</html>
