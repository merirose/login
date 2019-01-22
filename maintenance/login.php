<style type="text/css">
*, *:before, *:after {
	box-sizing: border-box;
}
html {
	overflow-y: scroll;
}
.form {
	background-color: #fofofo;
	padding: 40px;
	max-width: 600px;
	margin: 40px auto;
	border-radius: 4px;
	box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
span {
	color: #1ab188;
	font-weight: bold;
}
label {
	position: absolute;
	-webkit-transform: translateY(6px);
			transform: translateY(6px);
	left: 13px;
	color: #000000;
	-webkit-transform: all 0.25s ease;
	transition: all 0.25s ease;
	-webkit-backface-visibility: hidden;
	pointer-events: none;
	font-size: 22px;
}
label .req {
	margin: 2px;
	color: rgba(237, 125, 49, 0.9);
}

label .active {
	-webkit-transform: translateY(50px);
		transform: translateY(50px);
	left: 2px;
	font-size: 14px;
}

label.active .req {
	opacity: 0;
}

label.highlight {
	color: #000000;
}

input, textarea {
	font-size: 22px;
	display: block;
	width: 100%;
	height: 100%;
	padding: 5px 10px;
	background: none;
	background-image: none;
	border: 1px solid;
	color: black;
	border-radius: 0;
	-webkit-transition: border-color .25s ease, box-shadow .25s ease;
	transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
	outline: 0;
	border-color: #fofofo;
}

textarea {
	border: 2px solid #a0b3b0;
	resize: vertical;
}

.field-wrap {
	position: relative;
	margin-bottom: 40px;
}

.top-row:after {
	content: "";
	display: table;
	clear: both;
}

.top-row > div {
	float: left;
	width: 48%;
	margin-right: 4%;
}

.top-row > div:last-child {
	margin: 0;
}

.button {
	border: 0;
	outline: none;
	border-radius: 0;
	padding: 15px 0;
	font-size: 2rem;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: .1em;
	background: rgba(68,114,196,1.0);
	color: #ffffff;
	-webkit-transition: all 0.5s ease;
	transition: all 0.5s ease;
	-webkit-appearance: none;
}

.button:hover, .button:focus {
	background: DodgerBlue;
}

.button-block {
	display: block;
	width: 100%;
}
</style>

<div class="form">
	<div id="login">
		<h2>Login</h2>
		<hr> <br>
		<form method="post" autocomplete="off">
			<div class="field-wrap">
				<label>Username <span class="req">*</span></label>
				<input type="text" name="user" required />
			</div>
			<div class="field-wrap">
				<label>Password <span class="req">*</span></label>
				<input type="password" name="pass" />
			</div>
		<button class="button button-block" name="login">Login</button>
		</form>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>