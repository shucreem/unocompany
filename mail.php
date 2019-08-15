<!doctype html>

<?php 
	if(!$_POST){
	header('Location: /');
	}
	session_start();
	if(isset($_POST['question_01'],$_POST['question_02'],$_POST['question_03'],$_POST['question_04'],$_POST['question_05'],$_POST['question_06'],$_POST['question_07'],$_POST['question_08'],$_POST['f_name'],$_POST['l_name'],$_POST['f_name_kana'],$_POST['l_name_kana'],$_POST['age'],$_POST['job'],$_POST['zip'],$_POST['tel'],$_POST['email'],$_POST['email2'],$_POST['address'],$_POST['pref01'],$_POST['addr01'],$_POST['addr02'],$_POST['addr03'],$_POST['privacy'])){
	$_SESSION['question_01'] = $_POST['question_01'];
	$_SESSION['question_02'] = $_POST['question_02'];
	$_SESSION['question_03'] = $_POST['question_03'];
	$_SESSION['question_04'] = $_POST['question_04'];
	$_SESSION['question_05'] = $_POST['question_05'];
	$_SESSION['question_06'] = $_POST['question_06'];
	$_SESSION['question_07'] = $_POST['question_07'];
	$_SESSION['question_08'] = $_POST['question_08'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['l_name'] = $_POST['l_name'];
	$_SESSION['f_name_kana'] = $_POST['f_name_kana'];
	$_SESSION['l_name_kana'] = $_POST['l_name_kana'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['job'] = $_POST['job'];
	$_SESSION['zip'] = $_POST['zip'];
	$_SESSION['tel'] = $_POST['tel'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['email2'] = $_POST['email2'];
	$_SESSION['pref01'] = $_POST['pref01'];
	$_SESSION['addr01'] = $_POST['addr01'];
	$_SESSION['addr02'] = $_POST['addr02'];
	$_SESSION['addr03'] = $_POST['addr03'];
	$_SESSION['privacy'] = $_POST['privacy'];
	}
?>

<html>
<head prefix="og: http://ogp.me/ns# website: http://ogp.me/ns/website#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	
<title>抽選で商品券５万円分・競馬場ペアご招待などが当たる！｜2019ファン感謝企画プレゼントキャンペーン</title>
<meta property="og:title" content="2019ファン感謝企画プレゼントキャンペーン" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://unocompany.info/" />
<meta property="og:image" content="ogp.jpg" />
<meta property="og:site_name" content="2019ファン感謝企画プレゼントキャンペーン" />
<meta property="og:description" content="抽選で商品券５万円分・競馬場ペアご招待などが当たる！｜2019ファン感謝企画プレゼントキャンペーン" />

<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" type="image/png" href="images/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="images/icon-192x192.png">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" media="all" href="css/reset.css" />
<link rel="stylesheet" media="all" href="css/style.css?20190625" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>

<h1><i class="far fa-file-alt"></i> アンケート内容確認画面</h1>

<div class="form_conf">

	<section id="form" class="p-5">

	<?php
		$action = $_POST['action'];
		$question_01 = htmlspecialchars($_SESSION['question_01']);
		$question_02 = htmlspecialchars($_SESSION['question_02']);
		$question_03 = htmlspecialchars($_SESSION['question_03']);
		$question_04 = htmlspecialchars($_SESSION['question_04']);
		$question_05 = htmlspecialchars($_SESSION['question_05']);
		$question_06 = htmlspecialchars($_SESSION['question_06']);
		$question_07 = htmlspecialchars($_SESSION['question_07']);
		$question_08 = htmlspecialchars($_SESSION['question_08']);
		
		$question_06 = $_POST['question_06'];
				foreach ($question_06 as $value){
					$q_06 .=$value.",";
				};

		$f_name = htmlspecialchars($_SESSION['f_name']);
		$l_name = htmlspecialchars($_SESSION['l_name']);
		$f_name_kana = htmlspecialchars($_SESSION['f_name_kana']);
		$l_name_kana = htmlspecialchars($_SESSION['l_name_kana']);
		$age = htmlspecialchars($_SESSION['age']);
		$job = htmlspecialchars($_SESSION['job']);
		$zip = htmlspecialchars($_SESSION['zip']);
		$pref01 = htmlspecialchars($_SESSION['pref01']);
		$addr01 = htmlspecialchars($_SESSION['addr01']);
		$addr02 = htmlspecialchars($_SESSION['addr02']);
		$addr03 = htmlspecialchars($_SESSION['addr03']);
		$tel = htmlspecialchars($_SESSION['tel']);
		$email = htmlspecialchars($_SESSION['email']);
		$email2 = htmlspecialchars($_SESSION['email2']);
		$privacy = htmlspecialchars($_SESSION['privacy']);

		$to = 'shu@shucreem.com';
		$subject = '2019年ファン感謝企画プレゼントキャンペーン';
		$message = '[競馬歴はどれくらいですか？]'."\n".$question_01."\n\n";
		$message .= '[1レースあたりの馬券購入額はどれくらいですか？]'."\n".$question_02."\n\n";
		$message .= '[馬券はどこで購入しますか？]'."\n".$question_03."\n\n";
		$message .= '[現在利用中のメルマガなど有料サービスの契約期間はどれくらいですか？]'."\n".$question_04."\n\n";
		$message .= '[有料サービスを利用した理由を以下より選択してください。]'."\n".$question_05."\n\n";
		$message .= '[メルマガや有料サービス以外で競馬情報を利用したことはありますか？]'."\n".$q_06."\n\n";
		$message .= '[現在利用中のメルマガ、競馬情報はありますか？]'."\n".$question_07."\n\n";
		$message .= '[ご希望のプレゼントをお選びください]'."\n".$question_08."\n\n";
		$message .= '[姓]'."\n".$f_name."\n\n";
		$message .= '[名]'."\n".$l_name."\n\n";
		$message .= '[セイ]'."\n".$f_name_kana."\n\n";
		$message .= '[メイ]'."\n".$l_name_kana."\n\n";
		$message .= '[年齢]'."\n".$age."\n\n";
		$message .= '[職業]'."\n".$job."\n\n";
		$message .= '[郵便番号]'."\n".$zip."\n\n";
		$message .= '[都道府県]'."\n".$pref01."\n\n";
		$message .= '[市区町村]'."\n".$addr01."\n\n";
		$message .= '[番地]'."\n".$addr02."\n\n";
		$message .= '[建物名・部屋番号]'."\n".$addr03."\n\n";
		$message .= '[お電話番号]'."\n".$tel."\n\n";
		$message .= '[E-mail]'."\n".$email."\n\n";
		$message .= '[個人情報保護の方針について]'."\n".$privacy."\n\n\n";

		$header = 'From: '.$email."\r\n";
		$header .= 'Reply-To: '.$email."\r\n";

		$messageuser = sprintf("%s",$_SESSION['f_name']);
		$messageuser .= " 様\n\n";
		$messageuser .= "この度はアンケートにお答えいただき誠にありがとうございます。\n";
		$messageuser .= "下記の内容で回答を承りました。\n\n\n";
		$messageuser .= '[競馬歴はどれくらいですか？]'."\n".$question_01."\n\n";
		$messageuser .= '[1レースあたりの馬券購入額はどれくらいですか？]'."\n".$question_02."\n\n";
		$messageuser .= '[馬券はどこで購入しますか？]'."\n".$question_03."\n\n";
		$messageuser .= '[現在利用中のメルマガなど有料サービスの契約期間はどれくらいですか？]'."\n".$question_04."\n\n";
		$messageuser .= '[有料サービスを利用した理由を以下より選択してください。]'."\n".$question_05."\n\n";
		$messageuser .= '[メルマガや有料サービス、競馬情報を利用したことはありますか？]'."\n".$q_06."\n\n";
		$messageuser .= '[現在利用中のメルマガ、競馬情報はありますか？]'."\n".$question_07."\n\n";
		$messageuser .= '[ご希望のプレゼントをお選びください]'."\n".$question_08."\n\n\n";

		$messageuser .= '[姓]'."\n".$f_name."\n\n";
		$messageuser .= '[名]'."\n".$l_name."\n\n";
		$messageuser .= '[セイ]'."\n".$f_name_kana."\n\n";
		$messageuser .= '[メイ]'."\n".$l_name_kana."\n\n";
		$messageuser .= '[年齢]'."\n".$age."\n\n";
		$messageuser .= '[職業]'."\n".$job."\n\n";
		$messageuser .= '[郵便番号]'."\n".$zip."\n\n";
		$messageuser .= '[都道府県]'."\n".$pref01."\n\n";
		$messageuser .= '[市区町村]'."\n".$addr01."\n\n";
		$messageuser .= '[番地]'."\n".$addr02."\n\n";
		$messageuser .= '[建物名・部屋番号]'."\n".$addr03."\n\n";
		$messageuser .= '[お電話番号]'."\n".$tel."\n\n";
		$messageuser .= '[E-mail]'."\n".$email."\n\n";
		$messageuser .= '[個人情報保護の方針について]'."\n".$privacy."\n\n\n";

		if($action == "post"){
			echo '<div class="form_wrap">';
			echo '<form id="form" action="mail.php" method="post">';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q1.png 1x,images/Q1@2x.png 2x" alt="Q1"></figure>
		  		<h3>競馬歴はどれくらいですか？</h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_01'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q2.png 1x,images/Q2@2x.png 2x" alt="Q2"></figure>
		  		<h3>1レースあたりの馬券購入額はどれくらいですか？</h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_02'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q3.png 1x,images/Q3@2x.png 2x" alt="Q3"></figure>
		  		<h3>馬券購入方法を以下から選択してください。</h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_03'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q4.png 1x,images/Q4@2x.png 2x" alt="Q4"></figure>
		  		<h3>「ブログ名」を含む有料サービスのご利用期間はどれくらいですか？<span>＊</span></h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_04'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q5.png 1x,images/Q5@2x.png 2x" alt="Q5"></figure>
		  		<h3>有料サービスを利用した理由を以下より選択してください。<span>＊</span></h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_05'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q6.png 1x,images/Q6@2x.png 2x" alt="Q6"></figure>
		  		<h3>「ブログ名」を除く、メルマガや有料サービス、競馬情報を利用したことはありますか？<span>＊複数回答可</span></h3>
		  	</div>';
			echo '<div class="input_area">';
				$question_06=$_POST['question_06'];
				foreach ($question_06 as $value){
					$q_06 .=$value.",";
				}
			echo $q_06;
			// echo $_POST['question_06'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q7.png 1x,images/Q7@2x.png 2x" alt="Q7"></figure>
		  		<h3>現在「ブログ名」以外で利用中のメルマガ、競馬情報はありますか？</h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_07'];
			echo '<!--input_area--></div>';

			echo '<div class="Q_title">
		  		<figure><img srcset="images/Q8.png 1x,images/Q8@2x.png 2x" alt="Q8"></figure>
		  		<h3>ご希望のプレゼントをお選びください</h3>
		  	</div>';
			echo '<div class="input_area">';
			echo $_POST['question_08'];
			echo '<!--input_area--></div>';

			echo '<h2 class="title_input">お客様の情報</h2>';
			echo '<p class="form_title">ご依頼者名(お名前)<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['f_name'],$_POST['l_name'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">ご依頼者名(フリガナ)<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['f_name_kana'],$_POST['l_name_kana'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">年齢<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['age'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">職業<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['job'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">郵便番号<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['zip'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">ご住所<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['pref01'];
			echo $_POST['addr01'];
			echo $_POST['addr02'];
			echo $_POST['addr03'];

			echo '<!--input_area--></div>';

			echo '<p class="form_title">お電話番号<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['tel'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">メールアドレス<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['email'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">メールアドレス(確認用)<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['email2'];
			echo '<!--input_area--></div>';

			echo '<p class="form_title">個人情報保護の方針について<span>※</span></p>';
			echo '<div class="input_area">';
			echo $_POST['privacy'];
			echo '<!--input_area--></div>';			

			echo '<div class="form_btn">';
			echo '<p class="input_fin">入力内容が正しければ送信してください。</p>';
			echo '<button type="submit" id="sdbtn" name="action" value="send" class="btn btn-primary btn-lg btn-block">送　信</button>';
			echo '<button type="button" id="bbtn"onclick="history.go(-1)" class="btn btn-secondary btn-lg btn-block">入力フォームに戻る</button>';
			echo '</div>';
			echo '</form>';
			echo '<!--tb-cell--></div>';
		}elseif($action == "send"){
		$status = mb_send_mail($to, $subject, $message, $header);
		$status = mb_send_mail($_SESSION['email'], "アンケートへのご協力ありがとうございます。", $messageuser, $header);

		if ($status) {
		echo '<div class="form_btn">';
		echo '<p class="msg">アンケートへのご協力ありがとうございます。<br>アンケート内容は正常に送信されました。</p>';
		echo '<button type="button" id="finbtn" onclick="history.go(-2)" class="btn btn-primary btn-lg btn-block">入力フォームに戻る</button>';
		echo '</div>';
		} else {
		echo '<div class="form_btn">';
		echo '<p class="msg">アンケート内容の送信に失敗しました。</p>';
		echo '<button type="button" id="finbtn" onclick="history.go(-2)" class="btn btn-secondary btn-lg btn-block">入力フォームに戻る</button>';
		echo '</div>';
		}
		$_SESSION = array();
		session_destroy();
		}
	?>
			</div>
	</section>

</div><!--form_conf-->

<div class="grass"></div>
	<footer>
		<div class="footer_area_wrap">
			<div class="footer_area">
				<h4 class="footer_title">会社概要</h4>
				<dl>
					<dt>社名</dt>
					<dd>株式会社 uNo</dd>
					<dt>住所</dt>
					<dd>〒160-0023 東京都新宿区西新宿3-7-26-602</dd>
				</dl>
			</div>

			<div class="footer_area">
				<h4 class="footer_title">個人情報お問い合わせ窓口</h4>
				<dl>
					<dt>受付時間</dt>
					<dd>11:00〜18:00（土日・祝祭日を除く）</dd>
					<dt>E-mail</dt>
					<dd>info@unocompany.info</dd>
				</dl>
			</div>
		</div>

		<p class="copyright">&copy;Copyright 株式会社 uNo All Rights Reserved.</p>
	</footer>

</body>