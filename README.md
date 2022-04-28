sites api 
    https://www.cbr.ru/scripts/XML_daily.asp
    
    http://www.cbr.ru/development/sxml/
    
    
    $urlApi =  'https://www.cbr.ru/scripts/XML_daily.asp';
    
    $string = <<<XML
    <?xml version='1.0'?>
    <document>
    <ValCurs Date="03.03.2022" name="Foreign Currency Market">
        <Valute ID="R01010">
            <NumCode>036</NumCode>
            <CharCode>AUD</CharCode>
            <Nominal>1</Nominal>
            <Name>Австралийский доллар</Name>
            <Value>74,8863</Value>
        </Valute>
        <Valute ID="R01020A">
            <NumCode>944</NumCode>
            <CharCode>AZN</CharCode>
            <Nominal>1</Nominal>
            <Name>Азербайджанский манат</Name>
            <Value>60,7703</Value>
        </Valute>
        <Valute ID="R01035">
            <NumCode>826</NumCode>
            <CharCode>GBP</CharCode>
            <Nominal>1</Nominal>
            <Name>Фунт стерлингов Соединенного королевства</Name>
            <Value>137,2898</Value>
        </Valute>
        <Valute ID="R01060">
            <NumCode>051</NumCode>
            <CharCode>AMD</CharCode>
            <Nominal>100</Nominal>
            <Name>Армянских драмов</Name>
            <Value>21,1143</Value>
        </Valute>
        <Valute ID="R01090B">
            <NumCode>933</NumCode>
            <CharCode>BYN</CharCode>
            <Nominal>1</Nominal>
            <Name>Белорусский рубль</Name>
            <Value>35,1126</Value>
        </Valute>
        <Valute ID="R01100">
            <NumCode>975</NumCode>
            <CharCode>BGN</CharCode>
            <Nominal>1</Nominal>
            <Name>Болгарский лев</Name>
            <Value>58,5742</Value>
        </Valute>
        <Valute ID="R01115">
            <NumCode>986</NumCode>
            <CharCode>BRL</CharCode>
            <Nominal>1</Nominal>
            <Name>Бразильский реал</Name>
            <Value>20,0075</Value>
        </Valute>
        <Valute ID="R01135">
            <NumCode>348</NumCode>
            <CharCode>HUF</CharCode>
            <Nominal>100</Nominal>
            <Name>Венгерских форинтов</Name>
            <Value>30,2051</Value>
        </Valute>
        <Valute ID="R01200">
            <NumCode>344</NumCode>
            <CharCode>HKD</CharCode>
            <Nominal>1</Nominal>
            <Name>Гонконгский доллар</Name>
            <Value>13,2101</Value>
        </Valute>
        <Valute ID="R01215">
            <NumCode>208</NumCode>
            <CharCode>DKK</CharCode>
            <Nominal>1</Nominal>
            <Name>Датская крона</Name>
            <Value>15,4024</Value>
        </Valute>
        <Valute ID="R01235">
            <NumCode>840</NumCode>
            <CharCode>USD</CharCode>
            <Nominal>1</Nominal>
            <Name>Доллар США</Name>
            <Value>103,2487</Value>
        </Valute>
        <Valute ID="R01239">
            <NumCode>978</NumCode>
            <CharCode>EUR</CharCode>
            <Nominal>1</Nominal>
            <Name>Евро</Name>
            <Value>114,5544</Value>
        </Valute>
        <Valute ID="R01270">
            <NumCode>356</NumCode>
            <CharCode>INR</CharCode>
            <Nominal>10</Nominal>
            <Name>Индийских рупий</Name>
            <Value>13,6331</Value>
        </Valute>
        <Valute ID="R01335">
            <NumCode>398</NumCode>
            <CharCode>KZT</CharCode>
            <Nominal>100</Nominal>
            <Name>Казахстанских тенге</Name>
            <Value>20,9806</Value>
        </Valute>
        <Valute ID="R01350">
            <NumCode>124</NumCode>
            <CharCode>CAD</CharCode>
            <Nominal>1</Nominal>
            <Name>Канадский доллар</Name>
            <Value>81,2087</Value>
        </Valute>
        <Valute ID="R01370">
            <NumCode>417</NumCode>
            <CharCode>KGS</CharCode>
            <Nominal>10</Nominal>
            <Name>Киргизских сомов</Name>
            <Value>10,8736</Value>
        </Valute>
        <Valute ID="R01375">
            <NumCode>156</NumCode>
            <CharCode>CNY</CharCode>
            <Nominal>1</Nominal>
            <Name>Китайский юань</Name>
            <Value>16,3599</Value>
        </Valute>
        <Valute ID="R01500">
            <NumCode>498</NumCode>
            <CharCode>MDL</CharCode>
            <Nominal>10</Nominal>
            <Name>Молдавских леев</Name>
            <Value>56,1134</Value>
        </Valute>
        <Valute ID="R01535">
            <NumCode>578</NumCode>
            <CharCode>NOK</CharCode>
            <Nominal>1</Nominal>
            <Name>Норвежская крона</Name>
            <Value>11,5856</Value>
        </Valute>
        <Valute ID="R01565">
            <NumCode>985</NumCode>
            <CharCode>PLN</CharCode>
            <Nominal>1</Nominal>
            <Name>Польский злотый</Name>
            <Value>23,9002</Value>
        </Valute>
        <Valute ID="R01585F">
            <NumCode>946</NumCode>
            <CharCode>RON</CharCode>
            <Nominal>1</Nominal>
            <Name>Румынский лей</Name>
            <Value>23,1530</Value>
        </Valute>
        <Valute ID="R01589">
            <NumCode>960</NumCode>
            <CharCode>XDR</CharCode>
            <Nominal>1</Nominal>
            <Name>СДР (специальные права заимствования)</Name>
            <Value>144,0051</Value>
        </Valute>
        <Valute ID="R01625">
            <NumCode>702</NumCode>
            <CharCode>SGD</CharCode>
            <Nominal>1</Nominal>
            <Name>Сингапурский доллар</Name>
            <Value>75,9852</Value>
        </Valute>
        <Valute ID="R01670">
            <NumCode>972</NumCode>
            <CharCode>TJS</CharCode>
            <Nominal>10</Nominal>
            <Name>Таджикских сомони</Name>
            <Value>91,3705</Value>
        </Valute>
        <Valute ID="R01700J">
            <NumCode>949</NumCode>
            <CharCode>TRY</CharCode>
            <Nominal>10</Nominal>
            <Name>Турецких лир</Name>
            <Value>73,6145</Value>
        </Valute>
        <Valute ID="R01710A">
            <NumCode>934</NumCode>
            <CharCode>TMT</CharCode>
            <Nominal>1</Nominal>
            <Name>Новый туркменский манат</Name>
            <Value>29,5418</Value>
        </Valute>
        <Valute ID="R01717">
            <NumCode>860</NumCode>
            <CharCode>UZS</CharCode>
            <Nominal>10000</Nominal>
            <Name>Узбекских сумов</Name>
            <Value>94,9640</Value>
        </Valute>
        <Valute ID="R01720">
            <NumCode>980</NumCode>
            <CharCode>UAH</CharCode>
            <Nominal>10</Nominal>
            <Name>Украинских гривен</Name>
            <Value>34,3590</Value>
        </Valute>
        <Valute ID="R01760">
            <NumCode>203</NumCode>
            <CharCode>CZK</CharCode>
            <Nominal>10</Nominal>
            <Name>Чешских крон</Name>
            <Value>44,9386</Value>
        </Valute>
        <Valute ID="R01770">
            <NumCode>752</NumCode>
            <CharCode>SEK</CharCode>
            <Nominal>1</Nominal>
            <Name>Шведская крона</Name>
            <Value>10,6411</Value>
        </Valute>
        <Valute ID="R01775">
            <NumCode>756</NumCode>
            <CharCode>CHF</CharCode>
            <Nominal>1</Nominal>
            <Name>Швейцарский франк</Name>
            <Value>112,3612</Value>
        </Valute>
        <Valute ID="R01810">
            <NumCode>710</NumCode>
            <CharCode>ZAR</CharCode>
            <Nominal>10</Nominal>
            <Name>Южноафриканских рэндов</Name>
            <Value>66,8043</Value>
        </Valute>
        <Valute ID="R01815">
            <NumCode>410</NumCode>
            <CharCode>KRW</CharCode>
            <Nominal>1000</Nominal>
            <Name>Вон Республики Корея</Name>
            <Value>85,6186</Value>
        </Valute>
        <Valute ID="R01820">
            <NumCode>392</NumCode>
            <CharCode>JPY</CharCode>
            <Nominal>100</Nominal>
            <Name>Японских иен</Name>
            <Value>89,6062</Value>
        </Valute>
    </ValCurs>
    </document>
    XML;
    
    
    // $xml = simplexml_load_string($urlApi);
    
    // $xmlObject = new SimpleXMLElement($urlApi);
    
    print_r(simplexml_load_file($urlApi));
    // print_r(file_get_contents($urlApi));
