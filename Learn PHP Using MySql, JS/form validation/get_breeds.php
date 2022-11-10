<?php

/**The first line opens the breeds.xml file, places the contents into a property ($breed_
file), and then closes the breeds.xml file. */
$breed_file = simplexml_load_file("breeds.xml");
$xmlText = $breed_file->asXML();

print "<select name='dog_breed' id='dog_breed'>";
print "<option>Select a dog breed</option>";

foreach ($breed_file->children() as $name => $value) {
    print "<option value='$value'>$value</option>";
}
print "</select>";
