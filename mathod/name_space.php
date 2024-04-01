<?php
namespace MyNamespaceName;
function hello() 
	{
		echo 'Hello I am Running from a namespace!';
	}

// Resolves to MyNamespaceName\hello
hello();

// Explicitly resolves to MyNamespaceName\hello
namespace\hello();




// Namespace Alias

namespace mynamespace;
function sayhello(){
   echo "Hello from mynamespace
";
}
sayhello();
namespace mynewspace;
function sayhello(){
   echo "Hello from my new space
";
}
sayhello();
use \mynewspace\sayhello as hello;
