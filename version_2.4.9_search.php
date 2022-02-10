// ADD THIS AT LINE 143 - VideoStation/plugins/syno_themoviedb/search.php

        preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9]/', $input['title'], $output);

        if( strlen($output[0])==6 ){

                $id = $output[0];

        }
