<?php

function isPalindrome($word) {
  // Original word
  $cleanedWord = strtolower(preg_replace("/[^a-z0-9]/", "", $word));

  // Reverse the original word
  $reversedWord = strrev($cleanedWord);

  // Check if same
  return $cleanedWord === $reversedWord;
}

// Test cases
$words = array(
  'SAIPPUAKIVIKAUPPIAS',
  'Aibohphobia',
  'Anna',
  'Civic',
  'Multiple Words',
  'My gym',
  'No lemon, no melon'
);

foreach ($words as $word) {
  echo $word . " is a palindrome: " . (isPalindrome($word) ? "true" : "false") . "\n";
}

?>
