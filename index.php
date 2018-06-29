<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'mVzCVboyz+DDzOsST9W05EfPZfZ04nIgZSz2+rnMdOtg2x1kcEwqPYf/en4sJ6wyvMZmx7fmoKuytquyDruh+IWVjVCNIxBgmlrrEcd7OSbMgtoS11JuvSrJ+4XvtSLJ/yXfug78u/R6B8MmzwjjJAdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '6b47ba4115714239048f5cdc4def5372';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='/payment')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'BCA : 3451093663\nPULSA : 085959699712'
									)
							)
						);
				
	}
	if($pesan_datang=='/order')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'bubble',
  'styles' => 
  array (
    'footer' => 
    array (
      'separator' => true,
    ),
  ),
  'body' => 
  array (
    'type' => 'box',
    'layout' => 'vertical',
    'contents' => 
    array (
      0 => 
      array (
        'type' => 'text',
        'text' => 'ORDER MENU',
        'weight' => 'bold',
        'color' => '#1DB446',
        'size' => 'sm',
      ),
      1 => 
      array (
        'type' => 'text',
        'text' => 'KCML Team',
        'weight' => 'bold',
        'size' => 'xxl',
        'margin' => 'md',
      ),
      2 => 
      array (
        'type' => 'text',
        'text' => 'Selfbot & Bot Protect KCML-TEAMS',
        'size' => 'xs',
        'color' => '#aaaaaa',
        'wrap' => true,
      ),
      3 => 
      array (
        'type' => 'separator',
        'margin' => 'xxl',
      ),
      4 => 
      array (
        'type' => 'box',
        'layout' => 'vertical',
        'margin' => 'xxl',
        'spacing' => 'sm',
        'contents' => 
        array (
          0 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Bot Protect',
                'size' => 'sm',
                'color' => '#555555',
                'flex' => 0,
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => 'Rp. 50.000',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          1 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Selfbot Only',
                'size' => 'sm',
                'color' => '#555555',
                'flex' => 0,
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => 'Rp. 50.000',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          2 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'SB + /Assist',
                'size' => 'sm',
                'color' => '#555555',
                'flex' => 0,
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => 'Rp. 10.000',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          3 => 
          array (
            'type' => 'separator',
            'margin' => 'xxl',
          ),
          4 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'margin' => 'xxl',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Max order assist',
                'size' => 'sm',
                'color' => '#555555',
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => '5',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          5 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Waktu sewa',
                'size' => 'sm',
                'color' => '#555555',
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => '/Bulan',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          6 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Bot protect',
                'size' => 'sm',
                'color' => '#555555',
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => '5 Bot',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
          7 => 
          array (
            'type' => 'box',
            'layout' => 'horizontal',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'text' => 'Max Group Protect',
                'size' => 'sm',
                'color' => '#555555',
              ),
              1 => 
              array (
                'type' => 'text',
                'text' => '3',
                'size' => 'sm',
                'color' => '#111111',
                'align' => 'end',
              ),
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'separator',
        'margin' => 'xxl',
      ),
      6 => 
      array (
        'type' => 'box',
        'layout' => 'horizontal',
        'margin' => 'md',
        'contents' => 
        array (
          0 => 
          array (
            'type' => 'text',
            'text' => 'Contact Line ID',
            'size' => 'xs',
            'color' => '#aaaaaa',
            'flex' => 0,
          ),
          1 => 
          array (
            'type' => 'text',
            'text' => 'Jaytonmt',
            'color' => '#aaaaaa',
            'size' => 'xs',
            'align' => 'end',
          ),
        ),
      ),
    ),
  ),
)
							)
						);
				
	}

}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
