<?php declare(strict_types = 1);
namespace Tvaliasek\Search;

use Tvaliasek\Search\CzechStemmer;
use TeamTNT\TNTSearch\Stemmer\Stemmer;

class TNTCzechStemmer extends CzechStemmer implements Stemmer {

    public static function stem($word) 
    {
        return self::stemmLight($word);
    }
}