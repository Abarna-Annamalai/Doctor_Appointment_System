if (isset($_POST['signin'])) {

        if(isset($_POST['p_radio'])) {
            $radio_values = $_POST['p_radio'];
            if ($radio_values == 'p_book') {
                $dbname = 'books'; //this is the name of the table
                return $dbname;

            }elseif ($radio_values == 'p_article') {
                $dbname = 'articles';
                return $dbname;


            }elseif ($radio_values == 'p_journal') {
                $dbname = 'rpm';
                return $dbname;

            }
        }else{
                echo 'unchecked';
    }
    }
