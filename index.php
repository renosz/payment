<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'cXYEoFM6ggX6zsaTx32yuzdtrfNZqfwwnnqiQJnI+qwgvDk0E28UFggsXfhMLginvMZmx7fmoKuytquyDruh+IWVjVCNIxBgmlrrEcd7OSbnaaKKUq2Bl5c7Je9vHFbNw79kyK9w6JRy1TaKzxQZ/QdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '6151f99ad59c481348ba9fa0cf54f126';//sesuaikan

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
									'hero' => 
									array (
										'type' => 'image',
										'url' => 'https://preview.ibb.co/ksutCJ/20180629_054911.jpg',
										'size' => 'full',
										'aspectRatio' => '20:13',
										'aspectMode' => 'cover',
										'action' => 
    										array (
											'type' => 'uri',
											'uri' => 'https://renodoank11.wixsite.com/kcml',
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
												'text' => 'Contact Team KCML',
												'weight' => 'bold',
												'size' => 'xl',
											),
											1 => 
											array (
												'type' => 'box',
												'layout' => 'baseline',
												'margin' => 'md',
												'contents' => 
												array (
													0 => 
													array (
														'type' => 'icon',
														'size' => 'sm',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													),
													1 => 
													array (
														'type' => 'icon',
														'size' => 'sm',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													),
													2 => 
													array (
														'type' => 'icon',
														'size' => 'sm',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													),
													3 => 
													array (
														'type' => 'icon',
														'size' => 'sm',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													),
													4 => 
													array (
														'type' => 'icon',
														'size' => 'sm',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png',
													),
													5 => 
													array (
														'type' => 'text',
														'text' => '4.0',
														'size' => 'sm',
														'color' => '#999999',
														'margin' => 'md',
														'flex' => 0,
													),
												),
											),
											2 => 
											array (
												'type' => 'box',
												'layout' => 'vertical',
												'margin' => 'lg',
												'spacing' => 'sm',
												'contents' => 
												array (
													0 => 
													array (
														'type' => 'box',
														'layout' => 'baseline',
														'spacing' => 'sm',
														'contents' => 
														array (
															0 => 
															array (
																'type' => 'text',
																'text' => 'Status',
																'color' => '#aaaaaa',
																'size' => 'sm',
																'flex' => 1,
															),
															1 => 
															array (
																'type' => 'text',
																'text' => 'Open','wrap' => true,
																'color' => '#666666',
																'size' => 'sm',
																'flex' => 5,
															),
														),
													),
													1 => 
													array (
														'type' => 'box',
														'layout' => 'baseline',
														'spacing' => 'sm',
														'contents' => 
														array (
															0 => 
															array (
																'type' => 'text',
																'text' => 'Opchat',
																'color' => '#aaaaaa',
																'size' => 'sm',
																'flex' => 1,
															),
															1 => 
															array (
																'type' => 'text',
																'text' => '07:00 - 21:00',
																'wrap' => true,
																'color' => '#666666',
																'size' => 'sm',
																'flex' => 5,
															),
														),
													),
												),
											),
										),
									),
									'footer' => 
									array (
										'type' => 'box',
										'layout' => 'vertical',
										'spacing' => 'sm',
										'contents' => 
										array (
											0 => 
											array (
												'type' => 'button',
												'style' => 'link',
												'height' => 'sm',
												'action' => 
												array (
													'type' => 'uri',
													'label' => 'Creator',
													'uri' => 'line.me/ti/p/RHml5-7V9w',
												),
											),
											1 => 
											array (
												'type' => 'button',
												'style' => 'link',
												'height' => 'sm',
												'action' => 
												array (
													'type' => 'uri',
													'label' => 'Admin',
													'uri' => 'line.me/ti/p/HvyII50xey',
												),
											),
											2 => 
											array (
												'type' => 'spacer',
												'size' => 'sm',
											),
										),
										'flex' => 0,
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
