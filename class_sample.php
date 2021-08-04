<?php
class Programmer {

    /** @var array  */
    private $availableLanguages = [];

    /** @var string */
    private $bestLanguage;

    /**
     * Constructor
     * @throws Exception
     */
    public function __construct(array $availableLanguages, string $bestLanguage)
    {
        if (!in_array($bestLanguage, $availableLanguages)) {
            throw new Exception("Best language must be exist in available languages.");
        }
        $this->availableLanguages = $availableLanguages;
        $this->bestLanguage = $bestLanguage;
    }

    public function sayAvailableLanguages(): string
    {
        return "I can use " . implode("," , $this->availableLanguages);
    }

    public function appealBestLanguage(): string
    {
        return "My best programming language is " . $this->bestLanguage;
    }
}

$languages = ["PHP", "Java", "C#"];
$bestLanguage = "Ruby";

try {
    $programmer = new Programmer($languages, $bestLanguage);
    echo $programmer->sayAvailableLanguages() . "\n";
    echo $programmer->appealBestLanguage() . "\n";
} catch (Exception $a) {
    echo $a->getMessage();
}
