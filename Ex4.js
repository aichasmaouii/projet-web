function manipulateArray(T) {
    // Trier et afficher le tableau
    T.sort();
    console.log(T);
  
    // Ajouter l'élément 12 au tableau et l'afficher
    T.push(12);
    console.log(T);
  
    // Renverser et afficher le tableau
    T.reverse();
    console.log(T);
  
    // Afficher l'indice de l'élément 17
    const indice = T.indexOf(17);
    console.log(indice);
  
    // Enlever l'élément 38 et afficher le tableau
    T.splice(T.indexOf(38), 1);
    console.log(T);
  
    // Afficher le sous-tableau du 2e au 3e élément
    const sousTableau1 = T.slice(1, 3);
    console.log(sousTableau1);
  
    // Afficher le sous-tableau du début au 2e élément
    const sousTableau2 = T.slice(0, 2);
    console.log(sousTableau2);
  
    // Afficher le sous-tableau du 3e élément à la fin de la liste
    const sousTableau3 = T.slice(2);
    console.log(sousTableau3);
  }
  
  const T = [17, 38, 10, 25, 72];
  manipulateArray(T);