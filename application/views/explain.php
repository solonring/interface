<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP编程语法</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	p{ text-indent:2em; padding:0px; margin:0px; background: #D1E9E9; line-height: 30px;}
	div{ width: 60%;}
	body{ margin: 10px 0px 10px 30%}
</style>
</head>
<body>
<div>
	<h2>文件格式</h2>
	<p>文件应该使用 Unicode (UTF-8) 编码保存。同时不要使用 字节序标记(BOM) 。与 UTF-16 和 UTF-32 不同，UTF-8 编码的文件不需要指明字节序，而且 字节序标记(BOM) 在PHP中会产生预期之外的输出，阻止了应用程序设置它自己的头信息。应该使用Unix 格式的行结束符(LF)。</p>
</div>

<div>
	<h2>PHP 闭合标签</h2>
	<p>PHP闭合标签“?>”在PHP中对PHP的分析器是可选的。 但是，如果使用闭合标签，任何由开发者，用户，或者
FTP应用程序插入闭合标签后面的空格都有可能会引起多余的输出、php错误、之后的输出无法显示、空白页。因此，所
有的php文件应该省略这个php闭合标签，并插入一段注释来标明这是文件的底部并定位这个文件在这个应用的相对路径。这样有利于你确定这个文件已经结束而不是被删节的。</p>
</div>

<div>
	<h3>类和方法（函数）的命名规则</h3>
	<p>按照现系统原则，类名就是文件名（多个小写单词用下划线分隔，不要.php部分）</p>
</div>

<div>
	<h3>变量命名</h3>
	<p>变量的命名规则与方法的命名规则十分相似。就是说，变量名应该只包含小写字母，用下划线分隔，并且能适当地指明变量的用途和内容。那些短的、无意义的变量名应该只作为迭代器用在for()循环里。
	<br>
	如下的: <br/>
	for ($j = 0; $j < 10; $j++) <br/>
	$str <br/>
	$buffer <br/>
	$group_id <br/>
	$last_city </p>
</div>

<div>
	<h3>注释</h3>
	<p>通常，代码应该被详细地注释。这不仅仅有助于给缺乏经验的程序员描述代码的流程和意图，而且有助于给你
提供丰富的内容以让你在几个月后再看自己的代码时仍能很好的理解。 注释没有强制规定的格式，但是我们建议以下的形式。<br>
文档块(DocBlock) 式的注释要写在类和方法的声明前，这样它们就能被集成开发环境(IDE)捕获：
	<br>
	/**<br>
	* Super Class<br>
	*<br><br>
	* @package Package Name<br>
	* @subpackage Subpackage<br>
	* @category Category<br>
	* @author Author Name<br>
	* @link http://example.com
	*/
	</p>
</div>

<div>
	<h3>常量</h3>
	<p>常量命名除了要全部用大写外，其他的规则都和变量相同。
	<br>
	恰当的: <br>
	MY_CONSTANT <br>
	NEWLINE <br>
	SUPER_CLASS_VERSION <br>

	恰当的: if ($foo == TRUE) $bar = FALSE; function foo($bar = NULL)<br>
	恰当的: if ($foo OR $bar) if ($foo && $bar) // 推荐 if ( ! $foo) if ( ! is_array($foo)) 
	</p>
</div>

<div>
	<h3>文件中的空格</h3>
	<p>在PHP开始标记之前和结束标记之后都不能有空格。输出已经被缓存，所以文件中的空格会导致CodeIgniter在
输出自己的内容之前就开始了输出，这会使CodeIgniter出错且无法输出正确的header。在下面的例子中，使用鼠标选
中这些文本，你就能看到那些不应该有的空格。
	</p>
</div>

<div>
	<h3>代码缩进</h3>
	<p>各个缩进不一样，我们选择与原系统统一，基本的条件语句与函数第一个开始大括号与当前同行，结束大括号
另起一行。在代码中使用tab代替空格。这虽然看起来像是小事，但是使用tab代替空格有利于那些阅读你的代码的开发
者在他们各自所使用的应用程序中自定义缩进方式。此外还有一个好处是，使用这种方式保存的文件稍微紧凑一点。
	<br>如下与系统一至的:<br> 
	function foo($bar) {<br>
		// ... <br>
		return $bar;<br>
	} <br>
	foreach ($arr as $key => $val) {<br>
		// ... <br>
	} <br>
	if ($foo == $bar) {<br>
		// ... <br>
	} else {<br>
		// ... <br>
	}
	</p>
	</div>

<div>
	<h3>每行一条语句</h3>
	<p>切记不要在一行写多条语句，影响阅读。<br>
	如下: <br>
	$foo = 'this'; <br>
	$bar = 'that'; <br>
	$bat = str_replace($foo, $bar, $bag);
	</p> 
</div>

<div>
	<h3>字符串</h3>
	<p>一直使用单引号除非你需要解析变量，如果需要解析变量请使用大括号，如果字符串包含单引号的话你可以使
用双引号，这样就不用转义了。
	</p>
</div>

<div>
	<h3>函数的默认参数</h3>
	<p>可能的话，请提供函数的默认参数，这样可以阻止诸如错误的调用的 PHP 错误，同时可以获取公用的返回值
，节约很多行代码。 
	</p> 
</div>
  
</body>
</html>