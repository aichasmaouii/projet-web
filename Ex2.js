function Nombres_parfait(n) {
    for (let i = 1; i < n; i++) {
      let sum = 0;
      
      for (let j = 1; j < i; j++) {
        if (i % j === 0) {
          sum += j;
        }
      }
      
      if (sum === i) {
        console.log(i);
      }
    }
  }

  var Nbr = 10;
  Nombres_parfait(Nbr);