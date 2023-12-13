<?php
// Use the PHPWord namespace
use PhpOffice\PhpWord\IOFactory;

function wordCounter($source){
    $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);

// Initialize the word count
    $wordCount = 0;

// Loop through the sections
    foreach ($phpWord->getSections() as $section) {
        // Loop through the elements
        foreach ($section->getElements() as $element) {
            // Check if the element is a text run
            if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                // Loop through the text objects
                foreach ($element->getElements() as $text) {
                    // Check if the text object is a text
                    if ($text instanceof \PhpOffice\PhpWord\Element\Text) {
                        // Get the text content
                        $textContent = $text->getText();
                        // Split the text by spaces and punctuation marks
                        $textWords = preg_split('/[\s\p{P}]+/u', $textContent, -1, PREG_SPLIT_NO_EMPTY);
                        // Add the number of words to the word count
                        $wordCount += count($textWords);
                    }
                }
            }
        }
    }

// Display the word count
    return $wordCount;
}
