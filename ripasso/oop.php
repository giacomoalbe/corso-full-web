<?php
// Assegnare una variabile
$question = "Questa è una stringa";

// Utilizzare la variabile
#echo $question . "<br>";

$question = $question . " molto bella";

// Riassegnare una variabile
$question = 10;

class Question {
  public static $count = 0;

  private $text = "";

  public $choices = [];

  public function setText($text) {
    $this->text = $text;

    return $this;
  }

  public function getText() {
    return $this->text;
  }

  public function addCount() {
    static::$count++;

    return $this;
  }

  public static function getCount() {
    return self::$count;
  }

  public function print() {
    echo "Text: ". $this->text . " Count: " . static::$count;
  }
}

$question = new Question();
$question2 = new Question();

$question->addCount();
$question2->addCount();

//echo "Count: " . Question::getCount() . "<br>";

$question->setText("Joe Biden");

echo "Question text: " . $question->getText() . "<br>";
echo "Question2 text: " . $question2->getText() . "<br>";

$question3 = new Question();

// Concatenazione "verbosa"
$question = $question->setText("ciaone");
$question = $question->addCount();
$question = $question->setText("biellone");
$question->print();


// Concatenazione "rapida"
$question
  ->setText("ciaone")
  ->setText("biellone")
  ->addCount()
  ->print();
?>
