<?php
namespace ValueSuggest\Suggester\CreativeCommons;

use ValueSuggest\Suggester\SuggesterInterface;
use Laminas\Http\Client;

class CreativeCommonsSuggestAll implements SuggesterInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Return suggestions taken from RightsStatements.org.
     *
     * @see https://lov.linkeddata.es/dataset/lov/vocabs/cc
     * @param string $query
     * @param string $lang
     * @return array
     */
    public function getSuggestions($query, $lang = null)
    {
        return [
            [
                'value' => 'CC BY 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by/4.0/',
                    'info' => 'This license allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, so long as attribution is given to the creator. The license allows for commercial use.',
                ],
            ],
            [
                'value' => 'CC BY-SA 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by-sa/4.0/',
                    'info' => 'This license allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, so long as attribution is given to the creator. The license allows for commercial use. If you remix, adapt, or build upon the material, you must license the modified material under identical terms.',
                ],
            ],
            [
                'value' => 'CC BY-NC 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by-nc/4.0/',
                    'info' => 'This license allows reusers to distribute, remix, adapt, and build upon the material in any medium or format for noncommercial purposes only, and only so long as attribution is given to the creator. ',
                ],
            ],
            [
                'value' => 'CC BY-NC-SA 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by-nc-sa/4.0/',
                    'info' => 'This license allows reusers to distribute, remix, adapt, and build upon the material in any medium or format for noncommercial purposes only, and only so long as attribution is given to the creator. If you remix, adapt, or build upon the material, you must license the modified material under identical terms.',
                ],
            ],
            [
                'value' => 'CC BY-ND 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by-nd/4.0/',
                    'info' => 'This license allows reusers to copy and distribute the material in any medium or format in unadapted form only, and only so long as attribution is given to the creator. The license allows for commercial use. ',
                ],
            ],
            [
                'value' => 'CC BY-NC-ND 4.0',
                'data' => [
                    'uri' => 'https://creativecommons.org/licenses/by-nc-nd/4.0/',
                    'info' => 'This license allows reusers to copy and distribute the material in any medium or format in unadapted form only, for noncommercial purposes only, and only so long as attribution is given to the creator.',
                ],
            ],
            [
                'value' => 'CC0',
                'data' => [
                    'uri' => 'https://creativecommons.org/publicdomain/zero/1.0/',
                    'info' => 'CC0 (aka CC Zero) is a public dedication tool, which allows creators to give up their copyright and put their works into the worldwide public domain. CC0 allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, with no conditions.',
                ],
            ],
        ];
    }
}
