<?php
  namespace Hexlet\Phpunit\Tests;
  
  use PHPUnit\Framework\TestCase;
  use function Hexlet\Phpunit\Utils\reverseString;

// Класс UtilsTest наследует класс TestCase
// Имя класса совпадает с именем файла
  class UtilsTest extends TestCase
  {
    // Метод (функция), определенный внутри класса,
    // Должен начинаться со слова test
    // Ключевое слово public нужно, чтобы PHPUnit мог вызвать этот тест снаружи
    public function testReverse(): void
    {
      // Сначала идет ожидаемое значение (expected)
      // И только потом актуальное (actual)
      $this->assertEquals('', reverseString(''));
      $this->assertEquals('olleh', reverseString('hello'));
    }
    
    public function testExtractLinks()
    {
      // HTML находится в файле withLinks.html в директории fixtures
      // При чтении текстовых файлов, в конце может добавляться пустая строка
      // Она удаляется с помощью метода `trim`, если нужно
      // __DIR__ – директория, в которой находится данный файл с тестами
      $html = file_get_contents(__DIR__ . "/../tests/fixtures/text.html");
      // Теперь с HTML удобно работать и он не загромождает тесты.
      $links = reverseString($html);
      $this->assertEquals('>lmth epytcod!<', $links);
    }
  }
  