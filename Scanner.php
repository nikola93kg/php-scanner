<?php 

class Scanner {

    public function directory($dir) {
        $this->directory_children($dir);
    }
    public function directory_children($dir) {
        $cleanPath = realpath($dir) . DIRECTORY_SEPARATOR; //apsolutna putanja do direktorijuma, dir separator je za onu kosu crtu da ne bih dodavao dole
        $scanDir = scandir($cleanPath); //read directory content

        echo "<ul>";
        foreach ($scanDir as $file) {
            // skip . or ..
            if ($file == "." || $file == "..") {
                continue;
            }

            $dir_url = str_replace('\\', '/', $cleanPath); //ovde vrsim zamenu ovih kosih crta da bi mogao url da funkcionise
            $dir_url = str_replace($_SERVER["DOCUMENT_ROOT"], '', $dir_url); //posto je potrebno da se apsolutna putanja zameni kako bi browser mogao da je procita, koristim ovaj serverski root

            echo "<li><a href='". $dir_url . $file ."' target='_blank'>";
                echo $file;
                if (is_dir($cleanPath . $file) && is_readable($cleanPath . $file)) { //check if file is dir, then read inside content
                    $this->directory_children($cleanPath . $file); //rekurzija je kada funkcija koja poziva samu sebe
                }
            echo "</li></a>";

        }
        echo "</ul>";
    }
}


?>