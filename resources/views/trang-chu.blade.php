<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    @include('layout.page-css')
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>
<body>

<form name="test" id="test">
    tieu de<input id="title" name="title" required>
    <button type="submit">Nhập</button>
</form>

</body>
@include('layout.page-js')
</html>
<script type="text/javascript">
    $(document).ready(function () {

        $("#test").validate({
            rule: {
                title: "required"
            },
            messages: {
                title: "Vui lòng nhập"
            },
            errorElement: "p",
            errorPlacement: function (error, element) {
                var placement = $(element).data("error");
                if (placement) {
                    $(placement).append(error);
                } else {
                    error.insertAfter(element);
                }
            },
        });
    });
</script>