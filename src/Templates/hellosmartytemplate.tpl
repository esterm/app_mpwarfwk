<html>
  <head>
    <title>{$title}</title>
  </head>
  <body>
  	<h3>This method says hello to all the users in the URL using Smarty:</h3>
  	<h3>Hello all!</h3>
  	{foreach item=name from=$data}
	{$name},
	{/foreach}
  </body>
</html>


