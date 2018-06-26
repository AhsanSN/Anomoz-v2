<!DOCTYPE html>
<html>
<head>
  <script src="https://www.jquery-az.com/javascript/alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://www.jquery-az.com/javascript/alert/dist/sweetalert.css">
</head>
<body>
<script type="text/javascript">
function JSalert(){
	swal({   title: "We couldn't find the page you were looking for.",   
    text: "Try searching using your search bar.",   
    type: "warning",   
    }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        } 
        else {     
            swal("Hurray", "Account is not removed!", "error");   
            } });
}
JSalert();
</script>
</body>
</html>