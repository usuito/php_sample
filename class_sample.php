<?php
class Programmer {

    /** @var array  */
    private $availableLanguages = [];

    /** @var string */
    private $bestLanguage;

    public function __construct(array $availableLanguages, string $bestLanguage)
    {
        if (!in_array($bestLanguage, $availableLanguages)) {
            throw new Exception("Best language must be exist in available languages.");
        }
        $this->availableLanguages = $availableLanguages;
        $this->bestLanguage = $bestLanguage;
    }

    public function getAvailableLanguages(): string
    {
        return "I can use " . implode("," , $this->availableLanguages);
    }

    public function getBestLanguage(): string
    {
        return "My best programming language is " . $this->bestLanguage;
    }
}

$languages = ["PHP", "Java", "C#"];
$bestLanguage = "Java";

try {
    $programmer = new Programmer($languages, $bestLanguage);
    echo $programmer->getAvailableLanguages() . "\n";
    echo $programmer->getBestLanguage() . "\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
