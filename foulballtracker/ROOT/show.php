<?php
/**
 * Exemple d'utilisation de la classe HeatmapFromDatabase
 * Use example of HeatmapFromDatabase class
 * 
 * Table utilisée pour ce test / Used table for this test:

CREATE TABLE `CLICKS` (
  `CLICK_X` smallint(5) unsigned NOT NULL,
  `CLICK_Y` smallint(5) unsigned NOT NULL,
  KEY `CLICK_Y` (`CLICK_Y`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `CLICKS` (`CLICK_X`, `CLICK_Y`) VALUES (10, 10),(20, 20),(30, 30),(40, 40),(50, 50),(60, 60),(70, 70),(80, 80),(90, 90),(100, 100),(110, 110),(120, 120),(130, 130),(140, 140),(150, 150),(160, 160),(170, 170),(180, 180),(190, 190);

**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ClickHeat | Examples</title>
</head>
<body>
<?php
/**
 *exit('Enlevez cette ligne pour que ce fichier marche/Remove this line to make this file work');
**/
include '/home/mikeconlow/foulballtracker.com/clickheat/classes/Heatmap.class.php';
include '/home/mikeconlow/foulballtracker.com/clickheat/classes/HeatmapFromDatabase.class.php';
include 'mlb_data.php';
$heatmap = new HeatmapFromDatabase();
/**
 * Requête (CLICK_Y se doit d'avoir un index pour de bonnes performances, voir EXPLAIN dans le manuel MySQL)
 * The query (CLICK_Y should have an index for good performances, see EXPLAIN in MySQL manual)
**/

$heatmap->host = 'ballparksdb.foulballtracker.com';
$heatmap->query = 'SELECT test, test2 FROM clicks where ballpark_id = ' . $ballpark_id;
$heatmap->maxQuery = 'SELECT MAX(test2) FROM clicks where ballpark_id = '. $ballpark_id;
$heatmap->database = 'ballparks2';
$heatmap->user = 'mikeconlow';
$heatmap->password = 'nika11';
/** Fichiers temporaires / Temporary files */
$heatmap->cache = '.';
/** Fichiers générés / Generated files */
$heatmap->path = '.';
/** Fichier final / Final file */
$heatmap->file = 'resultfromdb-%d.png';
/**
 * On force la hauteur finale (attention à la consommation mémoire dans ce cas !)
 * Forcing final height (take care of the memory consumption in such case!)
**/
$images = $heatmap->generate($xval[$ballpark_id], $yval[$ballpark_id] );
if ($images === false)
{
	echo 'error: '.$heatmap->error;
}
else
{

	echo '<div style="position: relative;"><img src="/images/park_'.$abbreviation[$ballpark_id].'.'.$image_type[$ballpark_id].'" style="position: absolute; z-index: 999;" />';
	for ($i = 0; $i < $images['count']; $i++)
	{
		echo '<img src="', $images['filenames'][$i], '" width="', $images['width'], '" height="', $images['height'], '" alt="" style="position:absolute; z-index:1000; opacity:.9;" /> Image ', $i, '<br />';
	}
	echo '</div>';
	echo '</p>';
}
?>
</body>
</html>
