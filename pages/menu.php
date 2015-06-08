<?php
	session_start();
	if(!isset($_SESSION["administrador"]))
	{
	header("Location:login.php");
		}
	?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menú SFA</title>
    <!-- liga al logotipo de SFA-->
    <link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	
	<!-- paquete de iconos para el menu -->
	<link href="../dist/css/iconos/fonts.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="../js/jquery.min.js"></script>
    <!--script src="../js/jquery.min.js"></script-->
	<script type="text/javascript" src="../js/alertify.js"></script>
    <script type="text/javascript" src="../js/alertify.min.js"></script>
	<script type="text/javascript" src="../js/funcionesmenu.js"></script>
    // <script src="data:application/octet-stream;base64,ZnVuY3Rpb24gY2FyZ2FyWm9uYShpZCl7DQokKCcjbGlzdGEnKS5sb2FkKCd2aXN0YS9uYXZlZ2FjaW9uLnBocD9pZD0nK2lkKTsNCn0NCg0KDQpmdW5jdGlvbiBjYXJnYXIoaWQsaWR6b25hKXsNCiQoJyNkYXRvcycpLmxvYWQoJ2pzL3RhYmxhMS5waHA/aWQ9JytpZCsnJmlkem9uYT0nK2lkem9uYSk7DQokKCcjZ3JhZmljb3MnKS5sb2FkKCd2aXN0YS90YWJsYTIucGhwP2lkPScraWQrJyZpZHpvbmE9JytpZHpvbmEpOw0KfQ0KDQpmdW5jdGlvbiBsb2Fkem9uYSgpew0KICAgICQoJyNhcmVhJykubG9hZCgnLi4vZGF0b3MvY2FyZ2FyZGF0b3N6b25hLnBocCcpOw0KfQ0KDQpmdW5jdGlvbiBjYXJnYXJkYXRvc3pvbmEobGltaXRlKQ0Kew0KDQogICAgdmFyIHVybD0iLi4vZGF0b3MvY2FyZ2FyZGF0b3N6b25hLnBocCI7DQogICAgJC5wb3N0KHVybCx7bGltaXRlOmxpbWl0ZX0sZnVuY3Rpb24ocmVzcG9uc2VUZXh0KXsNCiAgICAgICAgJCgiI2FyZWEiKS5odG1sKHJlc3BvbnNlVGV4dCk7DQogICAgfSkNCn0NCg0KLy9GVU5DSU9OIFBBUkEgREVURVJNSU5BUiBFTCBTT1BPUlRFIFBBUkEgQUpBWCwgREUgQUNVRVJETyBBTCBFWFBMT1JBRE9SLg0KZnVuY3Rpb24gYWpheEZ1bmN0aW9uKCkgew0KICAgIHZhciB4bWxIdHRwOw0KICAgIHRyeSB7DQogICAgICAgICAgICAvLyBGaXJlZm94LCBPcGVyYSA4LjArLCBTYWZhcmkNCiAgICAgICAgICAgIHhtbEh0dHA9bmV3IFhNTEh0dHBSZXF1ZXN0KCk7DQogICAgICAgICAgICByZXR1cm4geG1sSHR0cDsNCiAgICAgICAgfSBjYXRjaCAoZSkgew0KICAgICAgICAgICAgICAgIC8vIEludGVybmV0IEV4cGxvcmVyDQogICAgICAgICAgICAgICAgdHJ5IHsNCiAgICAgICAgICAgICAgICAgICAgICAgIHhtbEh0dHA9bmV3IEFjdGl2ZVhPYmplY3QoIk1zeG1sMi5YTUxIVFRQIik7DQogICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4geG1sSHR0cDsNCiAgICAgICAgICAgICAgICB9IGNhdGNoIChlKSB7DQogICAgICAgICAgICAgICAgICAgICAgICB0cnkgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB4bWxIdHRwPW5ldyBBY3RpdmVYT2JqZWN0KCJNaWNyb3NvZnQuWE1MSFRUUCIpOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4geG1sSHR0cDsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9IGNhdGNoIChlKSB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFsZXJ0KCJUdSBuYXZlZ2Fkb3Igbm8gc29wb3J0YSBBSkFYISIpOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIH0NCiAgICAgICB9DQp9DQoNCg0KZnVuY3Rpb24gRW52aWFyKF9wYWdpbmEsY2FwYSxtZXRvZG8pIHsNCiAgICB2YXIgYWpheDsNCiAgICBhamF4ID0gYWpheEZ1bmN0aW9uKCk7DQogICAgaWYobWV0b2RvPT0nR0VUJyl7DQogICAgICAgIC8vYWxlcnQoX3BhZ2luYSk7DQogICAgICAgIGFqYXgub3BlbigiR0VUIiwgX3BhZ2luYSwgdHJ1ZSk7DQogICAgfQ0KICAgIGVsc2UgaWYobWV0b2RvPT0nUE9TVCcpew0KICAgICAgICBhamF4Lm9wZW4oIlBPU1QiLCBfcGFnaW5hLCB0cnVlKTsgICAgDQogICAgfSAgICANCiAgICBhamF4LnNldFJlcXVlc3RIZWFkZXIoIkNvbnRlbnQtVHlwZSIsImFwcGxpY2F0aW9uL3gtd3d3LWZvcm0tdXJsZW5jb2RlZCIpOw0KICAgIGFqYXgub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKQ0KICAgICAgICB7DQogICAgICAgICAgICBpZiAoYWpheC5yZWFkeVN0YXRlID09IDQpDQogICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChjYXBhKS5pbm5lckhUTUwgPSBhamF4LnJlc3BvbnNlVGV4dDsNCiAgICAgICAgICAgICAgICB9DQogICAgICAgIH0NCiAgICBhamF4LnNlbmQobnVsbCk7DQp9DQovL0ZVTkNJT04gUEFSQSBDQVJHQVIgVU5BIFBBR0lOQSBFTiBFTCBDT05URU5JRE8NCmZ1bmN0aW9uIEVudmlhcjEoX3BhZ2luYSxjYXBhLG1ldG9kbykgew0KICAgIHZhciBhamF4Ow0KICAgIGFqYXggPSBhamF4RnVuY3Rpb24oKTsNCiAgICBpZihtZXRvZG89PSdHRVQnKXsNCgkJLy9hbGVydChfcGFnaW5hKTsNCiAgICAgICAgYWpheC5vcGVuKCJHRVQiLCBfcGFnaW5hLCB0cnVlKTsNCiAgICB9DQogICAgZWxzZSBpZihtZXRvZG89PSdQT1NUJyl7DQogICAgICAgIGFqYXgub3BlbigiUE9TVCIsIF9wYWdpbmEsIHRydWUpOyAgICANCiAgICB9ICAgIA0KICAgIGFqYXguc2V0UmVxdWVzdEhlYWRlcigiQ29udGVudC1UeXBlIiwiYXBwbGljYXRpb24veC13d3ctZm9ybS11cmxlbmNvZGVkIik7DQogICAgYWpheC5vbnJlYWR5c3RhdGVjaGFuZ2UgPSBmdW5jdGlvbigpDQogICAgICAgIHsNCiAgICAgICAgICAgIGlmIChhamF4LnJlYWR5U3RhdGUgPT0gNCkNCiAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGNhcGEpLmlubmVySFRNTCA9IGFqYXgucmVzcG9uc2VUZXh0Ow0KICAgICAgICAgICAgICAgIH0NCiAgICAgICAgfQ0KICAgIGFqYXguc2VuZChudWxsKTsNCn0NCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vRk9STVVMQVJJT1MNCi8vRk9STVVMQVJJTw0KZnVuY3Rpb24gZ3JhZGllbnQoaWQsIGxldmVsKQ0Kew0KCXZhciBib3ggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7DQoJYm94LnN0eWxlLm9wYWNpdHkgPSBsZXZlbDsNCglib3guc3R5bGUuTW96T3BhY2l0eSA9IGxldmVsOw0KCWJveC5zdHlsZS5LaHRtbE9wYWNpdHkgPSBsZXZlbDsNCglib3guc3R5bGUuZmlsdGVyID0gImFscGhhKG9wYWNpdHk9IiArIGxldmVsICogMTAwICsgIikiOw0KCWJveC5zdHlsZS5kaXNwbGF5PSJibG9jayI7DQoJcmV0dXJuOw0KfQ0KZnVuY3Rpb24gZmFkZWluKGlkKSANCnsNCgl2YXIgbGV2ZWwgPSAwOw0KCXdoaWxlKGxldmVsIDw9IDEpDQoJew0KCQlzZXRUaW1lb3V0KCAiZ3JhZGllbnQoJyIgKyBpZCArICInLCIgKyBsZXZlbCArICIpIiwgKGxldmVsKiAxMDAwKSArIDEwKTsNCgkJbGV2ZWwgKz0gMC4wMTsNCgl9DQp9DQoNCmZ1bmN0aW9uIGNsb3NlYm94KCkNCnsNCiAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdib3gnKS5zdHlsZS5kaXNwbGF5PSdub25lJzsNCiAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzaGFkb3dpbmcnKS5zdHlsZS5kaXNwbGF5PSdub25lJzsNCn0NCmZ1bmN0aW9uIEVudmlhckZvcm0oX3BhZ2luYSxjYXBhLG1ldG9kbyxmb3JtdGl0bGUsZmFkaW4pIHsNCiAgICB2YXIgYWpheDsNCiAgICBhamF4ID0gYWpheEZ1bmN0aW9uKCk7DQogICAgaWYobWV0b2RvPT0nR0VUJyl7DQogICAgICAgIGFqYXgub3BlbigiR0VUIiwgX3BhZ2luYSwgdHJ1ZSk7CQ0KICAgIH0NCiAgICBhamF4LnNldFJlcXVlc3RIZWFkZXIoIkNvbnRlbnQtVHlwZSIsImFwcGxpY2F0aW9uL3gtd3d3LWZvcm0tdXJsZW5jb2RlZCIpOw0KICAgIGFqYXgub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKQ0KICAgICAgICB7DQogICAgICAgICAgICBpZiAoYWpheC5yZWFkeVN0YXRlID09IDQpDQogICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGNhcGEpLmlubmVySFRNTCA9IGFqYXgucmVzcG9uc2VUZXh0Ow0KCQkJCQkgIHZhciBib3ggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYm94Jyk7IA0KCQkJCQkgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzaGFkb3dpbmcnKS5zdHlsZS5kaXNwbGF5PSdibG9jayc7DQoJCQkJCQ0KCQkJCQkgIHZhciBidGl0bGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYm94dGl0bGUnKTsNCgkJCQkJICBidGl0bGUuaW5uZXJIVE1MID0gZm9ybXRpdGxlOw0KCQkJCQkgIA0KCQkJCQkgIGlmKGZhZGluKQ0KCQkJCQkgIHsNCgkJCQkJCSBncmFkaWVudCgiYm94IiwgMCk7DQoJCQkJCQkgZmFkZWluKCJib3giKTsNCgkJCQkJICB9DQoJCQkJCSAgZWxzZQ0KCQkJCQkgIHsgCQ0KCQkJCQkJYm94LnN0eWxlLmRpc3BsYXk9J2Jsb2NrJzsNCgkJCQkJICB9ICAJDQogICAgICAgICAgICAgICAgfQ0KICAgICAgICB9DQogICAgYWpheC5zZW5kKG51bGwpOw0KfQ0KDQoNCiAgZnVuY3Rpb24gRW52aWFyUGFyYW1ldHJvcyhfcGFnaW5hLGZvcm11bGFyaW8sY2FwYSxtZXRvZG8pIHsNCiAgICB2YXIgYWpheDsNCiAgICB2YXIgcG9zdD0iIjsNCgl2YXIgbWVuc2FqZT0iIjsNCiAgICB2YXIgZnJtOw0KICAgIA0KICAgIGFqYXggPSBhamF4RnVuY3Rpb24oKTsNCiAgICBpZiAoYWpheD09ZmFsc2UpIHsNCiAgICAJYWxlcnQoIkV4Y2VwdGlvbiBBSkFYIik7DQogICAgCXJldHVybjsNCiAgICB9DQogICAgaWYoZm9ybXVsYXJpbyE9Jycpew0KICAgICAJZnJtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZm9ybXVsYXJpbyk7CQ0KICAgIAkJZm9yIChpPTA7aTxmcm0uZWxlbWVudHMubGVuZ3RoO2krKykNCiAgICAJCXsNCiAgICAJCQlpZigoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRleHRhcmVhIikgfHwoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gImRhdGUiKSB8fCAoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRpbWUiKSB8fCAoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRleHQiKXx8ZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gImNoZWNrYm94Inx8IChmcm0uZWxlbWVudHNbaV0udHlwZSA9PSAiaGlkZGVuIil8fChmcm0uZWxlbWVudHNbaV0udHlwZSA9PSAicGFzc3dvcmQiKXx8KGZybS5lbGVtZW50c1tpXS50eXBlID09ICJlbWFpbCIpfHwoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInNlbGVjdC1vbmUiKSkgewkJCQkNCgkJCQkJaWYoZnJtLmVsZW1lbnRzW2ldLnR5cGU9PSJ0ZXh0IiAmJiBmcm0uZWxlbWVudHNbaV0udmFsdWU9PSIiKXsNCgkJCQkJCW1lbnNhamUrPSJGYWx0YSBlbCBjYW1wbyBvYmxpZ2F0b3JpbzogIiArZnJtLmVsZW1lbnRzW2ldLm5hbWUgICsiXG4iOw0KCQkJCQl9DQoJCQkJCWVsc2V7CQkJCQ0KCQkJCQkJcG9zdCArPSBmcm0uZWxlbWVudHNbaV0ubmFtZSArICI9IjsNCiAgICAJCQkJCXBvc3QgKz0gZnJtLmVsZW1lbnRzW2ldLnZhbHVlIDsNCiAgICAJCQkJCXBvc3QgKz0gIiYiOw0KCQkJCQl9DQogICAgCQkJfQ0KICAgIAkJfQ0KICAgIC8vCQlwb3N0PXBvc3Quc3Vic3RyaW5nKDEscG9zdC5sZW5ndGgtMSk7DQogICAgIAl9DQoJLy9hbGVydChfcGFnaW5hK3Bvc3QpOw0KCWlmKG1lbnNhamUhPSIiKXthbGVydChtZW5zYWplKTtyZXR1cm47fQkNCiAgICBhamF4Lm9wZW4oIlBPU1QiLCBfcGFnaW5hLCB0cnVlKTsgICAgDQogICAgYWpheC5vbnJlYWR5c3RhdGVjaGFuZ2UgPSBmdW5jdGlvbigpew0KICAgICAgICBpZiAoYWpheC5yZWFkeVN0YXRlID09IDQpew0KICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGNhcGEpLmlubmVySFRNTCA9IGFqYXgucmVzcG9uc2VUZXh0Ow0KCX0NCiAgICB9DQoJIGFqYXguc2V0UmVxdWVzdEhlYWRlcigiQ29udGVudC1UeXBlIiwiYXBwbGljYXRpb24veC13d3ctZm9ybS11cmxlbmNvZGVkIik7DQogICAgaWYoZm9ybXVsYXJpbyE9Jycpew0KICAgIAkJaWYocG9zdCE9Jycpew0KICAgIAkJCWFqYXguc2VuZChwb3N0KTsgCQkNCiAgICAJCX0JDQogICAgfQ0KICAgIA0KICAgfQ0KICAgDQpmdW5jdGlvbiBFbnZpYXJQYXJhbWV0cm9zMihfcGFnaW5hLGZvcm11bGFyaW8sY2FwYSxtZXRvZG8pIHsNCiAgICB2YXIgYWpheDsNCiAgICB2YXIgcG9zdD0iIjsNCgl2YXIgbWVuc2FqZT0iIjsNCiAgICB2YXIgZnJtOw0KICAgIA0KICAgIGFqYXggPSBhamF4RnVuY3Rpb24oKTsNCiAgICBpZiAoYWpheD09ZmFsc2UpIHsNCiAgICAJYWxlcnQoIkV4Y2VwdGlvbiBBSkFYIik7DQogICAgCXJldHVybjsNCiAgICB9DQogICAgaWYoZm9ybXVsYXJpbyE9Jycpew0KICAgICAJZnJtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZm9ybXVsYXJpbyk7CQ0KICAgIAkJZm9yIChpPTA7aTxmcm0uZWxlbWVudHMubGVuZ3RoO2krKykNCiAgICAJCXsNCiAgICAJCQlpZigoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRleHRhcmVhIikgfHwoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gImRhdGUiKSB8fCAoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRpbWUiKSB8fCAoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInRleHQiKXx8ZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gImNoZWNrYm94Inx8IChmcm0uZWxlbWVudHNbaV0udHlwZSA9PSAiaGlkZGVuIil8fChmcm0uZWxlbWVudHNbaV0udHlwZSA9PSAicGFzc3dvcmQiKXx8KGZybS5lbGVtZW50c1tpXS50eXBlID09ICJlbWFpbCIpfHwoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInNlbGVjdC1vbmUiKSkgewkJCQkNCgkJCQkJCXBvc3QgKz0gZnJtLmVsZW1lbnRzW2ldLm5hbWUgKyAiPSI7DQogICAgCQkJCQlwb3N0ICs9IGZybS5lbGVtZW50c1tpXS52YWx1ZSA7DQogICAgCQkJCQlwb3N0ICs9ICImIjsNCiAgICAJCQl9DQogICAgCQl9DQogICAgLy8JCXBvc3Q9cG9zdC5zdWJzdHJpbmcoMSxwb3N0Lmxlbmd0aC0xKTsNCiAgICAgCX0NCgkvL2FsZXJ0KF9wYWdpbmErcG9zdCk7DQoJaWYobWVuc2FqZSE9IiIpe2FsZXJ0KG1lbnNhamUpO3JldHVybjt9CQ0KICAgIGFqYXgub3BlbigiUE9TVCIsIF9wYWdpbmEsIHRydWUpOyAgICANCiAgICBhamF4Lm9ucmVhZHlzdGF0ZWNoYW5nZSA9IGZ1bmN0aW9uKCl7DQogICAgICAgIGlmIChhamF4LnJlYWR5U3RhdGUgPT0gNCl7DQogICAgICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoY2FwYSkuaW5uZXJIVE1MID0gYWpheC5yZXNwb25zZVRleHQ7DQoJfQ0KICAgIH0NCgkgYWpheC5zZXRSZXF1ZXN0SGVhZGVyKCJDb250ZW50LVR5cGUiLCJhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQiKTsNCiAgICBpZihmb3JtdWxhcmlvIT0nJyl7DQogICAgCQlpZihwb3N0IT0nJyl7DQogICAgCQkJYWpheC5zZW5kKHBvc3QpOyAJCQ0KICAgIAkJfQkNCiAgICB9DQogICAgDQogICB9DQogICANCiAgIA0KICAgDQogICAvL0NBUEFTDQogICBmdW5jdGlvbiBtb3N0cmFyKG5vbWJyZUNhcGEpIHsgDQoJCW5vbWJyZUNhcGE9bm9tYnJlQ2FwYTsgDQoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vbWJyZUNhcGEpLnN0eWxlLmRpc3BsYXk9ImJsb2NrIjsgDQogICB9IA0KCQ0KCWZ1bmN0aW9uIGNlcnJhcihub21icmVDYXBhKSB7IA0KCSAJbm9tYnJlQ2FwYT1ub21icmVDYXBhOyANCgkJIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vbWJyZUNhcGEpLnN0eWxlLmRpc3BsYXk9Im5vbmUiOyANCgl9IA0KCQ0KCWZ1bmN0aW9uIGV2YWx1YShub21icmVDYXBhKXsgDQoJCW5vbWJyZUNhcGE9bm9tYnJlQ2FwYTsgDQoJCWlmIChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChub21icmVDYXBhKS5zdHlsZS5kaXNwbGF5ID09ICJub25lIikgeyAgICAgICAgICAgICAgICAgICAgICAgICANCgkJbW9zdHJhcihub21icmVDYXBhKTsgDQoJCXJldHVybiB0cnVlOw0KCQkJfSBlbHNlIHsgDQoJCWNlcnJhcihub21icmVDYXBhKTsgDQoJCXJldHVybiBmYWxzZTsNCgkJfSANCgl9ICANCgkNCglmdW5jdGlvbiBldmFsdWFyQ2FwYXMobm9tYnJlQ2FwYTEsbm9tYnJlQ2FwYTIpeyANCgkJaWYgKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vbWJyZUNhcGExKS5zdHlsZS5kaXNwbGF5ID09ICJub25lIikgeyAgICAgICAgICAgICAgICAgICAgICAgICANCgkJCW1vc3RyYXIobm9tYnJlQ2FwYTEpOw0KCQkJY2VycmFyKG5vbWJyZUNhcGEyKTsgDQoJCXJldHVybiB0cnVlOw0KCQkJfSBlbHNlIHsgDQoJCQltb3N0cmFyKG5vbWJyZUNhcGEyKTsJCQ0KCQkJY2VycmFyKG5vbWJyZUNhcGExKTsgDQoJCXJldHVybiBmYWxzZTsNCgkJfSANCgl9DQoJICAgDQovL0NvbmZpcm1hY2lvbg0KZnVuY3Rpb24gY29uZmlybWFyYm9ycmFkbyhydXRhLCBjYXBhLCBtZXRvZG8pew0KCWlmKGNvbmZpcm0oJ0FjYWJhIGRlIGVsZWdpciBlbGltaW5hciBlbCByZWdpc3Ryby4gwr9EZXNlYSBjb250aW51YXI/JykpeyANCgkJRW52aWFyKHJ1dGEsIGNhcGEsIG1ldG9kbyk7DQoJfQ0KCWVsc2V7DQoJCQlhbGVydCgnU0UgQ0FOQ0VMTyBMQSBFTElNSU5BQ0lPTicpOw0KCX0NCn0NCg0KZnVuY3Rpb24gYWNvbW9kYXIoKXsNCglpZihjb25maXJtKCdVbmEgdmV6IHF1ZSBzZSBoYSByZWFsaXphZG8gZWwgYWNvbW9kbyBkZSBsb3MgdXNhcmlvcywgZWwgcHJvY2VzbyBubyBzZSBwdWVkZSBkZXNoYWNlci4gwr9Fc3TDoSBzZWd1cm8/JykpeyANCgkJRW52aWFyUGFyYW1ldHJvczIoJy4uL2NvbnRyb2xhZG9yL2NvbnRyb2xhZG9yQWZpbGlhZG9zLnBocD9vcGU9MicsJ2ZybVN1c2NyaXBjaW9uZXMnLCdjb250ZW50JywnUE9TVCcpOw0KCX0NCgllbHNlew0KCQkJYWxlcnQoJ1BST0NFU08gQ0FOQ0VMQURPJyk7DQoJfQ0KfQ0KDQoNCmZ1bmN0aW9uIGNvbmZpcm1hckVkYWQoKXsNCglpZihjb25maXJtKCdFbCB1c3VhcmlvIHNlbGVjY2lvbmFkbyBlcyBNRU5PUiBERSBFREFELiDCv0VzdMOhIHNlZ3VybyBkZSBhcHJvYmFybG8/JykpeyANCgkJRW52aWFyUGFyYW1ldHJvcygnLi4vY29udHJvbGFkb3IvY29udHJvbGFkb3JBZmlsaWFkb3MucGhwP29wZT0xJywnZnJtQXNpZ25hcicsJ2NvbnRlbnQnLCdQT1NUJyk7DQoJfQ0KCWVsc2V7DQoJCQlhbGVydCgnQVNJR05BQ0nDk04gQ0FOQ0VMQURPJyk7DQoJfQ0KfQ0KZnVuY3Rpb24gYm9ycmFyKHVybCl7DQogICAgICAgICAgICAgICAgaWYoY29uZmlybSgnRGVzZWEgZWxpbWluYXIgZWwgcmVnaXN0cm8/Jykpew0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICBkb2N1bWVudC5sb2NhdGlvbj11cmw7DQogICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIGVsc2V7DQoNCiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlOw0KICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICB9DQoNCmZ1bmN0aW9uIGNvbmZpcm1hckVkYWQyKCl7DQoJaWYoY29uZmlybSgnQ09ORklSTUFETyBDT1JURS4gwr9Fc3TDoSBzZWd1cm8gZGUgYXByb2JhcmxvPycpKXsgDQoJCUVudmlhclBhcmFtZXRyb3MyKCcuLi9jb250cm9sYWRvci9jb250cm9sYWRvclBhZ28ucGhwP29wZT02JywnZnJtUGFnb3MnLCdjb250ZW50JywnUE9TVCcpOwkNCgl9DQoJZWxzZXsNCgkJCWFsZXJ0KCdBU0lHTkFDScOTTiBDQU5DRUxBRE8nKTsNCgl9DQp9DQoNCmZ1bmN0aW9uIGJvcnJhckNPUlRFKCl7DQoJaWYoY29uZmlybSgnRUxJTU5BTkRPIENPUlRFLiDCv0VzdMOhIHNlZ3Vybz8nKSl7IA0KCQlFbnZpYXJQYXJhbWV0cm9zMignLi4vY29udHJvbGFkb3IvY29udHJvbGFkb3JQYWdvLnBocD9vcGU9NycsJ2ZybVBhZ29zJywnY29udGVudCcsJ1BPU1QnKTsNCgl9DQoJZWxzZXsNCgkJCWFsZXJ0KCdFbGltaW5hY2nDs24gY2FuY2VsYWRhJyk7DQoJfQ0KfQ0KDQoNCmZ1bmN0aW9uIGNvbmZpcm1hclBhZ29zKCl7DQoJaWYoY29uZmlybSgnVW5hIHZleiByZWFsaXphZG8gZWwgY29ydGUgZGUgQklOQVJJTywgbm8gcG9kcsOhIHJlYWxpemFyIGNhbWJpb3MuIMK/RXN0w6Egc2VndXJvPycpKXsgDQoJCUVudmlhclBhcmFtZXRyb3MoJy4uL2NvbnRyb2xhZG9yL2NvbnRyb2xhZG9yUGFnby5waHA/b3BlPTQnLCdmcm1Db3J0ZScsJ2NvbnRlbnQnLCdQT1NUJyk7DQoJfQ0KCWVsc2V7DQoJCQlhbGVydCgnQ29ydGUgY2FuY2VsYWRvJyk7DQoJfQ0KfQ0KDQpmdW5jdGlvbiBjb25maXJtYXJQYWdvc1UoKXsNCglpZihjb25maXJtKCdVbmEgdmV6IHJlYWxpemFkbyBlbCBjb3J0ZSBkZSBVTklMRVZFTCwgbm8gcG9kcsOhIHJlYWxpemFyIGNhbWJpb3MuIMK/RXN0w6Egc2VndXJvPycpKXsgDQoJCUVudmlhclBhcmFtZXRyb3MoJy4uL2NvbnRyb2xhZG9yL2NvbnRyb2xhZG9yUGFnby5waHA/b3BlPTUnLCdmcm1Db3J0ZScsJ2NvbnRlbnQnLCdQT1NUJyk7DQoJfQ0KCWVsc2V7DQoJCQlhbGVydCgnQ29ydGUgY2FuY2VsYWRvJyk7DQoJfQ0KfQ0KDQovL0NhbWJpYXIgZWwgY29uY2VwdG8NCg0KZnVuY3Rpb24gZ2V0Q29uY2VwdG9zKGZvcm0pew0KCQlmcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChmb3JtKTsJDQogICAgCQlmb3IgKGk9MDtpPGZybS5lbGVtZW50cy5sZW5ndGg7aSsrKQ0KICAgIAkJew0KCQkJCQkvL2FsZXJ0KCJjb250cm9sIisgZnJtLmVsZW1lbnRzW2ldLm5hbWUgICsgIlRpcG86IiArIGZybS5lbGVtZW50c1tpXS50eXBlICk7DQogICAgCQkJaWYoZnJtLmVsZW1lbnRzW2ldLnR5cGUgPT0gInNlbGVjdC1vbmUiKXsNCg0KCQkJCQlpZihmcm0uZWxlbWVudHNbaV0ubmFtZSA9PSJjb25jZXB0byIpew0KICAgIAkJCQkJaWRDb25jZXB0bz0gZnJtLmVsZW1lbnRzW2ldLnZhbHVlOw0KCQkJCQkJLy9hbGVydChpZENvbmNlcHRvKTsNCgkJCQkJfQ0KCQkJCQllbHNlIGlmKGZybS5lbGVtZW50c1tpXS5uYW1lPT0ibW9udG8iKXsNCgkJCQkJCWZybS5lbGVtZW50c1tpXS52YWx1ZT1pZENvbmNlcHRvOw0KCQkJCQkJYnJlYWs7DQoJCQkJCX0NCgkJCQl9DQoJCQl9DQp9DQoNCg0KLy9WYWxpZGFjaW9uZXMNCmZ1bmN0aW9uIHNvbG9OdW1lcm9zKGV2dCl7DQovL2FzaWduYW1vcyBlbCB2YWxvciBkZSBsYSB0ZWNsYSBhIGtleW51bQ0KaWYod2luZG93LmV2ZW50KXsvLyBJRQ0Ka2V5bnVtID0gZXZ0LmtleUNvZGU7DQp9ZWxzZXsNCmtleW51bSA9IGV2dC53aGljaDsNCn0NCi8vY29tcHJvYmFtb3Mgc2kgc2UgZW5jdWVudHJhIGVuIGVsIHJhbmdvDQppZihrZXludW09PTgpIHJldHVybiB0cnVlOw0KaWYoa2V5bnVtPjQ3ICYmIGtleW51bTw1OCl7DQpyZXR1cm4gdHJ1ZTsNCn1lbHNlew0KcmV0dXJuIGZhbHNlOw0KfQ0KfQ0KDQoNCmZ1bmN0aW9uIHZhbGlkYXJUZXh0byhlLCBkZXN0aW5vKSB7DQogICAgLy90ZWNsYSA9IChkb2N1bWVudC5hbGwpID8gZS5rZXlDb2RlIDogZS53aGljaDsNCiAgICB0ZWNsYSA9IGUua2V5Q29kZSA/IGUua2V5Q29kZSA6IGUud2hpY2gNCiAgICANCiAgICBpZiAodGVjbGE9PTgpIHJldHVybiB0cnVlOyAvL1RlY2xhIGRlIHJldHJvY2VzbyAocGFyYSBwb2RlciBib3JyYXIpDQogICAgaWYgKHRlY2xhID09IDEzKSBkZXN0aW5vLmZvY3VzKCk7IA0KIAlpZiAodGVjbGEgPT0gOSkgZGVzdGluby5mb2N1cygpOyANCiAgICBwYXRyb24gPS9bQS1aIGEteiB3w6HDqcOtw7PDusOBw4nDjcOTw5pdLzsgLy8gU29sbyBhY2VwdGEgbGV0cmFzDQogICAgdGUgPSBTdHJpbmcuZnJvbUNoYXJDb2RlKHRlY2xhKTsNCiAgICByZXR1cm4gcGF0cm9uLnRlc3QodGUpOwkNCiANCn0gDQoNCi8vTU9TVFJBUiBBTEVSVA0KDQpmdW5jdGlvbiBtZW5zYWplKG1lbnNhamUpew0KCWFsZXJ0KG1lbnNhamUpOw0KfQ0KDQoNCmZ1bmN0aW9uIGJ1c2NhZG9yKGUsIGZvcm0peyANCiAgICAgdmFyIGk7IA0KDQogICAgIGlmIChlLmtleUNvZGUpIA0KICAgICAgICAgaSA9IGUua2V5Q29kZTsgDQogICAgIGVsc2UgaWYgKGUud2hpY2gpIA0KICAgICAgICAgaSA9IGUud2hpY2g7IA0KICAgICBlbHNlIA0KICAgICAgICAgcmV0dXJuIGZhbHNlOyANCg0KICAgICBpZiAoaSA9PSAxMykgew0KCQkgZm9ybS5zdWJtaXQoKTsgDQoJIH0NCg0KICAgICByZXR1cm4gdHJ1ZTsgDQp9IA0KDQo=" type="text/javascript" charset="utf-8" async defer></script>
	
	<!-- scripts-->
			
		<!-- script para cerrar sesion -->

		<script>
		    $(document).ready(function(){
                
                $("#simple_alert").click(function(){

                	alertify.alert("Atención estas a punto de cerrar sesion preciona ok para aceptar");

                });

                $("#confirm_alert").click(function(){
                	alertify.confirm("Estas a punto de cerrar sesion preciona ",function(e){
                		if(e){
                			window.location.href = "index.html";
                		}
                		else{

                			window.location.href = "index.html";
                		}
                	});

                });
            });
		</script>
		<!-- scripts-->
        <script type="text/javascript" charset="utf-8" async defer>
$(document).ready(cargarproductos(0));
function cargarproductos(limite)
{

    var url="../datos/cargardatoszona.php";
    $.post(url,{limite:limite},function(responseText){
        $("#productos").html(responseText);
    })
}

</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <!--////////////////////////////////////////////////// -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="menu.php">Sistema de Factibilidad Agronomica      </a>
                
            </div>
            <!-- /.navbar-header -->
<p style="float: right;">¡¡¡Bienvenido <?php echo $_SESSION['nickname']; ?> !!!</p> 

            <ul class="nav navbar-top-links navbar-right">
                
                                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       
                <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Lista de usuarios</a>
                        </li>
                        <li><a href="#" id="nuevoU" name="nuevoU"><i class="fa fa-gear fa-fw"></i>Ingresar Nuevo Usuario</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../validar/cerrar.php" id="simple_alert" name="simple_alert"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="menu.php"><span class="icon-home"></span>  Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-leaf"></i> Cultivo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="cultivo">Nuevo Cultivo</a>
                                </li>
                                <li>
                                    <a href="#" id="listacultivo">Listar Cultivo</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="icon-compass"></i>  Zona<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../vista/zona.php" id="Temp">Datos Zona</a>
                                </li>
                                <li>
                                    <a href="../zona.php" id="">Ver Zonas</a>
                                </li>
                            </ul>
                        </li>
						
						<li>
						    <a href="#"><i class="icon-thermometer"></i>  Temperatura<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="temp">Nueva Temperatura</a>
                                </li>
                                <li>
                                    <a href="#">Listar Temperaturas</a>
                                </li>
                            </ul>
						</li>
						
						<li>
                            <a href="forms.html"><i class="glyphicon glyphicon-globe"></i>  Geolocalización</a>
                        </li>
						
			             <!--li>
                            <a href="#"><i class="glyphicon glyphicon-globe"></i>  </a>
                        </li-->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav> <!--////////////////////////////////////////////////// -->

        <?php
                     if(!isset($_GET['correcto']))
                     {

                        ?>
                        <div class="Resultado">
                            <div class="alet alert-info" >
                                <button type="button" class="close" data-disniss="alert" aria-label="close"><span aria-hidden ="true">&times;</span></button>
                                <strong>se almaceno correctamente </strong> =)ejejjejej....
                            </div> 
                        </div>
        <?php 
              }

         ?>
                   



        <div id="page-wrapper">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <h1 class="page-header">Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <!-- Div del contenido principal-->
            <div class="row">
                <div class="col-lg-12" name="area" id="area">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Contenido
                            
                        </div>
                        <!-- /.panel-heading -->
						
						<div align="center"><img src="../imagenes/logosfa.jpg"/><div>
                        <div class="Resultado">
                            

                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                    
                    
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/jav" type="text/javascript" charset="utf-8" async defer></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    
	
	

</body>

</html>
