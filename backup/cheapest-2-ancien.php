<?php 
session_start();
include "../role-conditions/paid-user.php";
include "../config.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bobs Flight Alerts | Cheap Flights, Flight Deals and Airfares</title>
	    <meta name="description" content="Join now and save! Make sure to receive our cheap flight alerts for when dream holiday destinations release amazingly cheap offers">
	    <meta name="author" content="bobs flight alerts">
	    <!-- Include Select2 CSS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    
	    <!-- Add the latest version of Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Add Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Add Bootstrap Multiselect CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

  <!-- Add Date Range Picker CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
         <!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="https://www.bobsflightalerts.com/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.bobsflightalerts.com/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.bobsflightalerts.com/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="https://www.bobsflightalerts.com/assets/css/menumaker.css">
		<!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <!-- Month Picker CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <!-- LongHill Calender CSS -->
        <link rel="stylesheet" href="LongHillCalender/dist/daterangepicker.min.css"/>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137738515-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-137738515-1');
		</script>
		<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.tiny.cloud/1/vee6utkobs1wss1grx9i5fmilrp8nd58b2y9rm3m7ox1nv6c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	</head>
    <body>
	
		<style>
		    .disabled-day {
            	background-color: rgb(210, 203, 203);
            	color: red !important; /* Set text color to contrast with blue background */
            }
		    /* Custom CSS for the border around the tab content */
            #parentTabContent {
            	border: 2px solid rgb(2, 129, 255);
            	border-radius: 10px;
            	padding: 10px;
            	background: white;
            }
            /* Custom CSS for the blue parent tab */
            .nav-link-blue {
            	background-color: rgb(2, 129, 255) !important;
            	color: white !important;
            	}
			.tab-pane {
              display: none;
            }
            
            .tab-pane.active {
              display: block;
            }
            
            .monthpicker-dropdown {
              z-index: 1051 !important; /* Adjust the z-index to show the dropdown above other elements */
            }
            .ui-datepicker-calendar {
                  display: none;
            }
		#spinnerContainer {
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	position: fixed; /* Use fixed position for a spinner that stays in the center regardless of scrolling */
        	top: 0;
        	left: 0;
        	width: 100%;
        	height: 100%;
        	background: rgba(255, 255, 255, 0.7); /* Add a semi-transparent background for better visibility */
        	z-index: 9999; /* Set a high z-index to ensure the spinner is on top of other elements */
        }
		/*--Flights Sections------*/
			.deal-box-f {
				box-shadow: 0px 12px 30px 0px rgba(0, 0, 0, 0.2);
				border-radius: 4px;
				width: 32%;
				margin: 4px 4px;
				float: left;
				position: relative;
				padding: 5px;
			}

			.depart-date-f {
				float: left;
				text-align: left;
				padding-right: 14px;
			}

			.arrive-date-f {
				float: right;
				width: 243px;
				text-align: left;
			}

			.depart-from-f {
				float: left;
				text-align: left;
			}

			.depart-from-box-f {
				margin-right: 11px;
			}

			.depart-date-box-f {
				margin-right: 11px;
				margin-left: 61px;
			}

			.price-box-f {
				margin-right: 11px;
				margin-left: 61px;
				float: left;
			}

			.price-f {
				font-size: 28px;
				font-family: open sans, helvetica neue, helvetica, arial, sans-serif;
				margin-top: 10px;
				margin-left: 15px;
			}

			.price-text-f {
				float: right;
				width: auto;
				text-align: left;
			}

			.arrive-to-f {
				float: left;
				text-align: left;
			}

			.airline-logo-f {
				position: absolute;
				width: 107px;
				left: 295px;
				bottom: 6px;
			}

			.plane-logo-f {
				margin-left: 14px;
				width: 24px;
				float: left;
				margin-right: 1px
			}

			.side-border-f {
				border-left: 2px solid gray;
				height: 28px;
				float: left;
			}

			/*.pagination {
				margin-top: 20px;
				text-align: center;
			}*/

			.pagination {
				white-space: nowrap; /* Prevent line breaks */
				overflow-x: auto; /* Add horizontal scrollbar if pagination overflows */
				display: flex; /* Use flexbox layout */
				align-items: center; /* Center items vertically */
			}

			.page-link {
				display: inline-block;
				padding: 8px 12px;
				margin: 0 4px;
				color: #333;
				background-color: #fff;
				border: 1px solid #ccc;
				text-decoration: none;
				border-radius: 4px;
			}

				.page-link:hover,
				.page-link.current-page {
					background-color: #007bff;
					color: #fff;
					border-color: #007bff;
				}

			.ellipsis {
				margin: 0 4px;
				color: #333;
			}

			.page-link:first-child,
			.page-link:last-child {
				padding: 4px 8px;
			}

			.deal-content-f {
				width: 100%;
				font-size: 13px;
				padding-left: 0px;
				padding-top: 7px;
			}

			.blue-button-f {
				float: left;
				text-align: left;
				position: absolute;
				right: 18px;
				bottom: 1px
			}

			.btn-primary-f {
				color: #fff;
				background-color: #007bff;
				border-color: #007bff;
			}

			.btn-f {
				padding: 3px 2px;
				font-size: 11px;
			}

			.image-box-h {
				width: 200px;
				height: 170px;
			}
			.airline-logo-box-f {
				float: left;
				padding-top: 12px;    
			}
			.airline-img-res-f {
				height: 26px;
				width: 126px;
			}
			.flight-button-f {
				padding: 2px;
				position: absolute;
				left: 200px;
				bottom: 15px;
				font-size: 13px;
			}
			.round-trip-f {
				font-size: 10px;
				padding-left: 5px;
				padding-top: 10px;
			}
			@media only screen and (max-width: 1200px) {
				.airline-logo-f {
					width: 90px;
					left: 260px;
				}

				.depart-date-box-f {
					margin-left: 44px;
				}

				.depart-from-f {
					width: auto;
					font-size:14px;
				}

				.price-box-f {
					margin-left: 44px;
				}

				.arrive-date-f {
					width: 159px;
				}

				.price-text-f {           
					margin-right: 6px;
					margin-top: 7px;
				}
				.price-f {
					font-size:25px;
				}

				.arrive-to-f {
					width: auto;
					font-size:14px;
				}
				.depart-date-f{
					font-size:14px;
				}
				.airline-logo-f {
					width: 44px;
					left: 228px;
				}
				.deal-box-f{
					width:32%;
				}
				.airline-img-res-f {
					height: 20px;
					width: 95px;
				}
				.flight-button-f {
					left: 157px;
					bottom: 12px;
					font-size: 12px;
				}
			}
			@media only screen and (max-width: 1079px) {
				.deal-box-f {
					width: 48%;        
				}
			}
				@media only screen and (max-width: 760px) {
					.airline-logo-f {
						width: 98px;
						left: 251px;
					}

					.price-f {
						font-size: 23px;
					}

					.price-box {
						margin-left: 50px;
					}

					.depart-from-box-f {
						margin-left: 0px;
					}

					.depart-from-f {
						width: auto;
						margin-left: 0px;
						font-size: 15px;
					}

					.depart-date-f {
						margin-left: 9px;
						font-size: 15px;
					}

					.arrive-date-f {
						width: 177px;
					}

					.price-text-f {
						width: 105px;
					}

					.arrive-to-f {
						width: auto;
						font-size: 15px;
					}

					.price-p-f {
						font-size: 23px;
						margin-right: 7px;
					}

					.deal-box-f {
						width: 100%;
						float: none;
						margin-left: 11px;
						height: auto;
					}

					.blue-button-f {
						right: 61px;
					}
				}

				@media only screen and (max-width: 404px) {
					.airline-logo-f {
						width: 59px;
						left: 232px;
					}

					.blue-button-f {
						right: 33px;
					}

					.price-text-f {
						width: 77px;
					}
				}

				@media only screen and (max-width: 350px) {
					.deal-content-f {
						font-size: 12px;
					}

					.arrive-date-f {
						width: 131px;
					}

					.price-text-f {
						width: 131px;
					}

					.blue-button-f {
						margin-left: -15px;
					}
				}
    /*-----Flights Sections ENDS-----*/
			#deals-table {
            display: none;
        }
		.custom-select-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }
    .date-picker-icon {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1000;
    }
    		body{
			overflow-x: hidden;
		 font-family: 'Raleway', sans-serif;
    font-size: 15px;
    font-weight: 400;
    color: #000;
    
		}
		#cssmenu {
			position: relative;
			margin: auto;
			padding-left:130px;
		} 
		
		.btn-input[type="text"],.btn-input[type="email"] {
			width: 295px;
			height: 50px;
			margin-bottom: 10px;
			padding: 0 13px;
			vertical-align: middle;
			background: #fff;
			border: 3px solid #f7b500;
			font-family: open sans, helvetica neue, helvetica, arial, sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 50px;
			color: #888;
			-moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
			-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
			-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
		}		
		.btn-red {
			height: 50px;
			margin-bottom: 10px;
			padding: 0 20px;
			vertical-align: middle;
			background: #f7b500;
			border: 0;
			font-family: open sans, helvetica neue, helvetica, arial, sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 50px;
			color: #fff;
			-moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
			text-shadow: none;
			-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
			-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
		}
		.has-sub ul{
			z-index: 1 !important;
		}
		
		.px-4.m-2 .row{
			height: 100%;
		}
		.items{
			max-width: 370px;
		}
		.px-4{
			padding-left: 4%!important;
		}
		
		img#logo-img{
		   width:70px !importent;
		  
		   height:70px !importent;
		}
		
		.col-9.my_col-9 {
    
    padding-right: 15px;
    padding-left: 0;
    padding-top:3px;
}
.cardairline{
    border: 10px solid #17a2b8 !important
}



.col-3.my-col-3 {
	padding-left:49px;
}	
.price-p {
	float:right;
	font-size:29px;
	margin-top:-5px;
	margin-right:25px;
	font-family: open sans, helvetica neue, helvetica, arial, sans-serif;
}	
.deal-box {
	border: 4px solid #f1bf2c;
    border-radius: 4px;
	width:48%;
	margin:4px;
}

.deal-content {
	float:left;
	width: 100%;
	font-size:13px;
	padding-left:0px;
	padding-top:12px;
}	
.arrow-p {
    float: right;
    font-size: 11px;
    margin-right: 47px;   
    margin-top: -20px;
	font-weight:bold;
}
.destination-p {
	font-size:22px;
	display:contents;
}
.mobile-only {
		display:none;
}
.expire {
    position:relative;
}

.expire .overlay {
    text-align: center;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:rgba(0, 0, 0, 0.55);
    background: url(data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAABl0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuNUmK/OAAAAATSURBVBhXY2RgYNgHxGAAYuwDAA78AjwwRoQYAAAAAElFTkSuQmCC) repeat scroll transparent\9;
    z-index:9999;
    color:white;
}
 
.expire .overlay:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    margin-right: -0.25em;
}

.expire .overlay .txt{
    vertical-align: middle;
    position: relative;
    display: inline-block;
    font-size: 44px;
    font-weight: 700;
}
.date-picker-wrapper table .caption .next, .date-picker-wrapper table .caption .prev {
    font-size: 24px;
    background-color: black !important;
    border-radius: 15% !important;
    color:white;
}    
.date-picker-wrapper .month-wrapper table {
    width: 290px;
}   
.date-picker-wrapper .month-wrapper table .day {
    font-size: 14px;
    margin-bottom: 5px;
}    
.date-picker-wrapper .month-wrapper table td, .date-picker-wrapper .month-wrapper table th {
    font-size:16px;
    width:42px;
    height: 33px;
}  
.date-picker-wrapper .drp_top-bar {
     font-size: 18px;
     color:darkred;
} 
.date-picker-wrapper .month-wrapper table .day.real-today {
    background-color: white;
}    
@media only screen and (max-width: 1024px) {
  .price-p {
	margin-right:66px;
}
.arrow-p {
    margin-right: 67px;   
}
.col-3.my-col-3 {
	padding-left:30px;
}	
}
@media only screen and (max-width: 768px) {
  .price-p {
	font-size:23px;
	margin-right:7px;
}
.arrow-p {
    margin-right: 6px;   
}
.col-3.my-col-3 {
	padding-left:16px;
}	
}
@media only screen and (max-width: 415px) {
  
.deal-box {
	width:100%;
}
.deal-content {
	margin-left: -15px;
}
.destination-p {
		font-size:19px;
}
  .price-p {
	margin-right:-8px;
}		
}
@media only screen and (max-width: 350px) {
.deal-content {
	font-size:12px;
	
}
}	
/* Hide radio buttons on screens with a max-width of 768px (adjust as needed) */
@media only screen and (max-width: 768px) {
    .card-or-table-container {
        display: none;
    }
}
.expire {
        background: #d0c6c6bf;
    }
    
    .popup p {
                margin: 0;
            }

            .popup {

                display: none;
                overflow-y: auto;
                overflow-x: hidden;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: fixed;
                font-size: small;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 10px;
                width: 400px;
                border: 1px solid #ccc;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                z-index: 9999;
            }

            .months-result {
                display: flex;
                align-items: center;
                border: 1px solid #00000090;
                padding: 15px 25px;
                margin-bottom: 40px;
                border-radius: 10px;
            }

            .choices {
                display: flex;
                list-style: none;
                padding: 0;
                margin-bottom: 20px;
            }

            .choices li {
                cursor: pointer;
                padding: 10px;
                border-bottom: 1px solid #00000054;
                color: blue;
            }

            .choices li.selected {
                color: black;
                border: 1px solid #00000054;
                border-bottom: 0;
            }

            .months-show {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .months {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .month {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 0 10px;

            }

            .month ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                list-style: none;
                padding: 0;
                margin: 0;
                width: 100%;
            }

            .month ul li {
                cursor: pointer;
                padding: 5px 40px;
                background-color: #f1f1f1;
                flex-grow: 1;
                flex-basis: 0;
            }

            .month ul li.non-selectable {
                background-color: white;
                cursor: not-allowed;
                color: #929090;
                pointer-events: none;
            }



            .months h3 {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid #929090;
                line-height: 0.1em;
                margin: 20px;

            }

            .month ul li.starting-month,
            .month ul li.ending-month,
            .month ul li.between-month {
                color: white;
                font-weight: bold;
            }

            .month ul li.starting-month {
                background-color: aqua;
            }

            .month ul li.ending-month {
                background-color: orange;
            }

            .month ul li.between-month {
                background-color: gray;
            }

            .months span {
                background: #fff;
                padding: 0 10px;
            }

            .submit {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
            }

            .submit button {
                padding: 10px 60px;
                margin: 10px;
                border: 1px solid #00000090;
                border-radius: 10px;
                cursor: pointer;
                text-transform: uppercase;
                font-weight: 600;
            }
		</style>
		<div style="/* background-image:url(https://www.bobsflightalerts.com/assets/img/backgrounds/blue-background.jpg) */">
		<?php
		    if(isset($_GET['mobile'])){
		        include "../cms/header-mobile.php";
		    }
		    else{
		        ?>   			
            			
            			<div style="background-color:#0049a4">
            				<div class="container">
            
            						<div class="navbar-header">
            						<div class="navbar-brand"></div>
            						<div class="navbar-sign">Bob&apos;s Flight Alerts</div>
            					</div>
            				</div>
            			</div>	
            			<div id="cssmenu">
            				<ul>
            				
            					<li><a href="../">Home</a>
            				
            					<?php
            						// echo $_SESSION['user']['role'] != 2?'<li><a href="../premium.php">Premium Service</a></li>':'';
            						// echo $_SESSION['user']['role'] != 1?'<li><a href="../mysettings.php">Airports</a></li>':'';
            						// echo $_SESSION['user']['role'] != 1?'<li><a href="../complete/">Deals</a></li>':'';
            						echo $_SESSION['user']['role'] != 1?'<li><a href="../school-holiday-flights/">School Holiday Deals</a></li>':'';
            						echo $_SESSION['user']['role'] != 1?'<li><a href="../cheapest-flights/">Cheapest Deals</a></li>':'';
            					?>
            					
            					
            					<li><a href="../mysettings.php">My Settings</a>
            					<li><a href="../logout.php">Logout</a>
            				</ul>
            			</div>
            
            			<!-- Top content -->
            		          			
            			<div id="submenu-item" style="display: none; width: 100%; background: wheat; position: absolute; z-index: 1000000; padding: 20px;">
            				<form style="margin: 10px auto; width: 45%;" id="settingFrm" name="form1" method="POST">
            					<table width="100%">
            						<tr>
            							<td width="20%" align="left" valign="center">First Name</td>
            							<td width="80%" align="left" valign="center">
            								<input type="text" class="required btn-input settinginput" name="name" placeholder="Name" value="<?php echo isset($_SESSION['user']['name'])?$_SESSION['user']['name']:""; ?>" />
            							</td>
            						</tr>
            						<tr>
            							<td width="20%" align="left" valign="center">Email</td>
            							<td width="80%" align="left" valign="center">
            								<input type="email" class="required btn-input settinginput" name="email" placeholder="Email" value="<?php echo isset($_SESSION['user']['email'])?$_SESSION['user']['email']:""; ?>" />
            							</td>
            						</tr>
            						<tr>
            							<td width="20%" align="left" valign="center"></td>
            							<td width="80%" align="left" valign="center">
            								<input type="submit" onclick="" id="submitBtn" value="Update" class="btn-red"/>
            								<div id="errormsg" style="display: inline-block; color:red; display:none;"></div>
            								<div id="successmsg" style="display: inline-block; color:green; display:none;"></div>
            								<div style="display:none;" id="loading1">
            									<img src="../assets/img/loading.gif" />
            								</div>
            							</td>
            						</tr>
            					</table>
            				</form>
            			</div>
            			
		        <?php
		    }
		?>
		<br/>
		<div class="container">
		<div class="row">
		 <?php $host = "https://{$_SERVER['SERVER_NAME']}/"; ?>
		 
		<?php if($_SESSION['user']['role'] == 2){ ?><a href="<?=($host)?>school-holiday-flights/<?=(isset($_REQUEST['mobile'])?'?mobile':'')?>" class="col-xs-4" style="color:black; margin: 0; background-color: #00cae8; border-right:3px solid white; padding-top:4px;padding-bottom:4px; border-radius: 8px; font-size: 12px; display: inline-block; line-height: 1.1; text-align: center; text-decoration: none;"><img src="https://www.bobsflightalerts.com/assets/img/icons/029-woman.png" height="69px">School Holiday Deals</a><?php } ?>
		
        <?php if($_SESSION['user']['role'] == 2){ ?><a href="<?=($host)?>cheapest-flights/<?=(isset($_REQUEST['mobile'])?'?mobile':'')?>" class="col-xs-4" style="color:black; margin: 0; background-color: #00cae8; border-right:3px solid white; padding-top:4px;padding-bottom:4px; border-radius: 8px; font-size: 12px; display: inline-block; line-height: 1.1; text-align: center; text-decoration: none;"><img src="https://www.bobsflightalerts.com/assets/img/icons/014-wallet.png" height="69px">Cheapest Deals</a><?php } ?>
			
        <?php if($_SESSION['user']['role'] == 2){ ?><a href="<?=($host)?>mysettings.php<?=(isset($_REQUEST['mobile'])?'?mobile':'')?>" class="col-xs-4" style="color:black; margin: 0; background-color: #00cae8; border-right:3px solid white; padding-top:4px;padding-bottom:4px; border-radius: 8px; font-size: 12px;l ine-height: 1.1; text-align: center; "><img src="https://www.bobsflightalerts.com/assets/img/icons/settings-icon.png" height="69px">Settings</a><?php } ?>
		
		  		
		
			</div>
				
			
		</div>
		
	<br/><br/>
					<div class="container" style="background:#eFeFeF;font-family: sans-serif;">
					    <div class="row">
					  <!--<div style="float:left;width:35%;padding:2px;">-->
					  <div class="col-md-4">
					      <div style="font-size:13px;text-align:center">Departures</div>
					      <div style="background:#DFDFDF; height:70px; text-align:left;padding-top:7px"><label for="fromAirport" placeholder="Add Destination first" >Where from?:</label> <i class="fas fa-plane-departure"></i><br/></select> <select id="fromAirport" class="form-control" multiple="multiple" style="width: 100%;"></select></div>
					     
					      <!--dropdown of Departures-->
					  </div>  
					 <div class="col-md-4">
					      <div style="font-size:13px;text-align:center">Destinations</div>
					      <div style="background:#DFDFDF; height:70px; text-align:left;padding-top:7px"><label for="toAirport" placeholder="Add Destination first" >Where to? </label><i class="fas fa-plane-arrival"></i><br/><select id="toAirport" class="form-control" multiple="multiple" style="width: 100%;" >
											
										</select> </div>
					      <!--dropdown of Destinations groups-->
					  </div>  
					   <div style="float:left;width:30%;padding:2px;" class="show-popup">
                            <div style="font-size:13px;text-align:center">Dates</div>
                            <div style="background:#DFDFDF; height:70px; text-align:left;padding-top:7px">Which Month?<br/> <center><i style="font-size:20px"class="fas fa-caret-down"></i></center></div>
                            <!--dropdown of months-->
                        </div>  
					    </div>
					    <div class="row">
                    				<div class="col-md-3 form-group">
                    					<label for="airline">Airline:</label>
                    					<div class="position-relative">
                    						<!-- Create a multi-search dropdown -->
                    						<select id="airline" class="form-control" style="width: 100%;">
                    							
                    						</select>
                    					</div>
                    				</div>
                    					
                    				<div class="col-md-3 form-group">
                    					<label for="stops">Stops:</label>
                    					<div class="position-relative">
                    						<!-- Create a multi-search dropdown -->
                    						<select id="stops" class="form-control" style="width: 100%;">
                    							
                    						</select>
                    						<i class="fas fa-stop date-picker-icon"></i>
                    					</div>
                    				</div>
                    					
                    				<div class="col-md-3 form-group">
                    					<label for="cabins">Cabin:</label>
                    					<div class="position-relative">
                    						<!-- Create a multi-search dropdown -->
                    						<select id="cabins" class="form-control" style="width: 100%;">
                    							
                    						</select>
                    					</div>
                    				</div>
                    
                    				<div style="display: none;" class="col-md-3 form-group">
                    					<div class="position-relative mt-5">
                    						<input type="checkbox" id="shortStays" disabled>
                    						<label for="shortStays">Short Stays</label>
                    					</div>
                    				</div>
                    </div>
					    <div class="my-deals-container">
							<!-- Card will be populated dynamically -->
						</div>
					    <br />
                        <button class="btn btn-primary" id="loadMoreBtn">Load More</button>
					</div>
					
			<div class="container">
				<div id="ddlSortByDiv" class="md" style="display: none;">
					<b>Sort by:</b>
				  <select id="sortPriceCardDDL">
					<option value="New_Price">New Price</option>
					<option value="Dates">Date</option>
				  </select>
				</div>
				<div class="row card-deals-container">
					<!-- Card will be populated dynamically -->
				</div>
				<div id="pag">
					<div id="pagination"></div>
				</div>
            </div>
            
            <div>
            				<input type="hidden" id="hdnDestinationGroup">
            				<input type="hidden" id="hdnDestinationTo">
            </div>
		
        </div>
        <br />
		</div>
		<!-- Footer -->
		<!-- Add a spinner image element -->
        <div id="spinnerContainer" style="display: none;">
        	<img src="airline-spinner.gif" alt="Loading Spinner">
        </div>
        
        <!-- Popup for Dates -->
		<div class="popup" id="popup">
            <i class="fas fa-times" style="position: absolute; top: 0%;right: 0%;padding:10px;cursor: pointer;" class="close"></i>
            <h3>You have chosen </h3>
            <div class="months-result">
                <i class="fas fa-calendar" style="margin-right: 10px;"></i>
                <p><b>Months :</b> <span class="show-result">____-__-__ to ____-__-__</span></p>
            </div>
            <ul class="choices">
                <li>Custom Range</li>
                <li class="selected">Months</li>
                <li>Short Stays</li>
            </ul>
            <div class="months">
                <div class="month">
					<div class="year">
						<h3><span>2024</span></h3>
						<ul>
							<li>Jan</li>
							<li>Feb</li>
							<li>Mar</li>
							<li>Apr</li>
							<li>May</li>
							<li>Jun</li>
							<li>Jul</li>
							<li>Aug</li>
							<li>Sep</li>
							<li>Oct</li>
							<li>Nov</li>
							<li>Dec</li>
						</ul>
					</div>
					<div class="year">
						<h3><span>2025</span></h3>
						<ul>
							<li>Jan</li>
							<li>Feb</li>
							<li>Mar</li>
						</ul>
					</div>
                </div>


            </div>
            <hr style="width: 95%; margin: 10px; background-color: #929090">
            <p style="padding: 10px 40px; font-weight: 600; ">For best results leave duration as default <br> We have
                found
                better prices on differnt airlines using 7/8 and 13 nights stay . you can filter later</p>
            <p style="padding: 10px; ">
                Duration (Nights) : <span
                    style="font-weight: 600; border: 1px solid #00000090;padding: 10px ;border-radius: 8px;">7 -
                    17</span>
            </p>
            <div class="submit">
                <button style="background-color: white; color: black;" class="clear">Clear</button>
                <button style="background-color:greenyellow; color: white; border-color: greenyellow;" class="applyDate">Apply</button>
            </div>
        </div>
		<?php require_once "../cms/footer.php"; ?>

    <!-- Add the latest version of jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    
    <!-- Include Select2 JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <!-- Add moment.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <!-- For LongHill Calender -->
  <script src="LongHillCalender/src/jquery.daterangepicker.js"></script>
  <script src="LongHillCalender/demo.js"></script>

  <!-- Add Bootstrap JS and Popper.js (required for some Bootstrap components) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Add Bootstrap Multiselect JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>

  <!-- Add Date Range Picker JS commented due to long hill calender lib -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
  <!-- Add Month Picker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
    <!-- Include twbs-pagination library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>


  <!-- Initialize Bootstrap Multiselect with custom styling -->
  <script>
    $(document).ready(function() {
		var currentPage = 1;
		var firstCall = true; // On Page load, we can set it true
		$("#apply-btn").click(function(){
			$('#mergedDateField').show();
            var selectedTabId = $('#dateTab .nav-link.active').attr('href');
			if(selectedTabId === '#exact-dates'){
				// Clear short stays days DDL
				$("#short-stays-days").val('').change();
    			// Clear days of week DDL, so that it can be removed from url
    			$("#days-of-week").val('').change();
				// Get values from date pickers
				let fromDate = $("#dateRangePicker").val();
				let toDate = $("#dateRangePicker2").val();

				// Concatenate values into desired format
				var customRange = "Custom Range: " + fromDate + " to " + toDate;

				// Write result into mergedDateField
				$("#mergedDateField").val(customRange);
			}
			else if(selectedTabId === '#months'){
					// Clear short stays days DDL
    				$("#short-stays-days").val('').change();
    				// Clear days of week DDL, so that it can be removed from url
    				$("#days-of-week").val('').change();
					// Split the date range into fromDate and toDate
					var dateParts = monthPickerDates.split(' - ');
					let fromDate = dateParts[0];
					let toDate = dateParts[1];

					if(fromDate == '' || fromDate == null){ // because if any values in url then monthPickerDates variable is null
						// Get the selected date range
						fromDate = $('#dateRangePicker').val();
						toDate = $('#dateRangePicker2').val();
					}

					// Concatenate values into desired format
					var customRange = "Months: " + fromDate + " to " + toDate;

					// Write result into mergedDateField
					$("#mergedDateField").val(customRange);
			}
			else if(selectedTabId === '#short-stays'){
				// Get values from date pickers
				let fromDate = $("#shortStaysPickerFrom").val();
				let toDate = $("#shortStaysPickerTo").val();

				// Concatenate values into desired format
				var customRange = "Short Stays: " + fromDate + " to " + toDate;

				// Write result into mergedDateField
				$("#mergedDateField").val(customRange);
			}
			$('#parentTabContent').slideToggle();

			//bcz we are searching data w.r.t. dates / no dates
			$('#noDates').prop('checked', false);
			$('#dates').prop('checked', true);
        });
		$("#clear-btn").click(function(){
			var selectedTabId = $('#dateTab .nav-link.active').attr('href');
			if(selectedTabId === '#exact-dates'){
				// create from and to dates in first tab
				$('#dateRangePicker').val('');
				$('#dateRangePicker2').val('');
				// hide dateRangePicker2
				$('#dateRangePicker2').hide();
				if ($('#dateRangePicker2').data('dateRangePicker')) {
					// firstly destroying it so that if its already there so it will not throw issue on re creating
					$('#dateRangePicker2').data('dateRangePicker').destroy();
					//assignDateRangePicker2();
				}		
			}
			else if(selectedTabId === '#short-stays'){
				// create from and to dates in first tab
				$('#shortStaysPickerFrom').val('');
				$('#shortStaysPickerTo').val('');
				// hide shortStaysPickerTo
				$('#shortStaysPickerTo').hide();
				if ($('#shortStaysPickerTo').data('dateRangePicker')) {
					// firstly destroying it so that if its already there so it will not throw issue on re creating
					$('#shortStaysPickerTo').data('dateRangePicker').destroy();
					//assignDateRangePicker2();
				}		
			}

			$('#mergedDateField').hide();
			$("#mergedDateField").val('');

			//bcz we are searching data w.r.t. dates / no dates
			$('#noDates').prop('checked', true);
			$('#dates').prop('checked', false);
        });
		// CSS to adjust calendar width, font size, and font color
		$('#dateRangePicker').css({
			'font-size': '16px', // Adjust font size as needed
			'color': '#333' // Adjust font color as needed
		});
		//Long Hill Date Picker
		// $('#shortStaysPicker').dateRangePicker(
		// {
		// 	customTopBar: 'Foo Bar'
		// });
		
		$('#dateRangePicker').dateRangePicker(
		{
			autoClose: true,
			singleDate : true,
			showShortcuts: false,
			singleMonth: true,
			customTopBar: 'Select earliest departure date',
			monthSelect: true,
			yearSelect: true,
			inline:true,
			container: '#exact-dates-first-col',
			alwaysOpen:true
		}).bind('datepicker-change', function(event, obj) {
				// Check if the first date is selected
				if (obj.date1) {
					// If the first date is selected, display dateRangePicker2
					$('#dateRangePicker2').show();

					exactDatesToDateSetting();

					// when selecting 'from date' is greater than already selected 'to date', then make 'to date' as empty
					if($('#dateRangePicker').val() != '' && $('#dateRangePicker').val() > $('#dateRangePicker2').val()){
						$('#dateRangePicker2').val('');
					}
				} else {
					// If the second date is not selected, hide dateRangePicker2
					$('#dateRangePicker2').hide();
				}
			});

		// show/hide the date related sub tabs on parent tab click
		$('#dates-tab').click(function(e) {
			e.preventDefault();
			$('#parentTabContent').slideToggle();
		});
		$('#short-stays-days').on('change', function() {
			// ***********3/3/2024******************
			// hide short stays picker
			// Destroy calendars before text box hide
			if ($('#shortStaysPickerFrom').data('dateRangePicker')) {
					$('#shortStaysPickerFrom').data('dateRangePicker').destroy();
				}
			$('#shortStaysPickerFrom').val('');
			$('#shortStaysPickerFrom').hide();

			if ($('#shortStaysPickerTo').data('dateRangePicker')) {
					$('#shortStaysPickerTo').data('dateRangePicker').destroy();
				}
				$('#shortStaysPickerTo').val('');
				$('#shortStaysPickerTo').hide();
			// On short stays change, load 'days of week' DDL values
			var selectedDays = parseInt($(this).val());
            var daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            var daysOfWeekSelect = $('#days-of-week');
			var daysOfWeekClass = $(".days-of-week-class");

            if (selectedDays > 0) {
				// Show days of week ddl
				daysOfWeekClass.show();
				daysOfWeekSelect.find('option').not(':first').remove(); // Remove all options except the first one
                for (var i = 0; i < daysOfWeek.length; i++) {
                    var endDayIndex = (i + 1 + selectedDays - 1) % daysOfWeek.length;
                    var optionText = daysOfWeek[i] + " to " + daysOfWeek[endDayIndex];
                    var option = $('<option>').val(optionText).text(optionText);
                    daysOfWeekSelect.append(option);
                }
            }
			else{
				// Hide days of week ddl
				daysOfWeekClass.hide();
			}
			// ***********3/3/2024******************
			// If url has days of week param,then select the option by getting it from url
			// Get the URL parameters
			const urlParams = new URLSearchParams(window.location.search);
			const hasDaysOfWeek = urlParams.has('daysOfWeek');
			const daysOfWeekFromParam = urlParams.get('daysOfWeek');
			if(hasDaysOfWeek && firstCall){
				$('#days-of-week').val(daysOfWeekFromParam).change();
				//Handle Date Range picker
				const dateFromParam = urlParams.get('dateFrom');
				const dateToParam = urlParams.get('dateTo');
				
				// Check if both dateFromParam and dateToParam exist
				if (dateFromParam !== null && dateToParam !== null){
					// Decode the URL-encoded date values
					// const fromDate = decodeURIComponent(dateFromParam);
					// const toDate = decodeURIComponent(dateToParam);

					const fromDate = decodeURIComponent(dateFromParam);
					const toDate = decodeURIComponent(dateToParam);

					$('#shortStaysPickerFrom').val(fromDate).change();
					$('#shortStaysPickerTo').val(toDate).change();
					exactDatesToDateSettingForShortStays();
					$('#shortStaysPickerTo').show();
				}
			}

			var selectedValue = $(this).val(); // Get the selected value of #short-stays-days dropdown
			// Check if #days dropdown contains an option with the selected value
			var daysDropdown = $('#days');
			var optionExistsWithDay = daysDropdown.find('option').filter(function() {
				// Check if the option text ends with " day" and matches the selected value
				return $(this).val().endsWith("day") && $(this).val().startsWith(selectedValue + " ");
			}).first();

			if (optionExistsWithDay.length > 0) {
				// If an option ending with "day" exists, set the value of #days dropdown to match
				daysDropdown.val(selectedValue + ' day').trigger('change');
			} else {
				// Check if the selected value exists in the #days dropdown without "day" at the end
				var optionExistsWithoutDayAtEnd = daysDropdown.find('option').filter(function() {
					// Check if the option text matches the selected value
					return $(this).val() == selectedValue;
				}).first();

				if (optionExistsWithoutDayAtEnd.length > 0) {
					// If an option without "day" at the end exists, set the value of #days dropdown to match
					daysDropdown.val(selectedValue).trigger('change');
				}
				else{
					daysDropdown.val("").trigger('change');
				}
			}
			firstCall = false; // Making it false because we don't want the functionalities to distrub based on parameters, if we are not reloading the page
		});

		$('#days-of-week').change(function () {
            updateDaysOfWeek();
			// if 'Please Select option is selected, then hide the calendar'
			var selectedDaysOfWeek = $(this).val();
			if(selectedDaysOfWeek === ''){
				// Destroy from calendar before text box hide
				if ($('#shortStaysPickerFrom').data('dateRangePicker')) {
					$('#shortStaysPickerFrom').data('dateRangePicker').destroy();
				}
				$('#shortStaysPickerFrom').val('');
				$('#shortStaysPickerFrom').hide();
			}
			// Hide to calendar
			if ($('#shortStaysPickerTo').data('dateRangePicker')) {
					$('#shortStaysPickerTo').data('dateRangePicker').destroy();
			}
			$('#shortStaysPickerTo').val('');
			$('#shortStaysPickerTo').hide();
        });

		function updateDaysOfWeek() {
			var selectedDays = parseInt($('#short-stays-days').val());
			var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			var startDay = daysOfWeek.indexOf($('#days-of-week').val().split(' ')[0]);
			var endDay = daysOfWeek.indexOf($('#days-of-week').val().split(' ')[2]);

			var calendarOptions = {
				autoClose: true,
				singleDate: true,
				showShortcuts: false,
				singleMonth: true,
				customTopBar: 'Please Select From Date',
				monthSelect: true,
				yearSelect: true,
				inline: true,
				container: '#short-stays-dates-first-col',
				alwaysOpen: true,
				beforeShowDay: function (t) {
					var dayIndex = t.getDay();
					var valid = dayIndex === startDay;
					var invalid = dayIndex === endDay
					var _class = invalid ? 'disabled-day' : '';
					var _tooltip = valid ? '' : 'This day is disabled';
					return [valid, _class, _tooltip];
				}
			};

			if ($('#shortStaysPickerFrom').data('dateRangePicker')) {
					$('#shortStaysPickerFrom').data('dateRangePicker').destroy();
			}
			$('#shortStaysPickerFrom').dateRangePicker(calendarOptions)
			.bind('datepicker-change', function(event, obj) {
				// Check if the first date is selected
				if (obj.date1) {
					// If the first date is selected, display shortStaysPickerTo
					$('#shortStaysPickerTo').show();

					exactDatesToDateSettingForShortStays();
					// when selecting 'from date' is greater than already selected 'to date', then make 'to date' as empty
					if($('#shortStaysPickerTo').val() != '' && $('#shortStaysPickerFrom').val() > $('#shortStaysPickerTo').val()){
						$('#shortStaysPickerTo').val('');
					}
				} else {
					// If the second date is not selected, hide shortStaysPickerTo
					$('#shortStaysPickerTo').hide();
				}
			});;

			// Clear the selected date range
			$('#shortStaysPickerFrom').data('dateRangePicker').clear();

			$('#shortStaysPickerFrom').show();
		}


		// Initialize datepicker for months
		$('#monthpicker').datepicker({
			changeMonth: true,
			changeYear: true, // Enable year selection
			showButtonPanel: true,
			dateFormat: 'MM yy', // Display month and year
			onClose: function(dateText, inst) {
				var year = inst.selectedYear || 0; // If no year is selected, default to 0
				var month = inst.selectedMonth || 0; // If no month is selected, default to 0
				$(this).datepicker('setDate', new Date(year, month, 1));
				updateMonthPickerDates(year, month);
			},
			yearRange: new Date().getFullYear() + ':' + (new Date().getFullYear() + 1) // Restrict the year dropdown to the current year and the next year
		});
		// Assuming abc is a global variable
		var monthPickerDates = '';

		// Function to update abc variable when February 2024 is selected
		function updateMonthPickerDates(year, month) {
			var startDate = new Date(year, month, 1);
			var endDate = new Date(year, month + 1, 0); // Get the last day of February
			var startDateFormatted = $.datepicker.formatDate('yy-mm-dd', startDate);
			var endDateFormatted = $.datepicker.formatDate('yy-mm-dd', endDate);
			monthPickerDates = startDateFormatted + ' - ' + endDateFormatted;
		}

		// Calendar based implementation
		// var start = moment().subtract(29, 'days');
		// 	var end = moment();
		// 	function cb(start, end) {
		// 		$('#dateRangePicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		// 	}

		// 	$('#dateRangePicker').daterangepicker({
		// 		startDate: start,
		// 		endDate: end,
		// 		/*ranges: {
		// 		'Today': [moment(), moment()],
		// 		'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		// 		'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		// 		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		// 		'This Month': [moment().startOf('month'), moment().endOf('month')],
		// 		'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		// 		}*/
		// 	}, cb);

		// 	cb(start, end);

			
			
			// Function to show the spinner
			function showSpinner() {
				$('#spinnerContainer').show();
			}

			// Function to hide the spinner
			function hideSpinner() {
				$('#spinnerContainer').hide();
			}

			// Set up global Ajax event handlers
			$(document).ajaxStart(function () {
				showSpinner();
			});

			$(document).ajaxStop(function () {
				hideSpinner();
			});
			// To contain results
			var deals;
            // Initialize Select2
            $('#fromAirport').select2();
            
            // Initialize Select2
            $('#toAirport').select2();

			// Initialize Select2
            $('#days').select2();
            
            // Initialize Select2
            $('#stops').select2();

			// Initialize Select2
            $('#cabins').select2();

			// Initialize Select2
            $('#airline').select2();

			// Check if there are parameters in the URL
			if (window.location.search.length > 0) {
				assignFieldsFromUrl();
			}
			else{		
				// Load To Airport Dropdown and Chain the Following Operations
				//bindToAirportDDL();
				bindFromAirportDDL().then(handleFromAirportChange);
				getCheapestPricesOnTheBasisOfToDDLFixedValues();
			}

			function bindFromAirportDDL(){
				
				bindToAirportDDL();

				return fetchData('https://api.schoolholidaydeals.co.uk/api/Cheapest/GetFromAirports')
				.then(function (data) {
					populateFromDropdown(data);
				}).then(() => {
					// Assuming the URL parameter is 'to=abc,def'
					const urlParams = new URLSearchParams(window.location.search);
					const toValues = urlParams.get('from');
				// Check if toValues is not null and not empty
					if (toValues) {
						// Split the values based on the comma
						const valuesArray = toValues.split(',');
						// Use the val method to set the selected values
						$("#fromAirport").val(valuesArray);
					}
				});
			}

			// Function to populate the dropdown with data
            function populateFromDropdown(data) {
				// Get the select element by its ID
				var selectElement = $('#fromAirport');
				  // Loop through the data and append options to the select element
				  data.forEach(function (airport) {

					var optionText = airport.from === 'Everywhere' ? airport.from : airport.city + ' (' + airport.from + ')'
					// Check if the option should be disabled
					if (airport.isHeading === true) {
						optionText = airport.from; // Display only the heading without additional text
					}

				    var option = $('<option>', {
				      value: airport.from,
				      text: optionText
				    });
					
					// Check if the option should be disabled
					if (airport.isHeading === true) {
						option.prop('disabled', true);
					}

				    selectElement.append(option);
				   });
            }

			function getCheapestPricesOnTheBasisOfToDDLFixedValues(){
				let cabin = $("#cabins").val();
				let airline = $("#airline").val();
				let stop = $("#stops").val();
				let pageSize = 5;
				let page = currentPage;
				const dropdown = document.getElementById('toAirport');
				const options = dropdown.options;
				let commaSeparatedString = '';

				for (let i = 0; i < options.length; i++) {
					commaSeparatedString += options[i].value;
					if (i < options.length - 1) {
						commaSeparatedString += ', ';
					}
				}

				var dates = getFromAndToDates();

				// Make an AJAX request to submit the form data
                $.ajax({
                    url: "https://api.schoolholidaydeals.co.uk/api/Cheapest/GetCheapestPricesForGroups?groupNames=" + commaSeparatedString + "&dateFrom=" + dates.fromDate + "&dateTo=" + dates.toDate + "&cabin=" + cabin + "&airline=" + airline + "&stop=" + stop + "&page=" + page + "&pageSize=" + pageSize,
					method: 'GET',
                    success: function (response) {
                        // Handle the successful response
                        // Assuming response is an array of deals
						deals = response.cheapestPricedRecords;

						// Show or hide "Load More" button based on total pages
						if (currentPage < response.totalPages) {
							$('#loadMoreBtn').show();
						} 
						else {
							$('#loadMoreBtn').hide();
						}

						let isCard = true;
						//populatingCardOrTable
						populateCardOrTable(deals, isCard, false);
                    },
                    error: function (error) {
                        // Handle the error response
                        console.error(error.responseText);
                    }
                });
			}

			function convertDateRangeToMonthPicker(dateRange) {
				var dates = dateRange.split(' - '); // Split the date range into start and end dates
				var startDate = new Date(dates[0]); // Parse the start date
				var endDate = new Date(dates[1]); // Parse the end date

				// Get the month and year from the start and end dates
				var startMonth = startDate.toLocaleDateString('en-US', { month: 'long' }); // Get full month name
				var startYear = startDate.getFullYear();
				// var endMonth = endDate.toLocaleDateString('en-US', { month: 'long' }); // Get full month name
				// var endYear = endDate.getFullYear();

				// Format the month and year
				var startMonthYear = startMonth + ' ' + startYear;
				// var endMonthYear = endMonth + ' ' + endYear;

				// Combine start and end month/year
				var monthPickerDatesInnerVar = startMonthYear;  /*+ ' - ' + endMonthYear;*/

				// Assign the formatted date range to the monthpicker
				$('#monthpicker').val(monthPickerDatesInnerVar);
			}
			// Assuming the form has an ID of 'flightSearchForm'
			const flightSearchForm = $('#flightSearchForm');

			function assignFieldsFromUrl(){
				// Get the URL parameters
				// const urlParams = new URLSearchParams(window.location.search);
				// const dateFromParam = urlParams.get('dateFrom');
				// const dateToParam = urlParams.get('dateTo');

				// // Decode the URL-encoded date values
				// const fromDate = decodeURIComponent(dateFromParam);
				// const toDate = decodeURIComponent(dateToParam);

				// $('#dateRangePicker').val(`${fromDate} - ${toDate}`);

				// Get the URL parameters
				const urlParams = new URLSearchParams(window.location.search);

				// Function to decode and set value for an input element
				function setInputValue(elementId, paramName) {
					const paramValue = urlParams.get(paramName);
					if (paramValue !== null) {
						const decodedValue = decodeURIComponent(paramValue);
						$(`#${elementId}`).val(decodedValue);
					}
				}

				setInputValue('aircode', 'aircode');
				setInputValue('inputA', 'minPrice');
				setInputValue('inputB', 'maxPrice');

				// Handle checkbox for short stays
				const shortStays = urlParams.get('shortStays');
				if (shortStays === 'true') {
					$('#shortStays').prop('checked', true);
				}

				// Handle checkbox for short stays
				const isTarget = urlParams.get('isTargetOnly');
				if (isTarget === 'true') {
					$('#isTarget').prop('checked', true);
				}

				// Handle radioBetween for short stays
				const radioBetween = urlParams.get('radioBetween');
				if (radioBetween === 'true') {
					$('#isBetween').prop('checked', true);
					toggleInputBVisibility();
				}

				// Handle radioGreater for short stays
				const radioGreater = urlParams.get('radioGreater');
				if (radioGreater === 'true') {
					$('#greaterThanA').prop('checked', true);
					toggleInputBVisibility();
				}

				// Handle radioLess for short stays
				const radioLess = urlParams.get('radioLess');
				if (radioLess === 'true') {
					$('#greaterThanB').prop('checked', true);
					toggleInputBVisibility();
				}

				// Handle checkboxes for green and red diff
				const greenDiff = urlParams.get('greenDiff');
				const redDiff = urlParams.get('redDiff');
				$('#greenDiff').prop('checked', greenDiff === 'true');
				$('#redDiff').prop('checked', redDiff === 'true');
				
				//Handle Date Range picker
				const dateFromParam = urlParams.get('dateFrom');
				const dateToParam = urlParams.get('dateTo');
				
				// Check if both dateFromParam and dateToParam exist
				if (dateFromParam !== null && dateToParam !== null){
					// Decode the URL-encoded date values
					// const fromDate = decodeURIComponent(dateFromParam);
					// const toDate = decodeURIComponent(dateToParam);

					const fromDate = decodeURIComponent(dateFromParam);
					const toDate = decodeURIComponent(dateToParam);

					$('#dateRangePicker').val(fromDate);
					$('#dateRangePicker2').val(toDate);
					// $('#dateRangePicker').val(`${fromDate} - ${toDate}`);
					// Initialize the daterangepicker with the selected date range (in calendar)
					// $('#dateRangePicker').daterangepicker({
					// 	startDate: fromDate,
					// 	endDate: toDate
					// });

					// Check if either fromDate or toDate is '1997-01-01'
					if (fromDate === '1997-01-01' || toDate === '1997-01-01') {
						// Uncheck and disable the short stays checkbox
						$('#shortStays').prop('disabled', true).prop('checked', false);
						// Check the 'No Dates' radio button
						$('#noDates').prop('checked', true);
						$('#dates').prop('checked', false);
					} else {
						// on page load, if no dates is false, then just show the white date box
						$('#mergedDateField').show();
						// Enable the short stays checkbox
						$('#shortStays').prop('disabled', false);
						// Check the 'Dates' radio button
						$('#dates').prop('checked', true);
						$('#noDates').prop('checked', false);
						// display the sub tabs panel (Commented by Ali Haider as we dont need to display the dates tab on page load, we have added a box containing dates values)
						//$('#dates-tab').click();
						let datesTabLabel = 'Custom Range';
						const dateTabOption = urlParams.get('dateTabOption');
						if(dateTabOption == 'Short'){
							datesTabLabel = 'Short Stays';
							// Assuming you want to select the "Short Stays" tab
							$('#short-stays-tab').click();
						}
						else if(dateTabOption == 'Month'){
							datesTabLabel = 'Months';
							// Assuming you want to select the "Months" tab
							$('#months-tab').click();
							convertDateRangeToMonthPicker(`${fromDate} - ${toDate}`);
						}
						// As fromDate and toDates exist, and not 1997-01-01 so add it in "mergedDateField"
						// Concatenate values into desired format
						var customRange = datesTabLabel + ": " + fromDate + " to " + toDate;
						// Write result into mergedDateField
						$("#mergedDateField").val(customRange);
					}
				}
				const toParam = urlParams.get('to');
				if(toParam){
					// Load To Airport Dropdown and Chain the Following Operations
					bindToAirportDDLWhenParams().then(() => {
							// Trigger the change event asynchronously, it doesn't work without setTimeOut
							setTimeout(() => {
								$("#toAirport").trigger('change');
							}, 0);
						})
						.then(handleToAirportChange) // in this function we are using promise, it will not return until promise resolves, and promise can only resolve under its onChange event and onChange event will only call if user triggers change, thats why I firstly used trigger change event and then calls this function handleToAirportChange, because if I write change event after that function, the change event never triggers because it wont move to next statement
						//.then(bindOtherDDLs)
						.then(submitForm)
						.catch(function (error) {
							console.error('An error occurred:', error);
						});
				}
				else{
					// Load To Airport Dropdown and Chain the Following Operations
					bindToAirportDDLWhenParams().then(() => {
							// Trigger the change event asynchronously, it doesn't work without setTimeOut
							setTimeout(() => {
								$("#toAirport").trigger('change');
							}, 0);
						})
						.then(handleToAirportChange) // in this function we are using promise, it will not return until promise resolves, and promise can only resolve under its onChange event and onChange event will only call if user triggers change, thats why I firstly used trigger change event and then calls this function handleToAirportChange, because if I write change event after that function, the change event never triggers because it wont move to next statement
						//.then(bindOtherDDLs)
						.then(submitForm)
						.catch(function (error) {
							console.error('An error occurred:', error);
						});
				}
			}

			function submitForm() {
				// Submit Form
				$('#flightSearchForm').submit();
			}

			// Add an event listener to the radio buttons
			$('input[name="dateOptions"]').change(handleDateOptionChange);

			// Function to handle the change event on radio buttons
			function handleDateOptionChange() {
				// Get references to the radio buttons and the shortStays checkbox
				const shortStaysCheckbox = $('#shortStays');
				const noDatesRadio = $('#noDates');
				if (noDatesRadio.prop('checked')) {
					// If 'No Dates' is selected, disable and uncheck the shortStays checkbox
					shortStaysCheckbox.prop('disabled', true);
					shortStaysCheckbox.prop('checked', false);
				} else {
					// If 'Dates' is selected, enable the shortStays checkbox
					shortStaysCheckbox.prop('disabled', false);
				}
			}

			//check only one Diff checkbox at a time
			$('input[name="diffGroup"]').on('change', function () {
            $('input[name="diffGroup"]').not(this).prop('checked', false);
        	});

			$("#inputA").on("input", function () {
				var inputValue = $(this).val().trim();

				if (inputValue.length > 0 && ($('#isBetween').prop('checked') === false && $('#greaterThanA').prop('checked') === false && $('#greaterThanB').prop('checked') === false)) {
					// Display a success message
					alert("Please select a radio button before entering input.");
				}
        	});
			
			// Attach a click event to the button with id btnSubmit
            $('#btnSubmit').on('click', function () {
				//COMMENTED BY ALI HAIDER 2 March 2024 as we are adding apply and clear btns in calendar
				// Check if the parent tab content is currently visible
				// if ($('#parentTabContent').is(':visible')) {
				// 	$('#noDates').prop('checked', false);
				// 	$('#dates').prop('checked', true);
				// } else {
				// 	$('#noDates').prop('checked', true);
				// 	$('#dates').prop('checked', false);
				// }

				// Get Filtered Form Data
				result = getFormAndFilteredFormData();
				filteredFormData = result.filteredFormData
                // Get the current URL
                var currentUrl = window.location.href;

                // Serialize the form data into a query string
                var queryString = $.param(filteredFormData);

                // Remove everything before "?"
                var baseUrl = currentUrl.split('?')[0];

                // Create the new URL by appending the query string
                var newUrl = baseUrl + '?' + queryString;
                // Redirect to the new URL
                window.location.href = newUrl;
            });

            // Handle form submission
            $("#flightSearchForm").submit(function (event) {
                // Prevent the default form submission
                event.preventDefault();
				// Get Form and Filtered Form Data
                result = getFormAndFilteredFormData();
				formData = result.formData;
				filteredFormData = result.filteredFormData

				// Convert the formData object to a query string
				var queryString = $.param(filteredFormData);
				console.log("alee=>", queryString);
                // Make an AJAX request to submit the form data
                $.ajax({
                    type: "GET",
                    url: "https://api.schoolholidaydeals.co.uk/api/GoogleWorldwide/GetGFAirlineRecords?" + queryString,
                    contentType: "application/json",
                    data: JSON.stringify(formData),
                    success: function (response) {
                        // Handle the successful response
                        // Assuming response is an array of deals
						deals = response;
						let isCard = true;
						//populatingCardOrTable
						populateCardOrTable(deals, isCard, false);
                    },
                    error: function (error) {
                        // Handle the error response
                        console.error(error.responseText);
                    }
                });
            });

			$('input[name="viewType"]').on('change', function () {
				// Destroy existing DataTable instance
				if ($.fn.DataTable.isDataTable('#deals-table')) {
					$('#deals-table').DataTable().destroy();
				}
				// Hide existing DataTable instance
				$('#deals-table').hide();
				let isCard = $('#cardView').is(':checked');
				//populatingCardOrTable
				populateCardOrTable(deals, isCard, false);
			});

			function populateCardOrTable(deals, isCard, isDepToDestForAllPrices){
				// Remove records where new_price is 0
				deals = deals.filter(function (deal) {
					return parseFloat(deal.new_price) !== 0;
				});
				// Container to append the deal boxes
				var container = $(".my-deals-container");
				if(!isDepToDestForAllPrices){
					// remove pagination if not cards
					$('#pagination').twbsPagination('destroy');
					$('#pagination').remove();
					$('#pag').html('<div id="pagination"></div>');
				}
				// Remove existing content from the container
				if(currentPage === 1){
					container.empty();
				}
				if(deals.length > 0){
						if(isCard){
							$(".card-deals-container").empty(); // for pagination, need to remove prev page records
							// Loop through each deal and generate HTML content
							deals.forEach(function (deal) {
								const oldePrice = parseFloat(deal.olde_price);
								const newPrice = parseFloat(deal.new_price);
								const difference = parseFloat(deal.difference);
								var textColor = "";
								if (difference < 0){
									textColor = 'forestgreen';
								}
								else if (difference > 0){
									textColor = 'red';
								}
								else if (difference === 0 && oldePrice === 0 && newPrice > 0){
									textColor = 'orange';
								}
								else if (difference === 0 && oldePrice > 0 && newPrice === 0){
									textColor = 'gray';
								}
								else{
									textColor = 'black';
								}
								if(!isDepToDestForAllPrices){
									// hide sort by ddl
									$("#ddlSortByDiv").css("display", "none");
									// Generate HTML for each deal
									var dealHtml = `
									<div class="row row-cheapest-cards" data-group="${deal.group}" data-to="${deal.to}" style="margin-top:2px; border-bottom:solid 1px #bfbfbf; cursor: pointer;">
										<div onmouseover="this.style.backgroundColor='rgba(210, 203, 203, 0.944)';" onmouseout="this.style.backgroundColor='white';" style="float:left;width:70%;height:55px;font-size:25px;background:#fff;text-align:center;padding-top:9px">${deal.group ? deal.group : deal.citys + ' (' + deal.to + ')'}</div>
										<div onmouseover="this.style.backgroundColor='rgba(210, 203, 203, 0.944)';" onmouseout="this.style.backgroundColor='#DFDFDF';" style="float:right;width:30%;height:55px;background:#DFDFDF;text-align:center">
											<div style="font-size:11px;padding-right:10px">From <i style="float:right" class="fas fa-caret-right"></i></div>
											<span style="font-size:24px">&pound;${deal.new_price} </span><span style="font-size:12px"> Roundtrip</span>
											
											
											</div> 
									</div>
											`;

										// Append the generated HTML to the container
										$(".card-deals-container").empty();
										container.append(dealHtml);	
								}
								else{
								// show sort by ddl
								$("#ddlSortByDiv").css("display", "block");
									// Load More button not needed in this case
									$('#loadMoreBtn').hide();
									// Generate HTML for each deal
									var dealHtml = `
									<div class="deal-box-f">
										<div class="depart-from-box-f">
											<div class="depart-from-f"><b>${deal.from}</b></div>
											<div class="plane-logo-f"><i class="fa fa-plane"></i></div>
											<div class="arrive-to-f"><b>${deal.to}</b></div>
										</div>
										<div style="clear: both;"></div>
										<div style="width:70%;float:left">
											<div class="depart-date-f"><i class="fa fa-calendar"></i> ${formatDate(deal.dates)}</div>
											<div class="side-border" style="padding-right: 17px;"></div>
											<div class="depart-date-f"><i class="fa fa-clock"></i> ${deal.days} </div>
											<div style="clear: both;"></div>
											<div class="airline-logo-box-f"><img src="data:image/jpeg;base64,${deal.photo}" class="airline-img-res-f" /></div>
											<div style="float:left;"> <div class="round-trip-f"> Roundtrip<br />${deal.cabin} </div> </div>
											<div style="clear: both;"></div>

											<div style="float:left; font-size:12px">uploaded: ${calculateTimeAgo(deal.newUploadDate)}</div>
											<div><input type="button" class="btn-f btn-primary-f flight-button-f" value="Details" onclick="window.open('${deal.web}', '_blank')" /></div>
											<div style="clear: both;"></div>
										</div>
										<div style="width:30%;float:right;border: 1px solid gray;text-align:center">
											<div><b><span style="font-size:12px">Was  </span><span style="text-decoration: line-through;font-size:17px">&pound;${deal.olde_price}</span></b></div>
											
											<div style="color: ${textColor};font-size:17px"><span style="font-size:12px">Difference  </span><b>${deal.difference}</b></div>
											<div style="font-size:22px"><span style="font-size:12px">New  </span><b>&pound;${deal.new_price}</b></div>
										</div>
									</div>
											`;

										// Append the generated HTML to the container
										container.empty();
										$(".card-deals-container").append(dealHtml);	
								}
							});
						}
						else{
							// Destroy existing DataTable instance
							if ($.fn.DataTable.isDataTable('#deals-table')) {
								$('#deals-table').DataTable().destroy();
							}
							// Show the table once DataTable is ready
        					$('#deals-table').show();
							// Initialize DataTable with an empty dataset
							const dataTable = $('#deals-table').DataTable({
								data: deals,
								scrollX: true, // Enable horizontal scrolling
								order: [[5, 'asc']],  // Column index 5 corresponds to the new_price column
								columns: [
									{ data: 'from' },
									{ data: 'to' },
									{ data: 'citys' },
									{ 
										data: 'dates', 
										render: function (data) { 
											return formatDate(data); // Using the formatDate function
										} 
									},
									{ 
										data: 'olde_price',
										render: function(data, type, row) {
											if (type === 'display') {
												return `<del>&pound;${data}</del>`;
											} else {
												// For sorting, return the raw numeric value
												return parseFloat(data);
											}
										}
									},
									{ 
										data: 'new_price',
										render: function(data, type, row) {
											if (type === 'display') {
												return `<span class="table-price">&pound;${data}</span>`;
											} else {
												// For sorting, return the raw numeric value
												return parseFloat(data);
											}
										}
									},
									{ data: 'difference' },
									{ data: 'cheapest' },
									{ data: 'airline' },
									{ data: 'aircode' },
									{ data: 'cabin' },
									{ data: 'days' },
									{ data: 'stops' },
									{ 
										data: 'newUploadDate', 
										render: function (data) { 
											return formatDate(data); // Using the formatDate function
										} 
									},
									{ 
										data: 'web', 
										render: function (data) { 
											return `
												<div>
													<a href="${data}" target="_blank" class="btn btn-primary">Details</a>
												</div>`;
										} 
									},
									{
										data: 'photo',
										render: function (data) {
											return data
												? `<img src="data:image/jpeg;base64,${data}" alt="Image" style="max-width:100px; max-height:100px;">`
												: 'No Image';
										}
									},
									// Add more columns as needed
								],
								createdRow: function (row, data, dataIndex) {
									const newPrice = parseFloat(data.new_price);
									const oldePrice = parseFloat(data.olde_price);
									var differenceValue = parseFloat(data.difference);

									if (differenceValue < 0) {
										$('td:eq(6)', row).css('background-color', 'LightGreen');
									} else if (differenceValue > 0) {
										$('td:eq(6)', row).css('background-color', 'Red');
									} else if (differenceValue === 0 && parseFloat(oldePrice) === 0 && parseFloat(newPrice) > 0) {
										$('td:eq(6)', row).css('background-color', 'Orange');
									} else if (differenceValue === 0 && parseFloat(oldePrice) > 0 && parseFloat(newPrice) === 0) {
										$('td:eq(6)', row).css('background-color', 'Gray');
									}

									var textColor = "";

									if (oldePrice < newPrice){
									textColor = 'red';
									}
									else if (oldePrice > newPrice){
										textColor = 'green';
									}
									else{
										textColor = 'black';
									}

									$(row).find('.table-price').css('color', textColor);
								}
							});
						}
						}
						else{
							alert("No Data Found");
						}
			}

			function calculateTimeAgo(uploadedDate) {
				// Assuming uploadedDate is a JavaScript Date object or a string in a format that can be parsed by Date
				uploadedDate = new Date(uploadedDate);
				var currentDate = new Date();
				
				var timeDifference = currentDate - uploadedDate;
				var hoursDifference = Math.floor(timeDifference / (1000 * 60 * 60));

				var timeAgo = "just now";

				if (hoursDifference >= 24) {
					var daysDifference = Math.floor(hoursDifference / 24);
					timeAgo = daysDifference === 1 ? "1 day ago" : daysDifference + " days ago";
				} else if (hoursDifference > 0) {
					timeAgo = hoursDifference === 1 ? "1 hour ago" : hoursDifference + " hours ago";
				}

				return timeAgo;
			}

			// Function to format date string
			function formatDate(dateString) {
				const formattedDate = new Date(dateString).toLocaleDateString('en-GB', { year: 'numeric', month: '2-digit', day: '2-digit' });
				return formattedDate;
			}

			function getFormAndFilteredFormData(){
				var selectedTabId = '#exact-dates';
				var fromDate;
                var toDate;
				var dateTabOption;
				// get dates based on selected tab
				var selectedTabId = $('#dateTab .nav-link.active').attr('href');
				if(selectedTabId === '#exact-dates'){
					// Get the selected date range
					fromDate = $('#dateRangePicker').val();
					//firsly I am destroying calender so that I can re assign calender in order to pre-select the selected date in calender, otherwise it will not show selected date in calender
					$('#dateRangePicker').data('dateRangePicker').destroy();
					
					// dateRangePicker re applied
					$('#dateRangePicker').dateRangePicker(
							{
								autoClose: true,
								singleDate : true,
								showShortcuts: false,
								singleMonth: true,
								customTopBar: 'Please Select To Date',
								monthSelect: true,
								yearSelect: true,
								inline:true,
								container: '#exact-dates-first-col',
								alwaysOpen:true
							});

					toDate = $('#dateRangePicker2').val();
					// show toDate only if fromDate has value on page load, when submitting form
					if(fromDate != ''){
						$('#dateRangePicker2').show();
						
						exactDatesToDateSetting();
					}
					else{
						$('#dateRangePicker2').hide();
					}
					// Split the date range into fromDate and toDate
					// var dateParts = dateRange.split(' - ');
					// fromDate = dateParts[0];
					// toDate = dateParts[1];

					// Uncheck and disable the short stays checkbox
					$('#shortStays').prop('disabled', true).prop('checked', false);

					dateTabOption = 'Exact';
				}
				else if(selectedTabId === '#months'){
					// Split the date range into fromDate and toDate
					var dateParts = monthPickerDates.split(' - ');
						fromDate = dateParts[0];
						toDate = dateParts[1];
						
					if(fromDate == '' || fromDate == null){ // because if any values in url then monthPickerDates variable is null
						// Get the selected date range
						// Get the selected date range
						fromDate = $('#dateRangePicker').val();
						//firsly I am destroying calender so that I can re assign calender in order to pre-select the selected date in calender, otherwise it will not show selected date in calender
						$('#dateRangePicker').data('dateRangePicker').destroy();
						
						// dateRangePicker re applied
						$('#dateRangePicker').dateRangePicker(
								{
									autoClose: true,
									singleDate : true,
									showShortcuts: false,
									singleMonth: true,
									customTopBar: 'Please Select To Date',
									monthSelect: true,
									yearSelect: true,
									inline:true,
									container: '#exact-dates-first-col',
									alwaysOpen:true
								});

						toDate = $('#dateRangePicker2').val();
						// show toDate only if fromDate has value on page load, when submitting form
						if(fromDate != ''){
							$('#dateRangePicker2').show();
							
							exactDatesToDateSetting();
						}
						else{
							$('#dateRangePicker2').hide();
						}
						
						// var dateRange = $('#dateRangePicker').val();
						// // Split the date range into fromDate and toDate
						// var dateParts = dateRange.split(' - ');

						// fromDate = dateParts[0];
						// toDate = dateParts[1];
					}
					// Uncheck and disable the short stays checkbox
					$('#shortStays').prop('disabled', true).prop('checked', false);

					dateTabOption = 'Month';
				}
				else if(selectedTabId === '#short-stays'){
					// Get the selected date range
					//var dateRange = $('#shortStaysPicker').val();
                
					// Split the date range into fromDate and toDate
					//var dateParts = dateRange.split(' - ');
					fromDate = $('#shortStaysPickerFrom').val();
					toDate = $('#shortStaysPickerTo').val();

					// check and enable the short stays checkbox
					$('#shortStays').prop('disabled', false).prop('checked', true);

					dateTabOption = 'Short';
				}
				var noDatesChecked = $("#noDates").prop('checked');
				var radioBetween = $('#isBetween').prop('checked');
				var radioGreater = $('#greaterThanA').prop('checked');
				var radioLess = $('#greaterThanB').prop('checked');
				var fromArray = $("#fromAirport").val();
				// Convert the array of strings to a comma-separated string
				var from = fromArray.join(',');
				var toArray = $("#toAirport").val();
				// Convert the array of strings to a comma-separated string
				var to = toArray.join(',');
				var daysOfWeekField = $('#days-of-week').val();
        
                // Collect form data
                var formData = {
                    from: from,
                    to: to,
                    dateFrom: noDatesChecked ? '1997-01-01' : fromDate,
                    dateTo: noDatesChecked ? '1997-01-01' : toDate,
					isTargetOnly: $("#isTarget").prop('checked'),
					selectedStops: $("#stops").val(),
					selectedDays: $("#days").val(),
					selectedCabin: $("#cabins").val(),
					airline: $("#airline").val(),
					aircode: $("#aircode").val(),
					shortStays: $("#shortStays").prop('checked'),
					radioBetween: radioBetween,
					radioGreater: radioGreater,
					radioLess: radioLess,
					minPrice: parseFloat($('#inputA').val()) || 0,
					maxPrice: parseFloat($('#inputB').val()) || 0,
					greenDiff: $("#greenDiff").prop('checked'),
					redDiff: $("#redDiff").prop('checked'),
					dateTabOption: dateTabOption,
					daysOfWeek: daysOfWeekField
                };
				
				// Filter out null or empty values
				var filteredFormData = {};
				Object.keys(formData).forEach(function (key) {
					var value = formData[key];
					if (value !== null && value !== undefined && value !== '') {
						filteredFormData[key] = value;
					}
				});
				return {
					formData: formData,
					filteredFormData: filteredFormData
				};
			}
			function exactDatesToDateSettingForShortStays(){
						// Check if dateRangePicker is already applied
						if ($('#shortStaysPickerTo').data('dateRangePicker')) {
							// firstly destroying it so that if its already there so it will not throw issue on re creating
							$('#shortStaysPickerTo').data('dateRangePicker').destroy();

							assignDateRangePicker2ForShortStays();
						}
						else{
							// dateRangePicker is not applied
							assignDateRangePicker2ForShortStays();
						}
			}
			function assignDateRangePicker2ForShortStays(){
				var selectedDays = parseInt($('#short-stays-days').val());
				var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
				var startDay = daysOfWeek.indexOf($('#days-of-week').val().split(' ')[0]);
				var endDay = daysOfWeek.indexOf($('#days-of-week').val().split(' ')[2]);
				var shortStaysDatesFrom = new Date($('#shortStaysPickerFrom').val());
				var month = shortStaysDatesFrom.getMonth();
				var year = shortStaysDatesFrom.getFullYear();

				var calendarOptions = {
					autoClose: true,
					singleDate: true,
					showShortcuts: false,
					singleMonth: true,
					customTopBar: 'Please Select To Date',
					monthSelect: true,
					yearSelect: true,
					inline: true,
					container: '#short-stays-dates-second-col',
					alwaysOpen: true,
					startDate: new Date(year, month, 1), // Set the start date to the first day of the selected month
					beforeShowDay: function (t) {
						var dayIndex = t.getDay();
						var valid = dayIndex === endDay && t >= shortStaysDatesFrom;
						var invalid = dayIndex === startDay;
						var _class = invalid ? 'disabled-day' : '';
						var _tooltip = valid ? '' : 'This day is disabled';
						return [valid, _class, _tooltip];
					}
				};

				$('#shortStaysPickerTo').dateRangePicker(calendarOptions);
			}

			function exactDatesToDateSetting(){
				$('#dateRangePicker2').css({
							'font-size': '16px', // Adjust font size as needed
							'color': '#333' // Adjust font color as needed
						});
						// Check if dateRangePicker is already applied
						if ($('#dateRangePicker2').data('dateRangePicker')) {
							// firstly destroying it so that if its already there so it will not throw issue on re creating
							$('#dateRangePicker2').data('dateRangePicker').destroy();

							assignDateRangePicker2();
						}
						else{
							// dateRangePicker is not applied
							assignDateRangePicker2();
						}
			}
			function assignDateRangePicker2(){
				var customDateFrom = new Date($('#dateRangePicker').val());
				var month = customDateFrom.getMonth();
				var year = customDateFrom.getFullYear();
				$('#dateRangePicker2').dateRangePicker(
							{
								autoClose: true,
								singleDate : true,
								showShortcuts: false,
								singleMonth: true,
								customTopBar: 'Select latest departure date',
								monthSelect: true,
								yearSelect: true,
								inline:true,
								container: '#exact-dates-second-col',
								alwaysOpen:true,
								startDate: new Date(year, month, 1), // Set the start date to the first day of the selected month
								beforeShowDay: function(t)
								{
									//var valid = !(t.getDay() == 0 || t.getDay() == 6);  //disable saturday and sunday
									var valid = true;
									var startDate = $('#dateRangePicker').val(); // Get the value of the first date picker
									var endDate = t.toISOString().split('T')[0]; // Get the current date in ISO format

									if (startDate && endDate < startDate) {
										valid = false; // Disable dates before the start date
										// Make the end date as start date if user selects start date that exists after the already selected end date
										// realEndDate = $('#dateRangePicker2').val(); // End date without ISO format
										// if(realEndDate && realEndDate < startDate){
										// 	$('#dateRangePicker2').val(startDate);
										// }
									}
									// when first time, we select start date to show end date calendar, it should open current date in 'end / to date'
									// if($('#dateRangePicker2').val() === ''){
									// 	$('#dateRangePicker2').val(startDate);
									// }
									var _class = '';
									//var _tooltip = valid ? '' : 'weekends are disabled';
									return [valid,_class]; //return [valid,_class,_tooltip];
								}
							});
			}
			function bindOtherDDLs(){
				// Load Stops Dropdown
				const stopsPromise = fetchData('https://api.schoolholidaydeals.co.uk/api/GoogleWorldwide/GetAllStops')
					.then(function (data) {
						// Remove existing options
						$('#stops').empty();
						populateOtherDropdowns(data, "#stops");
					});

				// Load Days Dropdown
				const daysPromise = fetchData('https://api.schoolholidaydeals.co.uk/api/GoogleWorldwide/GetAllDays')
					.then(function (data) {
						$('#days').empty();
						populateOtherDropdowns(data, "#days");
					});

				// Load Cabins Dropdown
				const cabinsPromise = fetchData('https://api.schoolholidaydeals.co.uk/api/GoogleWorldwide/GetAllCabins')
					.then(function (data) {
						$('#cabins').empty();
						populateOtherDropdowns(data, "#cabins");
					});

				// Return a Promise that resolves when all dropdowns are populated
				return Promise.all([stopsPromise, daysPromise, cabinsPromise]);
			}

			function bindToAirportDDL(){
				// Bind To DDL
				// Fetch initial static records
				const initialData = [
								{ to: 'Asia', city: '' },
								{ to: 'Africa', city: '' },
								{ to: 'America', city: '' },
								{ to: 'Australia', city: '' },
								{ to: 'Canada', city: '' },
								{ to: 'Caribbean', city: '' },
								{ to: 'Europe', city: '' },
								{ to: 'India', city: '' },
								{ to: 'Indian Ocean', city: '' },
								{ to: 'Middle East', city: '' },
								{ to: 'New Zealand', city: '' },
								{ to: 'South America', city: '' }
								// Add more static records as needed
							];

							// Populate dropdown with initial static records
							populateDropdown(initialData);
			}

			function bindToAirportDDLWhenParams(){
				return fetchData('https://api.schoolholidaydeals.co.uk/api/GoogleWorldwide/GetToAirports')
				.then(function (data) {
					populateDropdown(data);
				}).then(() => {
					// Assuming the URL parameter is 'to=abc,def'
					const urlParams = new URLSearchParams(window.location.search);
					const toValues = urlParams.get('to');
				// Check if toValues is not null and not empty
					if (toValues) {
						// Split the values based on the comma
						const valuesArray = toValues.split(',');
						// Use the val method to set the selected values
						$("#toAirport").val(valuesArray);
					}
				});
			}

			function fetchData(url) {
				// 'fetch' itself returns a Promise that's why I haven't used 'new Promise()'' etc
				return fetch(url)
					.then(function (response) {
						if (!response.ok) {
							throw new Error(`Error: ${response.status} - ${response.statusText}`);
						}
						return response.json();
					});
			}
            
            // Function to handle the "From" dropdown change event
			function handleFromAirportChange() {
				return new Promise((resolve) => {
					// Event handler for the change event of the "From" dropdown
					$('#fromAirport').on('change', function () {
						// make hidden fields as null as they are only intended for cards
						$("#hdnDestinationGroup").val('');
						$("#hdnDestinationTo").val('');
						// current page to 1
						currentPage = 1;
						// Get the selected value to the "From" dropdown
						var selectedFromAirport = $(this).val();

						var selectedToirport = $("#toAirport").val();

						if(selectedFromAirport == 'Everywhere'){
							selectedFromAirport = '';
						}

						if(selectedToirport == 'Everywhere'){
							selectedToirport = '';
						}

						// Clear the options in the "From" dropdown using Select2, haven't used trigger event here bcz if we use then it will trigger fromAirport change event and the load ddls from db endpoints call twice
						// $('#toAirport').empty();

						// // Clear the options in the "days" dropdown
						// $('#days').empty().trigger('change');

						// // Clear the options in the "cabins" dropdown
						$('#stops').empty().trigger('change');

						// // Clear the options in the "cabins" dropdown
						$('#cabins').empty().trigger('change');

						// // Clear the options in the "airlines" dropdown
						$('#airline').empty().trigger('change');

						// Check if selectedFromAirport is not empty
						if (selectedFromAirport.length > 0 && selectedToirport.length == 0) {
							// // Fetch initial static records
							// const initialData = [
							// 	{ to: 'Africa', city: '' },
							// 	{ to: 'America', city: '' },
							// 	{ to: 'Australia', city: '' },
							// 	{ to: 'Canada', city: '' },
							// 	{ to: 'Caribbean', city: '' },
							// 	{ to: 'Europe', city: '' },
							// 	{ to: 'India', city: '' },
							// 	{ to: 'Indian Ocean', city: '' },
							// 	{ to: 'Middleeast', city: '' },
							// 	{ to: 'New Zealand', city: '' },
							// 	{ to: 'Southamerica', city: '' }
							// 	// Add more static records as needed
							// ];

							// // Populate dropdown with initial static records
							// populateDropdown(initialData);
							// Make another API request to fetch days data
							fetchDropdownData(selectedToirport, selectedFromAirport)
							.then(() => {
								// Load data from "fromDDL" to "All Groups in toDDL"
								getCheapestPricesOnTheBasisOfFromSelectedDDLAndToDDLFixedValues();
							})
							.catch((error) => {
								console.error('An error occurred during the data fetch process:', error);
							});	
						} 
						else if(selectedToirport.length > 0){
							fetchDropdownData(selectedToirport, selectedFromAirport)
							.then(() => {
								getCheapestPricesOnTheBasisOfToSelectionChange()
							})
							.catch((error) => {
								console.error('An error occurred during the data fetch process:', error);
							});	
						}
						else {
							getCheapestPricesOnTheBasisOfToDDLFixedValues();
							// Resolve the promise if selectedToAirport is empty to ensure the chain continues
							resolve();
						}
					});
				});
			}

			function fetchDropdownData(selectedToAirport, selectedFromAirport) {
				return new Promise((resolve, reject) => {
					const toAirportVal = $('#toAirport').val();
					const isEverywhere = toAirportVal.length === 1 && toAirportVal[0] === 'Everywhere';

					const stopsApiUrl = isEverywhere
						? 'https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllStops'
						: `https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllStopsByToAndFromAirports?toAirports=${selectedToAirport}&fromAirports=${selectedFromAirport}`;
					
					const cabinsApiUrl = isEverywhere
						? 'https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllCabins'
						: `https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllCabinsByToAndFromAirports?toAirports=${selectedToAirport}&fromAirports=${selectedFromAirport}`;
					
					const airlinesApiUrl = isEverywhere
						? 'https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllAirlines'
						: `https://api.schoolholidaydeals.co.uk/api/Cheapest/GetAllAirlinesByToAndFromAirports?toAirports=${selectedToAirport}&fromAirports=${selectedFromAirport}`;
					
					// Fetch stops data
					$.ajax({
						url: stopsApiUrl,
						method: 'GET',
						success: function (stopsData) {
							populateOtherDropdowns(stopsData, "#stops");
							
							// Fetch cabins data
							$.ajax({
								url: cabinsApiUrl,
								method: 'GET',
								success: function (cabinsData) {
									populateOtherDropdowns(cabinsData, "#cabins");
									
									// Fetch airlines data
									$.ajax({
										url: airlinesApiUrl,
										method: 'GET',
										success: function (airlinesData) {
											populateOtherDropdowns(airlinesData, "#airline");
											resolve();
										},
										error: function (error) {
											console.error('Error fetching airlines data from the API:', error);
											resolve(); // Ensure the chain continues even if there's an error
										}
									});
								},
								error: function (error) {
									console.error('Error fetching cabins data from the API:', error);
									resolve(); // Ensure the chain continues even if there's an error
								}
							});
						},
						error: function (error) {
							console.error('Error fetching stops data from the API:', error);
							resolve(); // Ensure the chain continues even if there's an error
						}
					});
				});
			}


			$('#toAirport').on('change', function () {
						// make hidden fields as null as they are only intended for cards
						$("#hdnDestinationGroup").val('');
						$("#hdnDestinationTo").val('');

						// // Clear the options in the "cabins" dropdown
						$('#stops').empty().trigger('change');

						// // Clear the options in the "cabins" dropdown
						$('#cabins').empty().trigger('change');

						// // Clear the options in the "airlines" dropdown
						$('#airline').empty().trigger('change');
						
						// current page to 1
						currentPage = 1;
						// Get the selected value to the "To" dropdown
						var selectedToAirport = $(this).val();
						var selectedFromAirport = $("#fromAirport").val();

						if(selectedFromAirport == 'Everywhere'){
							selectedFromAirport = '';
						}

						if(selectedToAirport == 'Everywhere'){
							selectedToAirport = '';
						}

						// Check if selectedToAirport is not empty
						if (selectedToAirport.length > 0) {
							fetchDropdownData(selectedToAirport, selectedFromAirport)
							.then(() => {
								// Load data from "fromDDL" to "All Groups in toDDL"
								getCheapestPricesOnTheBasisOfToSelectionChange();
							})
							.catch((error) => {
								console.error('An error occurred during the data fetch process:', error);
							});	
						} else {
							if(selectedFromAirport.length > 0){
								fetchDropdownData(selectedToAirport, selectedFromAirport)
								.then(() => {
									// Load data from "fromDDL" to "All Groups in toDDL"
									getCheapestPricesOnTheBasisOfFromSelectedDDLAndToDDLFixedValues();
								})
							}
							else{
								getCheapestPricesOnTheBasisOfToDDLFixedValues();
							}
						}
				});

			function getCheapestPricesOnTheBasisOfToSelectionChange(){
				const fromdropdown = document.getElementById('fromAirport').value;
				const todropdown = document.getElementById('toAirport').value;
				var dates = getFromAndToDates();
				loadCheapestPrices(fromdropdown, todropdown, dates.fromDate, dates.toDate, currentPage)
			}
			// Attach change event handler to dropdown
			$('#sortPriceCardDDL').change(function(){
				// remove pagination, and re apply so that we get pagination right from the start
				$('#pagination').twbsPagination('destroy');
				$('#pagination').remove();
				$('#pag').html('<div id="pagination"></div>');

				// make current page as 1
				currentPage = 1;
					
				const fromdropdown = document.getElementById('fromAirport').value;
				var sortBy = $('#sortPriceCardDDL').val();
				let hdnGroup = $("#hdnDestinationGroup").val();
				let hdnDestination = $("#hdnDestinationTo").val();
				var destination = hdnGroup !== 'undefined' ? hdnGroup : hdnDestination;
				var dates = getFromAndToDates();
				hdnGroup !== 'undefined' ? loadCheapestPrices(fromdropdown, destination, dates.fromDate, dates.toDate, currentPage) : loadAllPrices(fromdropdown, destination, dates.fromDate, dates.toDate, currentPage, sortBy);
			});
			// Attach click event handler using jQuery
			$(document).on('click', '.row-cheapest-cards', function() {
				// // Clear the options in the "cabins" dropdown
				$('#stops').empty().trigger('change');

				// // Clear the options in the "cabins" dropdown
				$('#cabins').empty().trigger('change');

				// // Clear the options in the "airlines" dropdown
				$('#airline').empty().trigger('change');
				
				// make current page as 1
				currentPage = 1;
					
				const fromdropdown = document.getElementById('fromAirport').value;
				var group = $(this).data('group');
				var destination = group !== 'undefined' ? group : $(this).data('to');
				// adding group and to into hidden fields to use them later when doing dropdown based sorting
				$("#hdnDestinationGroup").val(group);
				$("#hdnDestinationTo").val($(this).data('to'));
				var sortBy = $('#sortPriceCardDDL').val(); // by default it's New_Price
				var dates = getFromAndToDates();

				fetchDropdownData(destination, fromdropdown)
							.then(() => {
								group !== 'undefined' ? loadCheapestPrices(fromdropdown, destination, dates.fromDate, dates.toDate, currentPage) : loadAllPrices(fromdropdown, destination, dates.fromDate, dates.toDate, currentPage, sortBy);
							})
							.catch((error) => {
								console.error('An error occurred during the data fetch process:', error);
							});	
			});	

			function getFromAndToDates() {
				var spanText = $(".show-result").text();
				if (spanText !== "____-__-__ to ____-__-__") {
					// Split the text using "to" as the delimiter
					var values = spanText.split(" to ");
					// The before value will be the first part before "to"
					var fromDate = values[0].trim();

					// The after value will be the second part after "to"
					var toDate = values[1].trim();

					// Return an object containing both values
					return {
						fromDate: fromDate,
						toDate: toDate
					};
				} else {
					// Return an object containing both values
					return {
						fromDate: "1997-01-01",
						toDate: "1997-01-01"
					};
				}
			}
			// Function to handle "Load More" button click
			$('#loadMoreBtn').click(function() {
				currentPage++; // Increment page number
				const fromdropdown = document.getElementById('fromAirport').value;
				const todropdown = document.getElementById('toAirport').value;
				if(fromdropdown.length == 0 && todropdown.length == 0){
					getCheapestPricesOnTheBasisOfToDDLFixedValues();
				}
				else if(fromdropdown.length > 0 && todropdown.length == 0){
					getCheapestPricesOnTheBasisOfFromSelectedDDLAndToDDLFixedValues();
				}
				else {
					getCheapestPricesOnTheBasisOfToSelectionChange(); // Load more records
				}
			});

			function loadCheapestPrices(fromdropdown, todropdown, fromDate, toDate, page){
				let pageSize = 10;
				if(todropdown.length > 0){
					// Select the option with value, but it will not trigger change event
    				$("#toAirport").val(todropdown).trigger("change.select2");
				}

				let cabin = $("#cabins").val();
				let airline = $("#airline").val();
				let stop = $("#stops").val();

				let apiFunctionName = todropdown !== 'Europe' ? 'GetCheapestPricesFromDepartureToSelectedGroupWorldwide' : 'GetCheapestPricesFromDepartureToSelectedGroupDomestic'
				// Make an AJAX request to submit the form data
                $.ajax({
                    url: "https://api.schoolholidaydeals.co.uk/api/Cheapest/" + apiFunctionName + "?departure=" + fromdropdown + "&destination=" + todropdown + "&dateFrom=" + fromDate + "&dateTo=" + toDate + "&cabin=" + cabin + "&airline=" + airline + "&stop=" + stop + "&page=" + page + "&pageSize=" + pageSize,
					method: 'GET',
                    success: function (response) {
                        // Handle the successful response
                        // Assuming response is an array of deals
						deals = response.worldwideCheapestPricedRecords;

						// Show or hide "Load More" button based on total pages
						if (currentPage < response.totalPages) {
							$('#loadMoreBtn').show();
						} 
						else {
							$('#loadMoreBtn').hide();
						}

						let isCard = true;
						//populatingCardOrTable
						populateCardOrTable(deals, isCard, false);

						// Show or hide "Load More" button based on total pages
						// if (currentPage < response.totalPages) {
						// 	$('#loadMoreBtn').show();
						// } 
						// else {
						// 	$('#loadMoreBtn').hide();
						// }
                    },
                    error: function (error) {
                        // Handle the error response
                        alert(error.responseText);
                    }
                });
			}

			function loadAllPrices(departure, destination, fromDate, toDate, page, sortBy){
				let cabin = $("#cabins").val();
				let airline = $("#airline").val();
				let stop = $("#stops").val();
				let apiFunctionName = 'GetAllIntAndDomFromDepartureToDestination';
				let pageSize = 12;
				// Make an AJAX request to submit the form data
                $.ajax({
                    url: "https://api.schoolholidaydeals.co.uk/api/Cheapest/" + apiFunctionName + "?departure=" + departure + "&destination=" + destination + "&dateFrom=" + fromDate + "&dateTo=" + toDate + "&cabin=" + cabin + "&airline=" + airline + "&stop=" + stop  + "&sortBy=" + sortBy + "&page=" + page + "&pageSize=" + pageSize,
					method: 'GET',
                    success: function (response) {
                        // Handle the successful response
                        // Assuming response is an array of deals
						deals = response.deals;
						let isCard = true;
						//populatingCardOrTable
						populateCardOrTable(deals, isCard, true);

						if(response.totalPages > 0){
							updatePagination(departure, destination, fromDate, toDate, response.totalPages);
						}
                    },
                    error: function (error) {
                        // Handle the error response
                        alert(error.responseText);
                    }
                });
			}

			// Function to update pagination
			function updatePagination(departure, destination, fromDate, toDate, totalPages) {
				var sortBy = $('#sortPriceCardDDL').val();
				//$('#pagination').twbsPagination('destroy');
				$('#pagination').twbsPagination({
					totalPages: totalPages,
					visiblePages: 5,
					initiateStartPageClick: false,
					onPageClick: function(event, page) {
							loadAllPrices(departure, destination, fromDate, toDate, page, sortBy);
					}
				});
			}

			function getCheapestPricesOnTheBasisOfFromSelectedDDLAndToDDLFixedValues(){
				let cabin = $("#cabins").val();
				let airline = $("#airline").val();
				let stop = $("#stops").val();
				let page = currentPage;
				let pageSize = 5;
				const fromdropdown = document.getElementById('fromAirport').value;
				const dropdown = document.getElementById('toAirport');
				const options = dropdown.options;
				var dates = getFromAndToDates();
				let commaSeparatedString = '';

				for (let i = 0; i < options.length; i++) {
					commaSeparatedString += options[i].value;
					if (i < options.length - 1) {
						commaSeparatedString += ', ';
					}
				}
				// Make an AJAX request to submit the form data
                $.ajax({
                    url: "https://api.schoolholidaydeals.co.uk/api/Cheapest/GetCheapestPricesFromDepartureToEachGroup?departure=" + fromdropdown + "&destinationGroupNames=" + commaSeparatedString + "&dateFrom=" + dates.fromDate + "&dateTo=" + dates.toDate + "&cabin=" + cabin + "&airline=" + airline + "&stop=" + stop + "&page=" + page + "&pageSize=" + pageSize,
					method: 'GET',
                    success: function (response) {
                        // Handle the successful response
                        // Assuming response is an array of deals
						deals = response.cheapestPricedRecords;

						// Show or hide "Load More" button based on total pages
						if (currentPage < response.totalPages) {
							$('#loadMoreBtn').show();
						} 
						else {
							$('#loadMoreBtn').hide();
						}

						let isCard = true;
						//populatingCardOrTable
						populateCardOrTable(deals, isCard, false);
                    },
                    error: function (error) {
                        // Handle the error response
                        alert(error.responseText);
                    }
                });
			}
            // Function to populate the dropdown with data
            function populateDropdown(data) {
				// Get the select element by its ID
				var selectElement = $('#toAirport');
				  // Loop through the data and append options to the select element
				  data.forEach(function (airport) {

					var optionText = airport.to === 'Everywhere' ? airport.to : airport.city + ' (' + airport.to + ')'
					// Check if the option should be disabled
					if (airport.isHeading === true) {
						optionText = airport.to; // Display only the heading without additional text
					}

				    var option = $('<option>', {
				      value: airport.to,
				      text: optionText
				    });
					
					// Check if the option should be disabled
					if (airport.isHeading === true) {
						option.prop('disabled', true);
					}

				    selectElement.append(option);
				   });
            }
            
            // function populateFromDropdown(data) {
            //   // Get the select element by its ID
            //   var selectElement = $('#fromAirport');
            
            //   // Loop through the data and append options to the select element
            //   data.forEach(function (airport) {

			// 	var optionText = airport.from === 'Everywhere' ? airport.from : airport.city + ' (' + airport.from + ')';
			// 	// Check if the option should be disabled
			// 	if (airport.isHeading === true) {
			// 			optionText = airport.from; // Display only the heading without additional text
			// 	}

            //     var option = $('<option>', {
            //       value: airport.from,
            //       text: optionText
            //     });
				
			// 	// Check if the option should be disabled
			// 	if (airport.isHeading === true) {
			// 			option.prop('disabled', true);
			// 	}

            //     selectElement.append(option);
            //    });
			//    // Assuming the URL parameter is 'from=abc,def'
			// 	const urlParams = new URLSearchParams(window.location.search);
			// 	const fromValues = urlParams.get('from');
			//    // Check if fromValues is not null and not empty
			// 	if (fromValues) {
			// 		// Split the values based on the comma
			// 		const valuesArray = fromValues.split(',');
			// 		// Use the val method from set the selected values
			// 		selectElement.val(valuesArray)
			// 	}
            // }

			// Function to populate the stops, Days, Cabin dropdown with data
            function populateOtherDropdowns(data, id) {
              // Get the select element by its ID
              var selectElement = $(id);
            
              // Loop through the data and append options to the select element
              data.forEach(function (airport) {
                var option = $('<option>', {
                  value: airport.id,
                  text: airport.text
                });
            
                selectElement.append(option);
               });
			   // Getting values from url params and assigning to DDLs
				const urlParams = new URLSearchParams(window.location.search);
				let fromValue;
				if(id === '#stops'){
					fromValue = urlParams.get('selectedStops');
				}
				if(id === '#cabins'){
					fromValue = urlParams.get('selectedCabin');
				}
				if(id === '#airline'){
					fromValue = urlParams.get('airline');
				}
			   // Check if fromValue is not null and not empty
				if (fromValue) {
					// Use the val method to set the selected values
					selectElement.val(fromValue).trigger('change');
							
				}
            }
            
            // var toAirportData = [
            //     { id: 4, text: 'Option 4' },
            //     { id: 5, text: 'Option 5' },
            //     { id: 6, text: 'Option 6' },
            //     // Add more options as needed
            // ];

            // Add options to the dropdown
            // $('#fromAirport').select2({
            //     data: fromAirportData
            // });
            
            // Add options to the dropdown
            // $('#toAirport').select2({
            //     data: toAirportData
            // });
      $('.multiselect').multiselect({
        buttonClass: 'btn btn-outline-secondary',
        nonSelectedText: 'Select Options',
        enableFiltering: true,
        maxHeight: 200,
        buttonWidth: '100%',
        includeSelectAllOption: true,
        selectAllText: 'Select All',
        filterPlaceholder: 'Search...',
      });

      // Initialize Date Range Picker
    //   $('#dateRangePicker').daterangepicker({
    //     opens: 'left',
    //     autoApply: true,
    //     locale: {
    //       format: 'MM/DD/YYYY',
    //     },
    //   });

      // Update start and end dates in separate fields
    //   $('#dateRangePicker').on('apply.daterangepicker', function(ev, picker) {
    //     var startDate = picker.startDate.format('MM/DD/YYYY');
    //     var endDate = picker.endDate.format('MM/DD/YYYY');
    //     $('#dateRangePicker').val(startDate + ' - ' + endDate);
    //   });

	//************JS FOR POPUP STARTS***************************
        //handle popup
        var showPopupDiv = document.querySelector(".show-popup");
        var close = document.querySelector(".fa-times");
        var popup = document.getElementById("popup");
        const handlePopUp = () => {
            if (popup.style.display === "flex") {
                popup.style.display = "none";
            } else {
                popup.style.display = "flex";
            }
        }
        showPopupDiv.addEventListener("click", handlePopUp);
        close.addEventListener("click", handlePopUp);

        //handle month selection
        let selectedMonths = [];
        const months = document.querySelectorAll('.months .month li');
        const updateSelectedMonths = () => {
            if (selectedMonths.length == 1) {
                let startIndex = Array.from(months).indexOf(selectedMonths[0]);
                for (let i = 0; i < months.length; i++) {
                    if (i < startIndex) {
                        months[i].classList.add('non-selectable');
                    } else if (i > startIndex) {
                        months[i].classList.remove('non-selectable');
                    }
                }
            } else {
                months.forEach(m => {
                    m.classList.remove('non-selectable');
                });
            }
        }
        months.forEach((month, index) => {
            month.addEventListener('click', function () {
                let startIndex, endIndex;
                const isSelected = selectedMonths.includes(this);
                if (isSelected) {
                    //selected
                    if (selectedMonths.length > 1) {
                        startIndex = Array.from(months).indexOf(selectedMonths[0]);
                        endIndex = Array.from(months).indexOf(selectedMonths[1]);
                        if (this.classList.contains("starting-month")) {
                            this.classList.remove('starting-month');
                            selectedMonths.shift();
                            selectedMonths[0].classList.replace('ending-month', 'starting-month');
                        } else {
                            this.classList.remove('ending-month');
                            selectedMonths.pop();
                        }
                        for (let i = startIndex + 1; i < endIndex; i++) {
                            months[i].classList.remove('between-month');
                        }
                    } else {
                        this.classList.remove('starting-month');
                        selectedMonths.pop();
                    }
                }
                else {
                    //not yet selected
                    if (selectedMonths.length == 0) {
                        this.classList.add('starting-month');
                        selectedMonths.push(this);
                    } else {
                        startIndex = Array.from(months).indexOf(selectedMonths[0]);
                        if (selectedMonths.length == 1) {
                            this.classList.add('ending-month');
                            selectedMonths.push(this);
                            endIndex = Array.from(months).indexOf(selectedMonths[1]);
                            for (let i = startIndex + 1; i < endIndex; i++) {
                                months[i].classList.add('between-month');
                            }
                        } else {
                            let monthIndex = Array.from(months).indexOf(this);
                            endIndex = Array.from(months).indexOf(selectedMonths[1]);
                            if (monthIndex < endIndex) {
                                if (this.classList.contains("between-month")) {
                                    this.classList.remove('between-month');
                                }
                                selectedMonths[0].classList.remove('starting-month');
                                this.classList.add('starting-month');
                                selectedMonths[0] = this;
                            } else if (monthIndex > endIndex) {
                                selectedMonths[1].classList.remove('ending-month');
                                this.classList.add('ending-month');
                                selectedMonths[1] = this;
                            }
                            startIndex = Array.from(months).indexOf(selectedMonths[0]);
                            endIndex = Array.from(months).indexOf(selectedMonths[1]);
                            for (let i = 0; i < endIndex; i++) {
                                if (i < startIndex) {
                                    months[i].classList.remove('between-month')
                                }
                                else if (i > startIndex) {
                                    months[i].classList.add('between-month');
                                }
                            }
                        }
                    }
                }

                updateSelectedMonths();

            });
        });
        //hqndle clear button
        const clear = document.querySelector('.clear');
        clear.addEventListener('click', function () {
            selectedMonths = [];
            months.forEach(m => {
                m.classList.remove('starting-month', 'ending-month', 'between-month');
            });
            updateSelectedMonths();
			document.querySelector('.show-result').textContent = "____-__-__ to ____-__-__";
        });

		//hqndle apply button
        const apply = document.querySelector('.applyDate');
        apply.addEventListener('click', function () {
				const monthElements = document.querySelectorAll('.months .month li');

				const startingMonthList = Array.from(monthElements).filter(li => {
					return li.classList.contains('starting-month');
				});

				const endingMonthList = Array.from(monthElements).filter(li => {
					return li.classList.contains('ending-month');
				});

				if(startingMonthList != null && startingMonthList != ''){
					var yearStart = startingMonthList[0].closest('.year').querySelector('h3 span').textContent;
					var yearEnd = yearStart;
					if(endingMonthList != null && endingMonthList != ''){
						yearEnd = endingMonthList[0].closest('.year').querySelector('h3 span').textContent;
					}

					if(!yearStart){
						yearStart = 2024;
					}
					if(!yearEnd){
						yearEnd = 2024;
					}
				}
				

			if (selectedMonths.length == 1) {
				var month = selectedMonths[0].textContent.toLowerCase();
				
				var startDate = new Date(yearStart, monthToInt(month), 1);
				var endDate = new Date(yearEnd, monthToInt(month) + 1, 0);

				var startDateString = startDate.getFullYear() + '-' + pad((startDate.getMonth() + 1), 2) + '-' + pad(startDate.getDate(), 2);
				var endDateString = endDate.getFullYear() + '-' + pad((endDate.getMonth() + 1), 2) + '-' + pad(endDate.getDate(), 2);

				document.querySelector('.show-result').textContent = startDateString + " to " + endDateString;
			} else if (selectedMonths.length == 2) {
				var firstMonth = selectedMonths[0].textContent.toLowerCase();
				var secondMonth = selectedMonths[1].textContent.toLowerCase();
				// get the years
				let firstMonthInt = monthToInt(firstMonth);
				let secondMonthInt= monthToInt(firstMonth);

				// get the years
				var startDate = new Date(yearStart, monthToInt(firstMonth), 1);
				var endDate = new Date(yearEnd, monthToInt(secondMonth) + 1, 0);

				var startDateString = startDate.getFullYear() + '-' + pad((startDate.getMonth() + 1), 2) + '-' + pad(startDate.getDate(), 2);
				var endDateString = endDate.getFullYear() + '-' + pad((endDate.getMonth() + 1), 2) + '-' + pad(endDate.getDate(), 2);

				document.querySelector('.show-result').textContent = startDateString + " to " + endDateString;
			} else {
				document.querySelector('.show-result').textContent = "____-__-__ to ____-__-__";
			}
			// Hide the popup after one second
			setTimeout(function() {
				var popup = document.getElementById("popup");
				popup.style.display = "none";
				// Temp Code, so that filter date functionality works only for cards
				let hdnGroup = $("#hdnDestinationGroup").val();
				let hdnDestination = $("#hdnDestinationTo").val();
				var destination = hdnGroup !== 'undefined' ? hdnGroup : hdnDestination;
				if(hdnGroup == "undefined" && hdnDestination != "undefined" && hdnDestination != "")
					$('#sortPriceCardDDL').trigger('change');
				else{
					currentPage = 1;
					// Get the selected value to the "From" dropdown
					var selectedFromAirport = $("#fromAirport").val();

					var selectedToirport = $("#toAirport").val();

					// Check if selectedFromAirport is not empty
					if (selectedFromAirport.length > 0 && selectedToirport.length == 0) {
						// Load data from "fromDDL" to "All Groups in toDDL"
						getCheapestPricesOnTheBasisOfFromSelectedDDLAndToDDLFixedValues();
					} 
					else if(selectedToirport.length > 0){
						getCheapestPricesOnTheBasisOfToSelectionChange()
					}
					else {
						getCheapestPricesOnTheBasisOfToDDLFixedValues();
					}
				}
				}, 1000);
				// Temp Code
        });

		function pad(num, size) {
			var s = num + "";
			while (s.length < size) s = "0" + s;
			return s;
		}
		// Function to convert month string to its index
        function monthToInt(month) {
            return {
                jan: 0,
                feb: 1,
                mar: 2,
                apr: 3,
                may: 4,
                jun: 5,
                jul: 6,
                aug: 7,
                sep: 8,
                oct: 9,
                nov: 10,
                dec: 11
            }[month];
        }
	//************JS FOR POPUP ENDS***************************
    });	

	function toggleInputBVisibility() {
            var radio1 = document.getElementById("isBetween");
            var radio2 = document.getElementById("greaterThanA");
            var radio3 = document.getElementById("greaterThanB");
            var inputB = document.getElementById("inputB");

            if (radio2.checked || radio3.checked) {
                inputB.style.display = "none";
            } else if (radio1.checked) {
                inputB.style.display = "block";
            }
        }
			function OpenSettingForm(){
				$('#submenu-item').slideToggle(100);
			}
    
            /**
    			$('#settingFrm').validate({
    				submitHandler: function(form){
    
    					$('#loading1').show(); 
    					$.post('../account-settings.php', $('#settingFrm').serialize() , function(responseData){
    
    						//alert(responseData);
    
    						// console.log(responseData);
    
    						// alert(responseData);
    						$('#loading1').hide(); 
    						if(responseData == 'exists'){
    							$('#errormsg').html("Email already exists.");
    							$('#errormsg').fadeIn(300);
    						}
    						else if(responseData == 'not verified'){
    							// window.location = 'confirm.php';
    							$('#successmsg').html("Details has been Updated. Now you have to again Verfiy your Email Address");
    							$('#successmsg').fadeIn(300);
    						}
    						else if(responseData == 'done'){
    							// window.location = 'confirm.php';
    							$('#successmsg').html("Details has been Updated.");
    							$('#successmsg').fadeIn(300);
    						}
    						else{
    							// 	window.location = 'index.php';
    							// window.location = 'search.php';
    							$('#errormsg').html(responseData);
    							$('#errormsg').fadeIn(300);
    						}
    						// else if(responseData == 'User Not Exists'){
    						// 	$('#errormsg').html(responseData);
    						// 	$('#errormsg').fadeIn(300);
    						// }
    						// else if(responseData == 'user'){
    						// 	window.location = 'index.php';
    						// }
    						// else if(responseData == 'welcome'){
    						// 	window.location = 'welcome.php';
    						// }
    						// else if(responseData == 'paid user'){
    						// 	window.location = 'complete.php';
    						// }
    					});
    
    				}
    			});
            */
		</script>
		
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

	</body>
</html>