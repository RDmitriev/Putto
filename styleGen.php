<?
	/*
		RD CSS/JS Framework + Normalize + Blank
		
		Powered by Руслан Enfo Дмитриев
		http://rdmitriev.ru/githab/RD
		https://github.com/RDmitriev/RD
	*/
	
	for($i=1; $i <= 20; $i++)
	{
		$textStyle = '
	/* color: #cccccc; */
	/* font-size: 14px; */
	/* text-transform: uppercase; */
	/* background: #132656; */
	/* padding: 10px; */
';

$boxStyle = '
	/* background: url(img/bg' . $i . '.jpg) top center no-repeat; */
	/* background-size:cover; */
';

		echo '.box-' . $i . '{' . $boxStyle . '}
';
		
		for($y=1; $y <= 20; $y++)
		{
			echo '.box-' . $i . ' .line-' . $y . '{' . $textStyle . '}
.box-' . $i . ' .line-' . $y . ' a{' . $textStyle . '}
.box-' . $i . ' .line-' . $y . ' span{' . $textStyle . '}
';
		}
		
		echo '

';
	}
?>