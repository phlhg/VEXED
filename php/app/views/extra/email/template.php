<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet" />
		<title><?=$view->v->subject?></title>
	</head>
	<body bgcolor="#282828" style="FONT-FAMILY: 'Oxygen', Arial ,sans-serif; margin: 0; padding: 0; width: 100% !important;">
		<style>
			@import url(https://fonts.googleapis.com/css?family=Oxygen:300,400,700);
			a { text-decoration: none; }
			a:visited { color: inherit !important; }
			.footer a { color: #fff; margin: 0 5px; text-decoration: underline; }
			.meta a { color: inherit; text-decoration: underline;}
			h1, h2, h3, h4, h5, h6 { margin: 8px 0; color: #009632; font-weight: bold; text-align: left; font-weight: bold !important; }
			h1 { font-size: 50px; line-height: 60px; }
			h2 { font-size: 40px; line-height: 50px; }
			hr { border: 0px; background-color: rgba(10,10,20,1); height: 2px; margin: 20px 0px 20px 0px; }
			.content a { color: #009632; font-weight: bold; text-decoration: underline; }
			p { padding: 10px 0px; }
			img { position: relative; }
			<!--[if mso]>
				<style type="text/css">
				body, table, td {font-family: Arial, Helvetica, sans-serif !important; font-family: 'Oxygen', sans-serif !important; font-weight: 400 !important;}
				</style>
			<![endif]-->
		</style>
		<table style="FONT-FAMILY: Arial, Helvetica ,sans-serif; font-family: 'Oxygen', sans-serif; width:100%;" border="0" cellpadding="0" cellspacing="0">
			<tr>
                <td>
					<!--[if (gte mso 9)|(IE)]>
						<table width="800" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
						<td>
					<![endif]-->
                    <table bgcolor="#1e1e1e" width="800" style="min-width: 500px; max-width: 1000px; width: 100%;" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td style="position: relative; display: block;" >
								<table bgcolor="#009632" style="width: 100%; z-index: 5;" height="60" align="center" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td style="padding: 10px 40px 0 40px" >
											<a href="http://<?=\Core\Config::get("application_domain")?>" ><img height="30" src="http://<?=\Core\Config::get("application_domain")?>/img/icons/logo_text.png"/></a>
										</td>
										<td style="padding: 0px 40px 0 40px; text-align: right;" >
											<a href="http://<?=\Core\Config::get("application_domain")?>/p/<?=strtolower($view->v->to_name)?>/" ><span style="font-weight: bold; color: #fff; vertical-align:top;line-height: 30px; margin-right: 10px;"><?=$view->v->to_name?></span><img height="30" style="border-radius: 50%;" src="http://antisocial.vs/php/files/img/profile/1.jpg"></a>
										</td>
									</tr>
								</table>
							</td>
                        </tr>
                        <tr>
                            <td>
                                <svg width="100%" height="40" viewbox="0,0 100,100" preserveAspectRatio="none" >
                                    <polygon points="0,0 100,0 0,100" style="fill: #009632;"/>
                                </svg>
                            </td>
                        </tr>
						<tr height="20"></tr>
						<tr class="content" >
							<td style="padding: 40px 40px; color: #fff">
								<?=$view->v->content?>
							</td>
						</tr>
						<tr height="20"></tr>
						<tr>
                            <td>
                                <svg width="100%" height="40" viewbox="0,0 100,100" preserveAspectRatio="none" >
                                    <polygon points="0,101 0,100 100,0 100,101" style="fill: #009632;"/>
                                </svg>
                            </td>
                        </tr>
						<tr height="100" style="background-color: #009632;" >
							<td>
								<table height="100" style="width: 100%;" align="center" cellpadding="0" cellspacing="0" border="0">
									<tr style="text-align: left; color: #fff;">
										<td  class="footer" style="padding: 20px 40px; ">
											<a title="Games" href="http://<?=\Core\Config::get("application_domain")?>/p/<?=strtolower($view->v->to_name)?>/">Account</a>
											<a title="Start" href="http://<?=\Core\Config::get("application_domain")?>/about/">Über</a>
											<a title="Games" href="http://<?=\Core\Config::get("application_domain")?>/conditions/">Nutzungsbedingungen</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
                    </table>
					<table style="width: 100%; max-width:800px;" class="meta" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td style="color: rgb(190,190,190); font-size: 12px; padding: 10px;text-align: center;" >
								Diese Email wurde an <a href="mailto:<?=$view->v->to_email?>"><?=$view->v->to_email?></a> gesendet.
								Falls dies nicht ihre E-Mail Adresse ist muss es sich um einen Fehler handeln.<br />
								Diese Email wurde automatisch von <a href="http://<?=\Core\Config::get("application_domain")?>"><?=\Core\Config::get("application_domain")?></a> gesendet.
							</td>
						</tr>
					</table>
					<!--[if (gte mso 9)|(IE)]>
						</td>
						</tr>
						</table>
					<![endif]-->
                </td>
            </tr>
        </table>
	</body>
</html>
