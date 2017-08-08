<?

$options        = array();
$dossier        = get_template_directory().'/functions';
$dossier        =  opendir($dossier);

while ($entry = readdir($dossier)) {
    if ($entry != "." && $entry != ".." && $entry[0] != "_") {
        array_push($options, $entry);
    }
}
closedir($dossier);

foreach ($options as $option) {
	if (file_exists(get_template_directory().'/functions/'.$option)) {
		include('functions/'.$option);
	}
}

?>
