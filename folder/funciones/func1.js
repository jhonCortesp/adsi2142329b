function llenarVector(vector,tam){
    for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random()*100));
    }
    return vector;
}
let vec=new Array();
let x=5;
console.log(llenarVector(vec,x));
console.log(vec[0]);
console.log('par'+sumPar(vec));
console.log('impar'+sumImpar(vec));
//hoisting

function sumPar(vector){
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector [i]%2 == 0) {
            suma += vec[i];
        }
    }
    return suma;
}
function sumImpar(vector){
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector [i]%2!= 0) {
            suma += vec[i];
        }
    }
    return suma;
}

/*let vec=new Array();
console.log(vec.length());
vec.push('texto');
console.log(vec.length());
console.log(vec);
vec.push(120);
console.log(vec);
vec.unshift('fin');
console.log(vec);
vec.shift();
vec.pop();
console.log(vec);*/


