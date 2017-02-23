<? 

function renderFooter($data = array())
{
	extract($data);
	require('footer.php');
}

function renderHeader($data = array())
{
	extract($data);
	require('header.php');
}

?>
