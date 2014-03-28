<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
  
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24573940-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
  
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  
  <meta name="description" content="" />

  
  <meta name="keywords" content="" />

  
  <meta name="author" content="Martin G&uuml;tlein / Original design: Andreas Viklund - http://andreasviklund.com/" />

  
  <link rel="stylesheet" type="text/css" href="andreas00.css" media="screen,projection" />
  <title>CheS-Mapper</title>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  
</head><body>
<div id="wrap">
<div id="header">
<h1>CheS-Mapper<br/></h1>
<p><strong>Chemical Space Mapping and Visualization in 3D</strong></p>
</div>
<div id="avmenu">
<h2 class="hide">Site menu:</h2>
<ul>
  <li><a href=".">Overview</a></li>
  <li><a href="../ches-mapper-wiki">Documentation&nbsp;&nbsp;<img src="iconExternalLink.gif" /img><br /></a></li>
  <li><a href="download.php">Download</a></li>
  <li><a href="https://github.com/mguetlein/ches-mapper">Source Code&nbsp;&nbsp;<img src="iconExternalLink.gif" /img><br />
    </a></li>
  <li><a href="acknowledgements.html">Acknowledgements</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
</div>
<div id="contentwide">

<h3>News<br />
</h3>
<p>
CheS-Mapper 2.0 is released, the <a href="http://opentox.informatik.uni-freiburg.de/ches-mapper-wiki/index.php?title=Version_2.0">new features</a> are introduced in <a href="http://www.youtube.com/watch?v=4qU0SWXkKUI">Video Tutorial 3</a>.
</p>
</h2>
<h2>Overview<br />
</h2>
<p>
CheS-Mapper (Chemical Space Mapper) is a 3D-viewer for chemical datasets with small compounds.
It has been published here: <a href="http://www.jcheminf.com/content/4/1/7">G&uuml;tlein, Karwath and Kramer (2012)</a>. To support CheS-Mapper, please cite this article.
<br>
The tool an be used to analyze the relationship between the structure of chemical compounds, their physico-chemical properties, and biological or toxic effects. CheS-Mapper embedds a dataset into 3D space, such that compounds that have similar feature values are close to each other. It can compute a range of descriptors and supports clustering and 3D alignment.
<br> 	
It is an open-source Java application, based on the Java libraries 
<a href="http://jmol.sourceforge.net">Jmol</a>, 
<a href="http://cdk.sourceforge.net">CDK</a>, 
<a href="http://www.cs.waikato.ac.nz/ml/weka">WEKA</a>, and utilizes 
<a href="http://openbabel.org">OpenBabel</a> and <a href="http://r-project.org">R</a>.
</p>

<h3>Run Online<br />
</h3>
<p>Click here to start the latest version of the CheS-Mapper with Java Webstart:
<br /> 
<a href="release/latest/ches-mapper.jnlp"><font color="#000099"><big>>>Run CheS-Mapper<<</big></font></a>
<small><b>
<?php
# to block warnings
function handleError($errno, $errstr, $errfile, $errline, array $errcontext)
{
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}
set_error_handler('handleError');
# read version string
$version_string = "";
try {
  $file = "release/latest/VERSION";
  $f = fopen($file, 'r');
  $time = date ("d M Y",filemtime($file));
  $version = trim(fread($f,filesize($file)));
  fclose($f);
  $version_string = "$version, last updated $time";
} catch (Exception $e) {}
# read count string
$count_string = "";
try {
  $file = "RUNCOUNT";
  $f = fopen($file, 'r');
  $count = trim(fread($f,filesize($file)));
  $count = preg_split( '/;/', $count );
  $count = $count{0};
  fclose($f);
  if ((int)$count<1 || strlen($count)>10){
    throw new Exception('count invalid');
  }
  $count_string = "started $count times";
  if (strlen($version_string)>0) {
    $version_string = "$version_string, ";
  }
} catch (Exception $e) {}
if (strlen($version_string)>0 || strlen($count_string)>0) {
  $string = " ( $version_string$count_string )";
} else {
  $string = "";
}
echo $string; 
?>
</b></small>
<br><small>(If the online version does not start, check the <a href="download.php">download</a> section for a standalone version.)</small> 
</p>

<h3>Video Tutorial<br />
</h3>
<p>
Tutorial 1 gives a brief introduction, Tutorial 3 shows SAR analysis and visual validation.
</p>
<p>
<iframe width="290" height="170" src="http://www.youtube.com/embed/HWALyzLcjF8" frameborder="0" allowfullscreen></iframe>
<iframe width="290" height="170" src="https://www.youtube.com/embed/4qU0SWXkKUI" frameborder="0" allowfullscreen></iframe>
</p>

</div>
<div id="footer">
<p><b>Copyright 2014 Martin G&uuml;tlein</b> | Homepage design by <a href="http://andreasviklund.com">Andreas Viklund</a>.</p>
<p align="right"><a href="http://opentox.org"><img src="OT_small.png" /img></a></p>
</div>
</div>

</body></html>