# Urly
A URL Cleaner for PHP

# Variables
<code>$host</code> is the domain (http://www.google.com)
<code>$path</code> is the path from the domain (/search?q=Hello+World)

#Setup
To get started, you can either view the examples within this repo or copy and paste the code below


<pre>
require '../urly.php';

$url = 'YOUR_URL_HERE';

$urly = new urly($url, true);
$result = $urly->run();
</pre>

When constructing Urly, you can set the following parameters 

<pre>new url([URL], [Hide Path?], [Host]</pre>

If the hide path parameter is set to true, when you run <code>http://example.com/search?hello+world</code> it will
return <code>http://www.example.com</code>.

#Relative URLs
You can put relative urls into Urly and receive a fully formed url, but you must also set the host so that it can be appended, to do this
simple construct Urly like the example below:

<pre>
$urly = new urly("/search?hello+world", false, "http://example.com");
//outputs http://example.com/search?hello+world
</pre>

#Cleaner URLs

If you set the host as <code>google.com</code>, Urly will return <code>http://google.com</code>.

#Return Params

If you want to get just the parameters from a URL, simply echo out the variable <code>params</code> like so:

<pre>
require '../urly.php';

$url = 'http://www.amazon.com/gp/product/B002FJZLJY?ref_=gbsl_tit_l-1_4822_895d0299&smid=ATVPDKIKX0DER';

$urly = new urly($url);
$result = $urly->run();

echo $urly->params;
//outputs /gp/product/B002FJZLJY?ref_=gbsl_tit_l-1_4822_895d0299&smid=ATVPDKIKX0DER
</pre>

