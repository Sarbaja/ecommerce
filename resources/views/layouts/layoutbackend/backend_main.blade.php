<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Burgeon </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/backend-css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend-css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend-css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend-css/chartist-custom.css') }}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="{{ asset('css/backend-css/custom.css') }}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('css/backend-css/main.css') }}">

	<!-- Date Picker css -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- Sweetalert --> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> 

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/backend-img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/backend-img/favicon.png') }}">
</head>
<body>

	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
            @include('includes.backendinclude.backend_navbar')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
            @include('includes.backendinclude.backend_sidenav')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN CONTENT-->
            @yield('content')
		<!-- END MAIN -->

        <!-- Footer and clearfix area -->
            @include('includes.backendinclude.backend_footer')
		<!-- End footer -->
		        
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script type="text/javascript" src="{{ asset('js/backend-js/jquery.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/backend-js/custom.js')}}"></script>
	<script src="{{ asset('js/backend-js/bootstrap.min.js') }}"></script>

	<!-- Datatables js -->
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<!-- Datables -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

	<!-- Datepicker jquery -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="{{ asset('js/backend-js/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('js/backend-js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/chartist.min.js') }}"></script>
	<script src="{{ asset('js/backend-js/klorofil-common.js') }}"></script>


	<script type="text/javascript">
		
		$(document).ready(function(){
			//Admin password ajax validation
			$("#new_pwd").click(function(){
                var current_pwd = $("#current_pwd").val();
                //alert(current_pwd);
                $.ajax({
                    type:'get',
                    url:'/admin/check-pwd',
                    data:{current_pwd:current_pwd},
                    success:function(resp){
                       //alert(resp);
                       if(resp == "false"){
                           $("#chkPwd").html("<font color='red'>Current Password is incorect</font>");
                       }
                       else if(resp == "true"){
                            $("#chkPwd").html("<font color='green'>Current Password is correct</font>");
                       }
                    }, error:function(){
                        alert("Error");
                    }
                });
			});
	
			//category validation
			$("#create_category").validate({
				rules:{
					category_name:{
						required: true
					},
					description:{
						required: true
					},
					url:{
						required:true
					}
				}
			});
			
			//product validation 
			$.validator.addMethod("alphabetsnspace", function(value, element) {
				return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
			},
			"This field contains only alphabets"
			);

			//create product validation 
			$("#create_product").validate({
				rules:{
					product_name:{
						required: true
					},
					/*category_id:{
						required: true
					},*/
					product_code:{
						required:true
					},
					product_color:{
						required:true,
						alphabetsnspace: true
					},
					product_description:{
						required:true
					},
					product_price:{
						required:true,
						number:true
					},
					product_image:{
						required:true
					}
				}
			});

			$("#edit_product").validate({
				rules:{
					product_name:{
						required: true
					},
					category_id:{
						required: true
					},
					product_code:{
						required:true
					},
					product_color:{
						required:true
					},
					product_description:{
						required:true
					},
					product_price:{
						required:true,
						number:true
					}
				}
			});
			
		});

		$(document).ready(function() {
			$(".delCategory").click(function(){
					if(confirm('Do you want to delete this?')){
						return true;
					}else{
						return false;
					}
			}); 

			$(".delCms").click(function(){
					if(confirm('Do you want to delete this?')){
						return true;
					}else{
						return false;
					}
			});

			$(".deleteRecord").click(function(){
				var id = $(this).attr('rel');
				var deleteFunction = $(this).attr('rel1');
				swal({
					title: "Are you sure?",
					text: "You will not be able to recover it",
					type: "warning", 
					showCancelButton: true,
					confirmButtonClass: "btn btn-success",
					confirmButtonText: "Delete",
					cancelButtonText: "Cancel",
					cancelButtonClass: "btn btn-danger"
				},
				function(){
					window.location.href="/admin/" + deleteFunction + "/" +id;
				});
				//alert(deleteFunction);
				//return false;
			});

			$('#table').DataTable();
			$('#table1').DataTable();
			$('#table3').DataTable();
		});

		$(document).ready(function(){
			var maxField = 10; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<label class="col-md-3"></label><div>   <input type="text" name="sku[]" id="sku" placeholder="SKU"/>  <input type="text" name="size[]" id="size" placeholder="Size"/>  <input type="text" name="price[]" id="price" placeholder="Price"/>  <input type="text" name="stock[]" id="stock" placeholder="Stock"/><a href="javascript:void(0);" class="remove_button">  <span style="font-size:30px;">-</span></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			
			//Once add button is clicked
			$(addButton).click(function(){
				//Check maximum number of input fields
				if(x < maxField){ 
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); //Add field html
				}
			});
			
			//Once remove button is clicked
			$(wrapper).on('click', '.remove_button', function(e){
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});


		$(function(){
			$("#expiry_date").datepicker({ 
				minDate: 0,
				dateFormat: 'yy-mm-dd'
			});
		});

	</script>

	<!--<script type="text/javascript">
		$(function() {
			var data, options;

			// headline charts
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[23, 29, 24, 40, 25, 24, 35],
					[14, 25, 18, 34, 29, 38, 44],
				]
			};

			options = {
				height: 300,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisX: {
					showGrid: false
				},
				lineSmooth: false,
			};

			new Chartist.Line('#headline-chart', data, options);


			// visits trend charts
			data = {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				series: [
					{
						name: 'series-real',
						data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
					},
					{
						name: 'series-projection',
						data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
					}
				]
			};

			options = {
				fullWidth: true,
				lineSmooth: false,
				height: "270px",
				low: 0,
				high: 'auto',
				series: {
					'series-projection': {
						showArea: true,
						showPoint: false,
						showLine: false
					},
				},
				axisX: {
					showGrid: false,

				},
				axisY: {
					showGrid: false,
					onlyInteger: true,
					offset: 0,
				},
				chartPadding: {
					left: 20,
					right: 20
				}
			};

			new Chartist.Line('#visits-trends-chart', data, options);


			// visits chart
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [[6384, 6342, 5437, 2764, 3958, 5068, 7654]]
			};

			options = {
				height: 300,
				axisX: {
					showGrid: false
				},
			};

			new Chartist.Bar('#visits-chart', data, options);


			// real-time pie chart
			var sysLoad = $('#system-load').easyPieChart({
				size: 130,
				barColor: function(percent) {
					return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
				},
				trackColor: 'rgba(245, 245, 245, 0.8)',
				scaleColor: false,
				lineWidth: 5,
				lineCap: "square",
				animate: 800
			});

			var updateInterval = 3000; // in milliseconds

			setInterval( function() {
				var randomVal;
				randomVal = getRandomInt(0, 100);

				sysLoad.data('easyPieChart').update(randomVal);
				sysLoad.find('.percent').text(randomVal);
			}, updateInterval);

			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

		});
	</script>-->

</body>

</html>