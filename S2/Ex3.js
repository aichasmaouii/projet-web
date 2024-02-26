function generateCombinations(chaine1, chaine2) {
    const liste = [];
    
    for (let i = 0; i < chaine1.length; i++) {
      for (let j = 0; j < chaine2.length; j++) {
        liste.push(chaine1[i] + chaine2[j]);
      }
    }
    
    return liste;
  }
  
  const result = generateCombinations("abc", "de");
  console.log(result);