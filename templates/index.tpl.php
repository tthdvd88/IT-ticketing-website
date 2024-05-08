<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<h1><?= $fejlec['cim'] ?></h1>
	</header>
    <div id="wrapper">
        <div id="menu">
                <ul>
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : $url ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
                    </div>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['owner'])) { ?><?= $lablec['owner']; ?><?php } ?>
    </footer>
</body>
</html>
