<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 27/02/19
 * Time: 15:08
 */

namespace ApiResponse\Encoding\Encodings;


class Csv
{
    public static function create(array $data)
    {
        $fh = @fopen('php://output', 'w');
        $headerDisplayed = false;

        foreach ($data as $file) {
            // Add a header row if it hasn't been added yet
            if (!$headerDisplayed) {
                // Use the keys from $data as the titles
                fputcsv($fh, array_keys($file));
                $headerDisplayed = true;
            }
            // Put the data into the stream
            fputcsv($fh, $file);
        }

        fclose($fh);
        exit;
    }
}