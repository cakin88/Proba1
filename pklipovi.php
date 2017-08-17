<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>GHIDRAULIK</title>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	body{
		background:url(pozadina4.jpg);
		height:100%;
		width:100%;
		
		}

	#kontener1{ 			/*izgled za kontener*/
		margin-left: 30%;
		margin-top: 5%;
		align-content: center;
	}
	.menu{
		list-style: none; 	/*uklanja nabrajanje pored */
		

	}
	.menu li{ 				/*izgled liste menija*/
	display: block;
	width: 125px;
	height: 50px;
	float: left;
		background: rbackground: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
	line-height: 50px;
	text-align: center;
	font-family: 'Francois One', sans-serif;
	border-right:2px solid #000000;
		

	}
	.lista{
		border-bottom-right-radius:50px;
		border-top-right-radius:50px;
		}
	.lista1{
		border-bottom-left-radius:50px;
		border-top-left-radius:50px;
		}
	.menu li:hover{
		background:background: #ffffff; /* Old browsers */
	background: -moz-radial-gradient(center, ellipse cover,  #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
	background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
	background: -webkit-radial-gradient(center, ellipse cover,  #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
	background: -o-radial-gradient(center, ellipse cover,  #ffffff 0%,#e5e5e5 100%); /* Opera 12+ */
	background: -ms-radial-gradient(center, ellipse cover,  #ffffff 0%,#e5e5e5 100%); /* IE10+ */
	background: radial-gradient(ellipse at center,  #ffffff 0%,#e5e5e5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	}
	.pada {
		visibility:hidden;
		
		}
	.menu li:hover .pada {
		visibility:visible;
		
		}
	.menu li .padalista{
		border-bottom-left-radius:50px;
		border-top-left-radius:50px;
		}


	</style>

</head>
<body>
<div id="kontener1">
	<ul class="menu">
		<li class="lista1">PROIZVODI
        	<ul class="pada">
            <li class="padalista">DIZALICE</li>
            <li class="padalista">PALETARI</li>
            <li class="padalista">KLIPOVI</li>
            </ul>
        
        </li>  
		<li>ZALIHE
        	<ul class="pada">
            <li>GUMICE</li>
            <li>VENTILI</li>
            <li>OSIGURACI</li>
            
            </ul>
        </li>
		<li>ULAZ</li>
		<li class="lista">IZLAZ</li>
	</ul>





</div>


</body>
</html>