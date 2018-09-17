<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

	<title>Responsive example - Assigned class control</title>
	<link rel="stylesheet" type="text/css" href="../../../../media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../css/dataTables.responsive.css">
	<link rel="stylesheet" type="text/css" href="../../../../examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../../../../examples/resources/demo.css">
	<style type="text/css" class="init">


	</style>
	<script type="text/javascript" language="javascript" src="../../../../media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../../../../media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="../../js/dataTables.responsive.js"></script>
	<script type="text/javascript" language="javascript" src="../../../../examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">



$(document).ready(function() {
	$('#example').DataTable( {
		"ajax": "../../../../examples/ajax/data/objects.txt",
		"columns": [
			{ "data": "name",       className: "all" },
			{ "data": "position",   className: "min-phone-l" },
			{ "data": "office",     className: "min-tablet" },
			{ "data": "age",        className: "min-tablet" },
			{ "data": "start_date", className: "never" },
			{ "data": "salary",     className: "desktop" },
			{ "data": "extn",       className: "none" }
		]
	} );
} );



	</script>
</head>

<body class="dt-example">
	<div class="container">
		<section>
			<h1>Responsive example <span>Assigned class control</span></h1>

			<div class="info">
				<p>This example exactly matches the functionality of the <a href="classes.xml">class control example</a> but in this case the classes are assigned using the
				<a href="//datatables.net/reference/option/columns.className"><code class="option" title=
				"DataTables initialisation option">columns.className<span>DT</span></code></a> option.</p>
			</div>

			<div id="breakpoint"></div>

			<table id="example" class="display responsive" width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
						<th>Extn.</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
						<th>Extn.</th>
					</tr>
				</tfoot>
			</table>

			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
			</ul>

			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">$(document).ready(function() {
	$('#example').DataTable( {
		&quot;ajax&quot;: &quot;../../../../examples/ajax/data/objects.txt&quot;,
		&quot;columns&quot;: [
			{ &quot;data&quot;: &quot;name&quot;,       className: &quot;all&quot; },
			{ &quot;data&quot;: &quot;position&quot;,   className: &quot;min-phone-l&quot; },
			{ &quot;data&quot;: &quot;office&quot;,     className: &quot;min-tablet&quot; },
			{ &quot;data&quot;: &quot;age&quot;,        className: &quot;min-tablet&quot; },
			{ &quot;data&quot;: &quot;start_date&quot;, className: &quot;never&quot; },
			{ &quot;data&quot;: &quot;salary&quot;,     className: &quot;desktop&quot; },
			{ &quot;data&quot;: &quot;extn&quot;,       className: &quot;none&quot; }
		]
	} );
} );</code>

					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>

					<ul>
						<li><a href="../../../../media/js/jquery.js">../../../../media/js/jquery.js</a></li>
						<li><a href="../../../../media/js/jquery.dataTables.js">../../../../media/js/jquery.dataTables.js</a></li>
						<li><a href="../../js/dataTables.responsive.js">../../js/dataTables.responsive.js</a></li>
					</ul>
				</div>

				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>

				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>

					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>

					<ul>
						<li><a href="../../../../media/css/jquery.dataTables.css">../../../../media/css/jquery.dataTables.css</a></li>
						<li><a href="../../css/dataTables.responsive.css">../../css/dataTables.responsive.css</a></li>
					</ul>
				</div>

				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>

				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
				</div>
			</div>
		</section>
	</div>

	<section>
		<div class="footer">
			<div class="gradient"></div>

			<div class="liner">
				<h2>Other examples</h2>

				<div class="toc">
					<div class="toc-group">
						<h3><a href="../initialisation/index.html">Basic initialisation</a></h3>
						<ul class="toc">
							<li><a href="../initialisation/className.html">Class name</a></li>
							<li><a href="../initialisation/option.html">Configuration option</a></li>
							<li><a href="../initialisation/new.html">`new` constructor</a></li>
							<li><a href="../initialisation/ajax.html">Ajax data</a></li>
							<li><a href="../initialisation/default.html">Default initialisation</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../styling/index.html">Styling</a></h3>
						<ul class="toc">
							<li><a href="../styling/bootstrap.html">Bootstrap styling</a></li>
							<li><a href="../styling/foundation.html">Foundation styling</a></li>
							<li><a href="../styling/scrolling.html">Vertical scrolling</a></li>
							<li><a href="../styling/compact.html">Compact styling</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="./index.html">Display control</a></h3>
						<ul class="toc active">
							<li><a href="./auto.html">Automatic column hiding</a></li>
							<li><a href="./classes.html">Class control</a></li>
							<li class="active"><a href="./init-classes.html">Assigned class control</a></li>
							<li><a href="./fixedHeader.html">With FixedHeader</a></li>
							<li><a href="./complexHeader.html">Complex headers (rowspan / colspan)</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../child-rows/index.html">Child rows</a></h3>
						<ul class="toc">
							<li><a href="../child-rows/disable-child-rows.html">Disable child rows</a></li>
							<li><a href="../child-rows/column-control.html">Column controlled child rows</a></li>
							<li><a href="../child-rows/right-column.html">Column control - right</a></li>
							<li><a href="../child-rows/whole-row-control.html">Whole row child row control</a></li>
							<li><a href="../child-rows/custom-renderer.html">Custom child row renderer</a></li>
						</ul>
					</div>
				</div>

				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extras">extras</a> and <a href="http://www.datatables.net/plug-ins">plug-ins</a>
					which extend the capabilities of DataTables.</p>

					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> &#169; 2007-2015<br>
					DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>