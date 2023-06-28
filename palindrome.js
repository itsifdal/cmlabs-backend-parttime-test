function isPalindrome(word) {
    // Original word
    const original = word.toLowerCase().replace(/[^a-z0-9]/g, '');
  
    // Reverse the original word
    const reversed = original.split('').reverse().join('');
  
    // Check if same
    return original === reversed;
  }
  
  // Test cases
  const words = [
    'SAIPPUAKIVIKAUPPIAS',
    'Aibohphobia',
    'Anna',
    'Civic',
    'My gym',
    'No lemon, no melon'
  ];
  
  words.forEach(word => {
    console.log(`${word} is a palindrome: ${isPalindrome(word)}`);
  });
  